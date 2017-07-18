<?php
// admin/inquiry_edit.php
require_once( __DIR__ . '/init_auth.php');
// POST���ꂽ�����擾
$params = array('inquiry_id', 'response_body');
$input_data = array();
foreach($params  as  $p) {
    $input_data[$p] = (string)@$_POST[$p];
}
// �Œ����validate
if ( ('' === $input_data['inquiry_id'])
   or('' === $input_data['response_body']) ) {
    //
    header('Location: inquiry_detail.php?inquiry_id='
           . rawurlencode($input_data['inquiry_id']));
    exit;
}
// �u�ԐM���v��DB��UPDATE
// DB�n���h�����擾
$dbh = get_dbh();
// �v���y�A�h�X�e�[�g�����g�̍쐬
$sql = 'UPDATE inquirys
           SET status=2
               , response_body=:response_body
               , response_date=:response_date
         WHERE inquiry_id=:inquiry_id;';
$pre = $dbh->prepare($sql);
//var_dump($pre);
//var_dump($dbh->errorinfo());
// �l�̃o�C���h
$pre->bindValue(':response_body', $input_data['response_body']);
$pre->bindValue(':response_date', date('Y-m-d H:i:s'));
$pre->bindValue(':inquiry_id', $input_data['inquiry_id']);
// SQL�̎��s
$r = $pre->execute(); // XXX �G���[�`�F�b�N�ȗ�
// detail�ɑJ��
header('Location: inquiry_detail.php?inquiry_id='
       . rawurlencode($input_data['inquiry_id']));