<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<?php include("../tpl/head.php"); ?>
<body>

<!-- Head[Start] -->
<header>
    <?php echo $_SESSION["name"]; ?>さん　
    <?php include("menu.php"); ?>
</header>
<!-- Head[End] -->

<div class="outer">
<!-- Main[Start] -->
    <h1>ユーザー登録</h1>
<form method="post" action="user_insert.php">
   <fieldset>
    <table>
    <tr>
        <th>名前：</th>
      </tr>
      <tr>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <th>Login ID</th>
      </tr>
      <tr>
        <td><input type="text" name="lid"></td>
      </tr>
      <tr>
        <th>Login PW</th>
      </tr>
      <tr>
        <td><input type="text" name="lpw"></td>
      </tr>
      <tr>
        <th>管理FLG</th>
      </tr>
      <tr>
        <td>一般<input type="radio" name="kanri_flg" value="0" style="width:auto;"><br>管理者<input type="radio" name="kanri_flg" value="1" style="width: auto;"></td>
      </tr>
    </table>
      
    </label>
    <br>
     <!-- <label>退会FLG：<input type="text" name="life_flg"></label><br> -->
     <input type="submit" value="送信" class="submit btn">
    </fieldset>
</form>
<!-- Main[End] -->
</div>

</body>
</html>
