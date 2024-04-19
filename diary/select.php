<?php
session_start();

// ini_set('display_errors', 1);
// error_reporting(E_ALL);
$title = '☆BBS☆';

//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
include("funcs.php");
sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_diary_table ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();


//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>

<!DOCTYPE html>
<html lang="ja">
<?php
include("../tpl/head.php");
?>

<body class="bbs_select">
<!-- Head[Start] -->
<?php include("../tpl/header.php");?>
<!-- Head[End] -->

<!-- Main[Start] -->

<div class="outer">
    <div class="container">
      <?php foreach($values as $v){ ?>
        <div class="chat_item">
          <p class="chat_head"><span class="id"><?=h($v["id"])?></span><span class="name"><?=h($v["name"])?></span></p>
          <div class="text"><?=h($v["diary"])?></div>
          <div class="btn_area">
            <a class="btn" href="detail.php?id=<?=h($v["id"])?>" target="_brank">更新</a>

            <?php if ( $_SESSION["kanri_flg"] == 1 ) {?>
            <a class="btn" href="delete.php?id=<?=h($v["id"])?>">削除</a>
            <?php } ?>
            <?php if ( $_SESSION["kanri_flg"] !== 1 ) {?>
              削除できません
              <?php } ?>
          </div>
        </div>
      <?php } ?>

  </div>
</div>
<!-- Main[End] -->

<script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a),"です");

</script>
</body>
</html>
