<?php
// admin/logout.php
require_once( __DIR__ . '/../init.php');

// �Z�b�V�������̃��O�C������j��
unset($_SESSION['admin_auth']);

// index�Ɉړ�������
header('Location: ./index.php');