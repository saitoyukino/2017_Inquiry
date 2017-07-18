<pre>
<?php

/*
�p�X���[�h�̕ۑ��̎d��
�E����(���̂܂�)�F�ň��I�I�I�I
�Ehash�֐����g���F�_���I
�Esalt�{hash�֐��F�_���I
�E(���[�U�ʂ�salt�{hash�֐�)*��������(�X�g���b�`)�FOK
�Epassword_hash���g���FOK
 */
 
// password_hash.php
// http://dev2.m-fr.net/XXX/admin/password_hash.php
$raw_pass = 'password';
$t_start = microtime(true);
$pass = password_hash($raw_pass, PASSWORD_DEFAULT);
$t_end = microtime(true);
//
var_dump($raw_pass, $pass);
var_dump('passowrd_hash is ', $t_end - $t_start);

// �����p�R�[�h
$t_start = microtime(true);
$pass_md5 = md5($raw_pass);
$t_end = microtime(true);
var_dump('md5 is ', $t_end - $t_start);

$t_start = microtime(true);
$pass_sha1 = sha1($raw_pass);
$t_end = microtime(true);
var_dump('sha1 is ', $t_end - $t_start);

var_dump($pass_md5, $pass_sha1);