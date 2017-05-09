<?php
//inquiry.php
//
ob_start();
session_start();

//確認
//var_dump($_SESSION);

//入力内容を取得
//$input = $_SESSION['buffer']['input'] ?? [] //PHP 7.0以降ならこっち
  if (true === isset($_SESSION['buffer']['input'])) {
    $input = _SESSION['buffer']['input'];
} else{
    //$input = []; // PHP 5.4以降ならこっちでもよい
    $input = erray();
}

//XSS対策用関数
function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}

?>
<html>
 <body>
  <form action".inquiry_fin.php" methot="post">
  emailアドレス(*):<input type="text" name="email" value=
   "<?php echo h((string)@$input['email']); ?>"><br>

  名前:<input type="text" name="name" value=
   "<?php echo h((string)@$input['name']); ?>"><br>

  誕生日:<input type="text" name="birthday" value=
   "<?php echo h((string)@$input['birthday']); ?>"><br>

  問い合わせ内容:<textarea name="body" value="<?php echo h((string)@$input['body']); ?>">    </textarea><br>
   <button>問い合わせる</button>
  </form>
 </body>
</html>