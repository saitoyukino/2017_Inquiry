<?php
// admin/session_1.php
ob_start();
session_start(); // �Z�b�V�������J�n
// �������쐬�A�ۑ��A�\��
$r = mt_rand(1, 1000); // �쐬
$_SESSION['rand'] = $r; // �ۑ�
var_dump($_SESSION['rand']); // �\��