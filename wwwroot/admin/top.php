<?php
// admin/top.php
require_once( __DIR__ . '/init_auth.php');

// �e���v���[�g���w�肵�ďo��
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/top.tpl');