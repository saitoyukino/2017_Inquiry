<?php
// admin/init_auth.php

//
require_once( __DIR__ . '/../init.php');
require_once( __DIR__ . '/../dbh.php');

// �A�N�Z�X����F���O�C�����ĂȂ���Γ���Ȃ�
if ( false === isset($_SESSION['admin_auth']) ) {
    // XXX �G���[���b�Z�[�W
    header('Location: ./index.php');
    exit;
}
