<?php
// admin/inquiry_detail.php
require_once( __DIR__ . '/init_auth.php');

// �u�擾�������₢���킹�ԍ��v��c������
$inquiry_id = (string)@$_GET['inquiry_id'];
//$inquiry_id = $_GET['inquiry_id'] ?? ''; // PHP7�ȍ~
//var_dump($inquiry_id);

// �����y��validate
if ('' === $inquiry_id) {
    // XXX list�ɂ�����΂�
    header('Location: ./inquiry_list.php');
    exit;
}

// DB����u�₢���킹�̏ڍ׏��v���擾����

// DB�n���h�����擾
$dbh = get_dbh();
//


// �v���y�A�h�X�e�[�g�����g���쐬
$sql = 'SELECT * FROM inquirys
         WHERE inquiry_id = :inquiry_id';
$pre = $dbh->prepare($sql);
// �l���o�C���h
$pre->bindValue(':inquiry_id', $inquiry_id);
// SQL�����s
$r = $pre->execute(); // XXX �G���[�`�F�b�N�ȗ�
// �f�[�^���擾
$data = $pre->fetch(PDO::FETCH_ASSOC);

// �y���G���[�`�F�b�N
if (false === $data) {
    // XXX list�ɂ�����΂�
    header('Location: ./inquiry_list.php');
    exit;
}

// �₢���킹�̏ڍ׏����e���v���[�g�ɓn��
$smarty_obj->assign('inquiry_data', $data);

// �e���v���[�g���w�肵�ďo��
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/inquiry_detail.tpl');