<?php
// login.php
// ���ʃG���[����
function error() {
    // index�ɓ˂��Ԃ�
    // XXX ���ƂŃG���[���b�Z�[�W�o���悤�ɂ���
    header('Location: ./index.php');
    exit;
}
/*
 * �F��(authentication)���s��
 */
//
require_once( __DIR__ . '/../init.php');
//
require_once( __DIR__ . '/../dbh.php');
// ��ʓ��͂�ID�ƃp�X���[�h���擾
$id = (string)@$_POST['id'];
$pw = (string)@$_POST['pw'];
//var_dump($id, $pw);exit;
// �y��validate
if ( ('' === $id)||('' === $pw) ) {
    // �G���[�����B�֐�����exit���Ă�
    error();
}
/*
 * DB����ID�ƃp�X���[�h���擾
 */
// DB�n���h�����擾
$dbh = get_dbh();
//var_dump($dbh);exit;
// SELECT���s����
// ----
// �v���y�A�h�X�e�[�g�����g
$sql = 'SELECT * FROM admin_users
         WHERE admin_user_id=:admin_user_id';
$pre = $dbh->prepare($sql);
// �o�C���h
$pre->bindValue(':admin_user_id', $id);
// ���s
$r = $pre->execute();
//var_dump($r); exit;
if (false === $r) {
    // �G���[����
    // XXX �{���͕�Page�Ƃ����
    echo 'DB�ŃG���[���������܂���';
    echo $pre->errorInfo();
    exit;
}
// �f�[�^���擾����
$admin_user = $pre->fetch(PDO::FETCH_ASSOC);
//var_dump($admin_user); exit;
if (false === $admin_user) {
    // �G���[�����B�֐�����exit���Ă�
    error();
}
// ID�ƃp�X���[�h���r
$r = password_verify($pw, $admin_user['password']);
//var_dump($r); exit;
if (false === $r) {
    // �G���[�����B�֐�����exit���Ă�
    error();
}
// �F�؂�OK�Ȃ�
// �F�p�̏���������
session_regenerate_id(true); // �Ǝ㐫�΍�F���ԑ厖�I�I
$_SESSION['admin_auth']['admin_user_id'] = $id;
// �u���O�C����̊Ǘ����TopPage�v�ɑJ��
header('Location: ./top.php');