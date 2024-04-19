<?php
$path = "/php/kadai10_auth/";
?>
<!-- Head[Start] -->
<header>
  <nav class="nav">
    <ul>
    <?php if($_SESSION["chk_ssid"]!=session_id()) {?>
    <li><a class="btn header_link" href="<?=$path?>bbs/login.php">ログイン</a></li>
    <?php } ?>
    <?php if($_SESSION["chk_ssid"]=session_id()) {?>
    <li><a class="btn header_link" href="<?=$path?>bbs/logout.php">ログアウト</a></li>
    <?php } ?>
      <li><a class="btn header_link" href="<?=$path?>">プロフィール</a></li>
      <li><a class="btn header_link" href="<?=$path?>bbs/index.php">投稿する</a></li>
      <li><a class="btn header_link" href="<?=$path?>bbs/select.php">BBS</a></li>
    </ul>

    <ul>
    <li><a class="btn header_link" href="<?=$path?>diary/select.php">ブログ</a></li>
    </ul>
  </nav>
</header>
<!-- Head[End] -->
<?php if($_SESSION["name"]){?>
<p style="padding: 10px 20px 20px;"><?=$_SESSION["name"]?>さんこんにちは</p>
<?php } ?>
