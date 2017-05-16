<?php
//inquiry_fin.php

//入力された情報を取得
/*$email = (string)@$_POST['email'];
email = (string)filter_input(INPUT_POST, 'email';*/
$params = array( 'email','name','birthday','body');
$input_data = array();
foreach($params  as  $p) {
    $input_data[$p] = (string)@$_POST[$p];
}
var_dump($input_data);

//var_dum($input_data);

//validate(情報は正しい？）
$error_detail = array();//エラー情報格納用変数

//CSRFチェック
//tokenの存在確認(check exist)
$posted_token = $_POST['csrf_token'];
if (false === isset($_SESSION['csrf_token'][$posted_token])){
    //
    $error_detail['error_csrf_token'] = true;
}else{
    //tokenの寿命確認(check life)
    $ttl - $_SESSION['csrf_token'][$posted_token];
    if (time() >=  $ttl + 60) {
        $error_detail['error_csrf_timeover'] = true;
    }
    
    unset 
}

//必須チェック
$must_params = array('email', 'body');
foreach($must_params  as  $p){
     if('' === $input_data[$p]){
	//エラー処理
	$error_detail["error_must_{$p}"] = true;
     }
}

//型チェック：email
// XXXRFC日準拠のメアドはしらん！！
if(false === filter_var($input_data['email'],FILTER_VALIDATE_EMAIL)) {
    //エラー処理
    $error_detail["error_format_email"] = true;
}

//型チェック：日付
if('' !== $input_data['birthday']) {
    if(false === strtotime($input_data['birthday'])) {
	//エラー
	$error_detail["error_format_birthday"] = true;
    }
}

//エラー判定
if(array() !== $error_detail){
	//
	echo 'エラーがあったらしい！！';
	exit;
}
//ダミー
echo 'でーたのvalidateはOKでした！！';
//入力された情報をDBにinsert

//「ありがとう」Pageの出力

?>