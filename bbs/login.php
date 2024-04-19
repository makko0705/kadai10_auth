<!DOCTYPE html>
<html>

<head>
<?php
include("../tpl/head.php");
?>

<body>

  <header>
  </header>
  <div class="outer">
    <div class="container">
      <h1>ログイン</h1>
      <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
      <form name="form1" action="login_act.php" method="post">
        <table>
          <tr>
            <th>ユーザーID</th>
          </tr>
          <tr>
            <td><input type="text" name="lid"></td>
          </tr>
          <tr>
            <th>パスワード</th>
          </tr>
          <tr>
            <td><input type="password" name="lpw"></td>
          </tr>
        </table>
        <input type="submit" value="ログイン" class="submit btn">
      </form>
    </div>
  </div>

</body>

</html>