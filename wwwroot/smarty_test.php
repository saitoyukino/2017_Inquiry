<php
//smarty_test.php

//Smartyのinclude
require_onse(_DIR_ . '' '/vendor/smarty-3.1.30/libs/Smarty.class.php');

//Smarty初期設定
$smarty_obj = new Smarty();
$smarty_obj->setTemplateDir(_DIR_.'/../smarty/templates/');
$smarty_obj->setCompileDir(_DIR_.'/../smarty/templates_c/');

//Smartyへのデータの入力
$s = 'データ入力テスト';
$smarty_obj->assign('val', $s);

//テンプレートを指定して出力
$smarty_obj->display('smarty_test.tpl');

