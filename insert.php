<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//ここで画像の設定
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './' . $_FILES['fname']['name'];

if (is_uploaded_file($tempfile)) {

    if ( move_uploaded_file($tempfile , $filename )) {
        echo $filename."をアップロードしました。";
        echo '<img src="';
        echo $filename;
        echo '">';
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
} 


$q1   = '';
$q2   = '';
$q3   = '';
$a1   = '';
$a2   = '';
$a3   = '';

$q1   = $_POST["q1"];
$q2   = $_POST["q2"];
$q3   = $_POST["q3"];
$a1   = $_POST["a1"];
$a2   = $_POST["a2"];
$a3   = $_POST["a3"];
// $diary = $_POST["diary"];

//ここでギャル文字に書き換える
$target = array(
    'あ', 
    'い',
    'う',
    'え',
    'お',
    'か',//か
    'き',
    'く',
    'け',
    'こ',
    'さ',//さ
    'し',
    'す',
    'せ',
    'そ',
    'た',//た
    'ち',
    'つ',
    'て',
    'と',
    'な',//な
    'に',
    'ぬ',
    'ね',
    'の',
    'は',//は
    'ひ',
    'ふ',
    'へ',
    'ほ',
    'ま',//ま
    'み',
    'む',
    'め',
    'も',
    'や',//や
    'ゆ',
    'よ',
    'ら',//ら
    'り',
    'る',
    'れ',
    'ろ',
    'わ',//わ
    'を',
    'ん'
);
$replace = array(
    'ぁ',//あ
    'ぃ',
    'ｩ',
    'ぇ',
    'ぉ',
    'ヵ',//か
    'ｷ',
    '＜',
    'ケ',
    'ｺ',
    '±',//さ
    'Ｕ',
    'ㇲ',
    '世',
    'ｿ',
    'ﾅﾆ',//た
    'ﾁ',
    '⊃',
    'ﾃ',
    'ㇳ',
    'ﾅょ',//な
    '(ﾆ',
    'йu',
    'йё',
    'σ',
    'ﾚょ',//は
    'Ω',
    'ﾌ',
    'Λ',
    'ﾚま',
    'мα',//ま
    '三',
    'ﾑ',
    '×',
    'м○',
    'Ча',//や
    'Чц',
    'ЧО',
    'яа',//ら
    'ﾚ｣',
    'ゑ',
    'яё',
    '□',
    'ヮ',//わ
    'щО',
    'ω'
);
// $new_diary = str_replace($target, $replace, $diary);
// $new_name = str_replace($target, $replace, $name);
$new_q1   = str_replace($target, $replace, $q1);
$new_q2   = str_replace($target, $replace, $q2);
$new_q3   = str_replace($target, $replace, $q3);
$new_a1   = str_replace($target, $replace, $a1);
$new_a2   = str_replace($target, $replace, $a2);
$new_a3   = str_replace($target, $replace, $a3);

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_profile_table(q1,q2,q3,a1,a2,a3,filename)VALUES(:q1,:q2,:q3,:a1,:a2,:a3,:filename)");
$stmt->bindValue(':q1',   $new_q1,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q2',   $new_q2,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q3',   $new_q3,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a1',   $new_a1,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2',   $new_a2,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3',   $new_a3,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':filename', $filename, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':name',   $new_name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    //*** function化する！*****************
    redirect("profile.php");
}



?>