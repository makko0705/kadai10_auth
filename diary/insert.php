<?php

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

$name   = $_POST["name"];
$diary = $_POST["diary"];

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
$new_diary = str_replace($target, $replace, $diary);
$new_name = str_replace($target, $replace, $name);




if($name){
    echo $new_name;
}
if($name){
    echo $new_diary;
}
if($address){
    echo $address;
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_diary_table(name,diary,indate)VALUES(:name,:diary,sysdate())");
$stmt->bindValue(':name',   $new_name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':diary', $new_diary, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    //*** function化する！*****************
    redirect("select.php");
}



?>