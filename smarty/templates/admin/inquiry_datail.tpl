{* inquiry_detail.tpl *}
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
<div class="container">
<h1>�₢���킹�ڍ�</h1>
{* $inquiry_data|var_dump *}
<table class="table">
<tr>
  <td>id
  <td>{$inquiry_data.inquiry_id}
<tr>
  <td>�X�e�[�^�X
  <td>{if 0 == $inquiry_data.status}���ԐM{/if}
      {if 1 == $inquiry_data.status}�ԐM��ƒ�{/if}
      {if 2 == $inquiry_data.status}�ԐM��{/if}
<tr>
  <td>email
  <td>{$inquiry_data.email}
<tr>
  <td>name
  <td>{$inquiry_data.name}
<tr>
  <td>birthday
  <td>{$inquiry_data.birthday}
<tr>
  <td>body
  <td><pre>{$inquiry_data.inquiry_body}</pre>
<tr>
  <td>�ԐM����
  <td>{$inquiry_data.response_date}
<tr>
  <td>�ԐM���e
  <td><pre>{$inquiry_data.response_body}</pre>
</table>

<h2>�ԐM���e�̓o�^</h2>
<form action="./inquiry_edit.php" method="post">
<input type="hidden" name="inquiry_id" value="{$inquiry_data.inquiry_id}">
�ԐM���e<textarea name="response_body"></textarea><br>
<button class="btn btn-primary">�ԐM���e��o�^����</button>
</form>

<h2>������</h2>
<ul>
  <li>�u�ԐM��mail����v�@�\
</ul>

<hr>
<a href="./top.php">Top�ɖ߂�</a>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
