<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//ここで画像の設定
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './' . $_FILES['fname']['name'];

// if (is_uploaded_file($tempfile)) {

//     if ( move_uploaded_file($tempfile , $filename )) {
//         echo $filename."をアップロードしました。";
//         echo '<img src="';
//         echo $filename;
//         echo '">';
//     } else {
//         echo "ファイルをアップロードできません。";
//     }
// } else {
//     echo "ファイルが選択されていません。";
// } 


//1. POSTデータ取得
$name   = $_POST["name"];
$naiyou = $_POST["naiyou"];
$age    = $_POST["age"];
$id    = $_POST["id"];
var_dump($name);
var_dump($naiyou);
var_dump($age);

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$sql = "UPDATE gs_an_table SET name=:name,age=:age,naiyou=:naiyou,filename=:filename WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age',    $age,    PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':filename', $filename, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    //*** function化する！*****************
    redirect("select.php");
}








?>
