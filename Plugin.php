<?php
/**
 * Fancybox
 *
 * @package Fancybox
 * @author 路飞
 * @version 0.0.1
 * @link http://zz8.me/
 */

class FancyBox_Plugin implements Typecho_Plugin_Interface{
    /* 激活插件方法 */
    public static function activate(){
        //启用插件时执行以下操作
        Typecho_Plugin::factory('Widget_Archive')->addResource = array('FancyBox_Plugin', 'addResource');
        Typecho_Plugin::factory('Widget_Archive')->render = array('FancyBox_Plugin', 'render');
        return "插件已激活，快去写个文章添加个图片试试吧！";
    }

    /*加载资源*/
    public static function addResource(){
        $Path = Helper::options()->pluginUrl . '/Fancybox/';
        //加载fancybox css 文件
        echo '<link rel="stylesheet" type="text/css" href="' . $Path . 'css/jquery.fancybox.min.css" />';
        //加载fancybox js 文件
        echo '<script src="' . $Path . 'js/jquery.fancybox.min.js"></script>';
    }

    /* 禁用插件方法 */
    public static function deactivate(){
        //没什么要释放的资源
        return "插件已禁用，别的不多说了！";
    }

    /* 插件配置方法 */
    public static function config(Typecho_Widget_Helper_Form $form){
        $jquery = new Typecho_Widget_Helper_Form_Element_Checkbox('jquery', array('jquery' => '不加载JQuery'), null, _t('是否加载JQuery？'), _t('该插件基于JQuery，如果主题已经加载JQuery，则可以勾选。'));
        $form->addInput($jquery);
    }

    /* 个人用户的配置方法 */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /* 插件实现方法 */
    public static function render(){
        //初始化插件，如需配置其它功能，请查看官网 API https://fancyapps.com/fancybox/3/docs/
        echo `
            <script>
                $('[data-fancybox="gallery"]').fancybox({
                    thumbs : {
                        autoStart : true
                    },
                });
            </script>
        `;
    }
}