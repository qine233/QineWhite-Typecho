<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($settings)
{
//定义一个头像源setting
    $settingsLogo = new Typecho_Widget_Helper_Form_Element_Text('settingsLogo', NULL, NULL, _t('头像地址'), _t('在这里填入一个图片 URL 地址, 以修改头像'));
    $settings->addInput($settingsLogo);

    //定义一个座右铭setting
    $settingsTalk = new Typecho_Widget_Helper_Form_Element_Text('settingsTalk', NULL, NULL, _t('座右铭文字'), _t('在这里填入一些文字，以展示在对应位置'));
    $settings->addInput($settingsTalk);

    //定义一个首页模块1的图片源setting
    $settingsmodF = new Typecho_Widget_Helper_Form_Element_Text('settingsmodF', NULL, NULL, _t('图片地址'), _t('在这里填入一些文字，以展示在首页模块1'));
    $settings->addInput($settingsmodF);



}
