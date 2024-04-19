<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

$id = $_GET["id"];
$title = '☆更新する☆';


//１．PHP
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_diary_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$v =  $stmt->fetch(); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
//$json = json_encode($values,JSON_UNESCAPED_UNICODE);
?>

<!DOCTYPE html>
<html lang="ja">

  <?php include("../tpl/head.php");?>

<body class="bbs_detail">

<!-- Head[Start] -->
<?php include("../tpl/header.php");?>
<!-- Head[End] -->


<!-- Main[Start] -->
<div class="outer">
<form method="post" action="update.php" enctype="multipart/form-data">
  <h1>更新スるょ</h1>
  <fieldset>
  <table>
    <tr>
      <th>名前は?</th>
    </tr>
    <tr>
      <td><input type="text" name="name" value="<?=$v["name"]?>"></td>
    </tr>
    <tr>
    <th>ブログ書ke☆</th>
    </tr>
    <tr>
      <td><textArea name="diary" class="diary" rows="4" cols="40"><?=$v["diary"]?></textArea></td>
    </tr>

  </table>
  <input type="hidden" name="id" value="<?=$v["id"]?>">
  <input type="submit" value="更新する" class="submit btn">
</fieldset>
</form>
</div>

<!-- Main[End] -->

</body>
</html>



