<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
use \Bitrix\Main\Application;
//--------------------------------------------------------------
global $APPLICATION;
$APPLICATION->RestartBuffer();
//------------------------------------------------------------------------------
\Bitrix\Main\Loader::includeModule('ylab.fruits');
$fruit_id = intval( Application::getInstance()->getContext()->getRequest()->get('id') );
$APPLICATION->includeComponent('ylab:fruits','', ['FRUIT_ID' => $fruit_id]);
