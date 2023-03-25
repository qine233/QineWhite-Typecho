<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($settings)
{
//定义一个头像源setting
    $settingsLogo = new Typecho_Widget_Helper_Form_Element_Text('settingsLogo', NULL, NULL, _t('头像地址'), _t('在这里填入一个图片 URL 地址, 以修改头像'));
    $settings->addInput($settingsLogo);





}