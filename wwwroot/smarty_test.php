<php
//smarty_test.php

//Smarty��include
require_onse(_DIR_ . '' '/vendor/smarty-3.1.30/libs/Smarty.class.php');

//Smarty�����ݒ�
$smarty_obj = new Smarty();
$smarty_obj->setTemplateDir(_DIR_.'/../smarty/templates/');
$smarty_obj->setCompileDir(_DIR_.'/../smarty/templates_c/');

//Smarty�ւ̃f�[�^�̓���
$s = '�f�[�^���̓e�X�g';
$smarty_obj->assign('val', $s);

//�e���v���[�g���w�肵�ďo��
$smarty_obj->display('smarty_test.tpl');

