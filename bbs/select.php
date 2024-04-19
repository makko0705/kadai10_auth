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
$sql = "SELECT * FROM gs_an_table ORDER BY id DESC";
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

// //管理者かどうかを確認する
// $sql_user = "SELECT * FROM gs_user_table ORDER BY id DESC";
// $stmt_user = $pdo->prepare($sql_user);
// $status_user = $stmt_user->execute();

// $s_user =  $stmt_user->fetch(); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
// var_dump($s_user["lid"]);

//画像の設定
try{
  if(is_uploaded_file($_FILES['file']['tmp_name'])){
          move_uploaded_file($_FILES['file']['tmp_name'], './img/'.$_FILES['file']['name']);
  }
}catch(Exception $e) {
  echo 'エラー:', $e->getMessage().PHP_EOL;
}
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
<h1><a href="index.php">投稿する</a></h1>
    <div class="container">
      <?php foreach($values as $v){ ?>
        <div class="chat_item">
          <p class="chat_head"><span class="id"><?=h($v["id"])?></span><span class="name"><?=h($v["name"])?></span><span class="address"><?=h($v["address"])?></span></p>
          <div class="text"><?=h($v["naiyou"])?></div>
          <?php if ( $v["filename"] !== 0 && $v["filename"] !== "./") {?>
            <div class="image"><img src="<?=h($v["filename"])?>"></div>
          <?php } ?>
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
