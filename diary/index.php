<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
$title = '☆ブログを書くょ☆';
?>

<!DOCTYPE html>
<html lang="ja">
<?php
include("../tpl/head.php");
?>
<body class="bbs_index">

<!-- Head[Start] -->
<?php include("../tpl/header.php");?>
<!-- Head[End] -->



<!-- Main[Start] -->
<div class="outer">
<form action="insert.php" method="post" enctype="multipart/form-data">
<h1>ブログﾀﾞﾖ☆</h1>
<table>
<tr>
    <th>名前は?</th>
  </tr>
  <tr>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <th>ブログ書ke☆</th>
  </tr>
  <tr>
    <td><textArea name="diary" rows="4" cols="40"></textArea></td>
  </tr>
</table>

<input type="submit" value="アップロード" class="submit btn">

</form>
</body>
</html>
