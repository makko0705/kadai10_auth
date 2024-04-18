<!-- Head[Start] -->
<header>
  <nav class="nav">
    <ul>
    <?php if($_SESSION["chk_ssid"]!=session_id()) {?>
    <li><a class="btn header_link" href="login.php">ログイン</a></li>
    <?php } ?>
    <?php if($_SESSION["chk_ssid"]=session_id()) {?>
    <li><a class="btn header_link" href="logout.php">ログアウト</a></li>
    <?php } ?>
      <li><a class="btn header_link" href="../">プロフィール</a></li>
      <li><a class="btn header_link" href="index.php">投稿する</a></li>
      <li><a class="btn header_link" href="select.php">BBS</a></li>
    </ul>
  </nav>
</header>
<!-- Head[End] -->