<?php

require_once( _DIR_ . '/../init.php);

if ( false === isset($_SESSION['admin_auth']) ) {
    heeader('Location: ./index.php')
    echo
}
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/top.tpl');
