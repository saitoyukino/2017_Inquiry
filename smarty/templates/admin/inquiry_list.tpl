{* inquiry_list.tpl *}
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
<div class="container">

<h1>–â‚¢‡‚í‚¹ˆê——</h1>
{* $inquiry_list|var_dump *}

<h2>ŒŸõ</h2>
<form action="./inquiry_list.php" method="GET">
<input type="hidden" name="sort" value="{$sort}">
name(‚ ‚¢‚Ü‚¢)<input name="name" value="{$find_string.name}"><br>
email<input name="email" value="{$find_string.email}"><br>
’a¶“ú<input name="birthday_from" value="{$find_string.birthday_from}">
      `<input name="birthday_to" value="{$find_string.birthday_to}"><br>
<button>ŒŸõ</button>
</form>

<h2>ˆê——</h2>
<a heaf="./inquiry_list.php?sort={$sort}&{uri_params|unescape}&p=0 class="btn btn-nomal">back</a>
<a heaf="./inquiry_list.php?sort={$sort}&{uri_params|unescape}&p=1" class="btn btn-nomal">next</a><br>
<table class="table table-hover">
<tr>
  <th>ID<a href="./inquiry_list.php?sort=id&{$uri_params|unescape}">£</a>
    <a href="./inquiry_list.php?sort=id_desc&{$uri_params|unescape}">¥</a>
  <th>–¼‘O<a href="">£</a><a href="">¥</a>
  <th>email<a href="">£</a><a href="">¥</a>
  <th>–â‚¢‡‚í‚¹“à—e
  <th>•ÔM“ú<a href="./inquiry_list.php?sort=response_date&{$uri_params|unescape}">£</a>
    <a href="./inquiry_list.php?sort=response_date_desc&{$uri_params|unescape}">¥</a>
  <th>
{foreach from=$inquiry_list item=i}
  <tr>
    <td>{$i.inquiry_id}
    <td>{$i.name}
    <td>{$i.email}
    <td>{$i.inquiry_body}
    <td>{$i.response_date}
    <td><a href="./inquiry_detail.php?inquiry_id={$i.inquiry_id|urlencode}" class="btn btn-nomal">–â‚¢‡‚í‚¹Ú×</a>
{/foreach}
</table>

<hr>
<a href="./top.php">Top‚É–ß‚é</a>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div>
</bod>
</html>