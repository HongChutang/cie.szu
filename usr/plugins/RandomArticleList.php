<?php
/**
 * 随机显示文章列表
 * 
 * @package RandomArticleList
 * @author df
 * @version 2.0.1
 * @link http://df-blog.cn
 */
class RandomArticleList implements Typecho_Plugin_Interface
{
	/**
	 * 激活插件方法,如果激活失败,直接抛出异常
	 * 
	 * @access public
	 * @return void
	 * @throws Typecho_Plugin_Exception
	 */
	public static function activate(){}
	
	/**
	 * 禁用插件方法,如果禁用失败,直接抛出异常
	 * 
	 * @static
	 * @access public
	 * @return void
	 * @throws Typecho_Plugin_Exception
	 */
	public static function deactivate(){}
	
	/**
	 * 获取插件配置面板
	 * 
	 * @access public
	 * @param Typecho_Widget_Helper_Form $form 配置面板
	 * @return void
	 */
	public static function config(Typecho_Widget_Helper_Form $form){ 
		$numset = new Typecho_Widget_Helper_Form_Element_Radio('numset',
		array('a'=>'与设置中的"文章列表数目"相同','b'=>'单独设定随机文章列表数目'),
		'a','文章数目选项');
		$form->addInput($numset->multiMode()); 
		
		$listnum = new Typecho_Widget_Helper_Form_Element_Text('num', NULL, '10', _t('文章数目'));
		$listnum->input->setAttribute('class', 'mini');
		$form->addInput($listnum->addRule('required', _t('必须填写文章列表数目'))
		->addRule('isInteger', _t('文章数目必须是纯数字')));
		
		$time_cache = new Typecho_Widget_Helper_Form_Element_Text('cache', NULL, '60', _t('缓存时间'),_t('缓存时间单位为秒'));
		$time_cache->input->setAttribute('class', 'mini');
		$form->addInput($time_cache->addRule('required', _t('必须填写缓存时间'))
		->addRule('isInteger', _t('缓存时间必须是整数')));
		
		$title_len = new Typecho_Widget_Helper_Form_Element_Text('title_length', NULL, '0', _t('标题长度'),_t('这里设置截取的长度值，标题过长可能会影响版面，默认为0则不截取。'));
		$title_len->input->setAttribute('class', 'mini');
		$form->addInput($title_len->addRule('isInteger', _t('标题长度必须是整数')));
	}
	
	/**
	 * 个人用户的配置面板
	 * 
	 * @access public
	 * @param Typecho_Widget_Helper_Form $form
	 * @return void
	 */
	public static function personalConfig(Typecho_Widget_Helper_Form $form){}

	/**
	 * 插件实现方法
	 * 
	 * @access public
	 * @return void
	 */
	public static function parse($format='<li><a href="{permalink}">{title}</a></li>')
	{
		$option = Typecho_Widget::widget('Widget_Options')->plugin('RandomArticleList');
		$file="./usr/uploads/RandomList/RandomList.xml";
		$xml = @simplexml_load_file($file);
		if ($xml) {
			/** 从XML中读取数据*/
			$time_dl=$xml->attributes();		
			if(time()-$time_dl<$option->cache){ //如果时间间隔小于设定值，则直接从xml文件读取
				foreach($xml->children() as $rd)
				{		   
					echo str_replace(array('{permalink}','{title}'),array($rd->link[0],$rd->title[0]),$format);
				}
			}else{
				qy_datebase($format,$option,$file);
			}
		} else {
			qy_datebase($format,$option,$file);
		}  
	}
}

/**第一次启用插件时或超过缓存时间则开始读取数据库*/
function qy_datebase($format,$option,$file){  
	/**获取文章数目设定*/		   
	if ($option->numset == 'a'){
		$num = Typecho_Widget::widget('Widget_Options')->postsListSize;
	}else{
		$num = $option->num;
	}

	/**获取适配器名称*/
	$db = Typecho_Db::get(); 	
	/**获取日志总数*/
	$rs = $db->fetchRow($db->select(array('COUNT(cid)' => 'total'))->from('table.contents')
	->where('table.contents.status = ?', 'publish')		
	->where('table.contents.type = ?', 'post'));
	$total=$rs['total'];
	
	/**设置随机数组*/
	srand((float) microtime() * 10000000);
	$ary=range(0,$total-1);
        if($num>$total) $num=$total;
	$rand = array_rand($ary, $num);

	/**获取数据,输出结果并存入到XML文件*/
	$list = '<lists/>';
	$xml = new SimpleXMLElement($list); 
	$xml->addAttribute('time', time()); 
	
	foreach($rand as $index){		
		$result = $db->fetchRow($db->select()->from('table.contents')
		->where('table.contents.status = ?', 'publish')		
		->where('table.contents.type = ?', 'post')		
		->offset($index)
		->limit(1));
		
		$value = Typecho_Widget::widget('Widget_Abstract_Contents')->push($result);
		$title = $option->title_length ? cutstr($value['title'],$option->title_length) : $value['title'];
		echo str_replace(array('{permalink}','{title}'),array($value['permalink'],$title),$format);
		$rd=$xml->addChild('rd');
		$rd->addChild('title',$title);
		$rd->addChild('link',$value['permalink']);		
	}
	
	$fp=@fopen($file,'w');
	fwrite($fp,$xml->asXML());
	fclose($fp);
}

/**截取字符串函数*/
function cutstr($string, $length) {
	$wordscut='';
	$j=0;
	preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $info);  
	for($i=0; $i<count($info[0]); $i++) {
		$wordscut .= $info[0][$i];
		$j = ord($info[0][$i]) > 127 ? $j + 2 : $j + 1;
		if ($j > $length - 3) {
			return $wordscut." ...";
		}
	}
	return join('', $info[0]);
}
