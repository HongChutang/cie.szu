<?php
/**
 * 文章编辑器，<font color="red"><b>请勿关闭</b></font>。
 * 
 * @package UEditor
 * @author Jason
 * @version 1.0.0
 * @link http://cie.szu.edu.cn
 * @date 2014-06-04
 *
 */
class UEditor_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('admin/write-post.php')->richEditor = array('UEditor_Plugin', 'render');
        Typecho_Plugin::factory('admin/write-page.php')->richEditor = array('UEditor_Plugin', 'render');
        
        Helper::addPanel(0, 'UEditor/ueditor/ueditor.config.js','', '', 'contributor');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        Helper::removePanel(0, 'UEditor/ueditor/ueditor.config.js');
    }
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form) {}
    
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
    public static function render($post)
    {
        $options = Helper::options();
        $js = Typecho_Common::url('UEditor/ueditor/ueditor.all.min.js', $options->pluginUrl);
        $configJs = Typecho_Common::url('UEditor/ueditor/ueditor.config.js', $options->pluginUrl);
        
        echo '<style type="text/css">
				body{
					/** 保留此规则使dialogs的某些组件文字可见 */
					color:#000 !important;
				}
				.typecho-label + p{overflow:hidden;}
			</style>';
        echo '</script><script type="text/javascript" src="'. $configJs. '"></script><script type="text/javascript" src="'. $js. '"></script>';
        echo '<script type="text/javascript">
        	var ue1 = new baidu.editor.ui.Editor();
        	window.onload = function() {
				// 渲染
        		ue1.render("text");
        	}
    
    // 保存草稿时同步
	document.getElementById("btn-save").onclick = function() {
        ue1.sync("text");
    }

    // 提交时同步
	document.getElementById("btn-submit").onclick = function() {
		ue1.sync("text");
	}
	</script>';
    }
}