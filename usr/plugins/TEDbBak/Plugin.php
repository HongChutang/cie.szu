<?php
/**
 * Typecho数据库备份工具 
 * 
 * @package TEDbBak
 * @author arest
 * @version 1.0.0
 * @link http://www.blog.kgsoft.cn
 */
class TEDbBak_Plugin implements Typecho_Plugin_Interface
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
        Helper::addPanel(1, "TEDbBak/MainView.php", _t("数据库备份"), _t("数据库备份"), 'administrator');
        Helper::addAction('kgsoft_dbbak', 'TEDbBak_Action');
        Helper::addRoute('forbiddenUrl', '/usr/plugins/TEDbBak/bak/[str:string]', 'TEDbBak_Action', 'forbid', 'index_page');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){
        Helper::removeAction('kgsoft_dbbak');
        Helper::removePanel(1, "TEDbBak/MainView.php");
        Helper::removeRoute("forbiddenUrl");
    }

    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form) {
        /** 备份文件数目*/
        $baknum = new Typecho_Widget_Helper_Form_Element_Text('baknum', NULL, _t("5"), _t('您想最多保存多少份历史备份？'));
        $form->addInput($baknum);
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
    public static function render() {}
}
