<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>画像アップロード</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>
<!-- Head[Start] -->
<?php
include("tpl/header.php");
?>

<!-- Head[End] -->
    <div class="outer">
        <div class="blog_head">
        <marquee><p>♡ﾁｬﾝﾏｷの部屋へようこそ♡</p></marquee>
        <p class="">†*:;;;:*†*:;;;:*†*:;;;:*†*:;;;:*†**†*:;;;:*†*:;;;:*†*:;;;:*†*:;;;:**†</p>
        <p>キリ番踏んだら報告してね✨</p>
        <p class="blinking">あなたは<img src="img/c01.gif">人目のお姫様♡</p>
        </div>
        <div class="eyecatch">
            <p><img src="img/eyecatch.png" alt=""></p>
        </div>

        <table>
            <tr>
                <th>HN</th>
            </tr>
            <tr>
                <td>ﾁｬﾝﾏｷ♡</td>
            </tr>
            <tr>
                <th>ｹﾞｽﾄﾌﾞｯｸ</th>
            </tr>
            <tr>
                <td><p><a href="bbs/select.php">ｹﾞｽﾌﾞってやつ♡</a></p></td>
            </tr>
            <tr>
                <th>ﾌﾞﾛｸﾞ</th>
            </tr>
            <tr>
                <td><p><a href="diary/select.php">会員制ﾌﾞﾛｸﾞだょ♡</a></p></td>
            </tr>
            <tr>
                <th>持ってる資格</th>
            </tr>
            <tr>
                <td>普通自動車免許<br>英検準2級<br>恋人検定1級</td>
            </tr>
            <tr>
                <th>体重</th>
            </tr>
            <tr>
                <td>りんご30個くらい</td>
            </tr>
            <tr>
                <th>前世</th>
            </tr>
            <tr>
                <td>Angel👼</td>
            </tr>
            <tr>
                <th>落書きしてく？</th>
            </tr>
            <tr>
                <td>
                    <div class="input_area">
                        <div class="brash input_item">
                            <div class="brash_menu">
                                <span>ペンの色</span>
                                <input type="color" id="brash_color"><p id="inputColorResult"></p>       
                            </div>
                            <div class="brash_menu">
                                <span>太さ</span>
                                <input type="range" id="brash_width" name="brash_width" min="3" max="150">
                                <p id="inputWidthResult"></p> 
                            </div>
                        </div>
                        <div class="upload input_item">
                                <form action="test.html" method="post" enctype="multipart/form-data" >
                                <input type="file" name="test" onchange="previewFile(this);" id="file">
                        </div>    
                    </div>
                    <div class="wrap printclub input_item">
                        <div class="canvas_wrap">
                        <img src="" id="demo_image" width="500" height="500" alt="画像を選んでください">
                        <div id="bg_area"></div>
                        <canvas id="drow_area" width="500" height="500" data-value="書きました"></canvas>   
                        </div>
                        <canvas id="concat" width="500" height="500" data-value="合成しました"></canvas> 
                    </div>
                    <div class="btn_area">
                        <p id="clear_btn" class="btn">最初から</p>
                        <p id="btn_concat" class="btn">完成</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <footer> SINCE 2024.03.23~</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="./js/main.js">
</script>
</body>

</html>
