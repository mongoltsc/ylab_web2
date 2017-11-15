<?php
IncludeModuleLangFile(__FILE__);
$aMenu = array();
global $APPLICATION;

return array(
    'parent_menu'   => 'global_menu_content',
    'sort'          => 300,
    'text'          => GetMessage('YLAB_FRUITS_MENU_TEXT'),
    'title'         => GetMessage('YLAB_FRUITS_MENU_TITLE'),
    'url'           => 'ylab_fruit_admin.php?lang='.LANG,
    'icon'          => 'learning_menu_icon',
    'items_id'      => 'menu_ylab_fruits',
    'items'         => array()
);