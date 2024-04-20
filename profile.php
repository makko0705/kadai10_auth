<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

$title = '☆BBS☆';

//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
include("funcs.php");
sschk();
$pdo = db_conn();

//２．データ登録SQL作成
// $sql = "SELECT * FROM gs_profile_table ORDER BY id DESC";
$sql = "SELECT * FROM gs_profile_table WHERE id = " . $_SESSION["id"] . " ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();


//３．データ表示
$values = "";
if ($status == false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values, JSON_UNESCAPED_UNICODE);

?>

<!DOCTYPE html>
<html lang="ja">
<?php
include("tpl/head.php");
?>

<body class="bbs_select">
  <!-- Head[Start] -->
  <?php include("tpl/header.php"); ?>
  <!-- Head[End] -->

  <!-- Main[Start] -->

  <div class="outer">
    <div class="container">
      <?php if ($_SESSION["name"]) { ?>
        <p style="padding: 10px 20px 20px;"><?= $_SESSION["name"] ?>ﾁｧﾝのプロフィール</p>
      <?php } ?>
      <?php foreach ($values as $v) { ?>
        <div class="chat_item">
        <div class="eyecatch">
            <p><img src="img/eyecatch.png" alt=""></p>
        </div>
          <table>
          <tr>
            <th><?= h($v["q1"]) ?></th>
          </tr>
          <tr>
            <td><?= h($v["a1"]) ?></td>
          </tr>
          <tr>
            <th><?= h($v["q2"]) ?></th>
          </tr>
          <tr>
            <td><?= h($v["q2"]) ?></td>
          </tr>
          <tr>
            <th><?= h($v["q3"]) ?></th>
          </tr>
          <tr>
            <td><?= h($v["a3"]) ?></td>
          </tr>
          </table>
        </div>
      <?php } ?>

    </div>
  </div>
  <!-- Main[End] -->

  <script>
    const a = '<?php echo $json; ?>';
    console.log(JSON.parse(a), "です");
  </script>
</body>

</html>