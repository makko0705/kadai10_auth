<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>プロフィール 登録</title>
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
            <marquee>
                <p>♡ﾁｬﾝﾏｷの部屋へようこそ♡</p>
            </marquee>
            <p class="">†*:;;;:*†*:;;;:*†*:;;;:*†*:;;;:*†**†*:;;;:*†*:;;;:*†*:;;;:*†*:;;;:**†</p>
            <p>キリ番踏んだら報告してね✨</p>
            <p class="blinking">あなたは<img src="img/c01.gif">人目のお姫様♡</p>
        </div>

        <form action="insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>
                        <select name="q1" id="pet-select">
                            <option value="">--質問を選んでﾈ☆--</option>
                            <option value="HN☆">HN☆</option>
                            <option value="ここだけの話">ここだけの話</option>
                            <option value="持ってる資格">持ってる資格</option>
                            <option value="似ている芸能人">似ている芸能人</option>
                            <option value="住んでるところ">住んでるところ</option>
                            <option value="絡むーﾁｮ">絡むーﾁｮ</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <td><input type="text" name="a1"></td>
                </tr>
                <tr>
                    <th>
                        <select name="q2" id="pet-select">
                        <option value="">--質問を選んでﾈ☆--</option>
                            <option value="HN☆">HN☆</option>
                            <option value="ここだけの話">ここだけの話</option>
                            <option value="持ってる資格">持ってる資格</option>
                            <option value="似ている芸能人">似ている芸能人</option>
                            <option value="住んでるところ">住んでるところ</option>
                            <option value="絡むーﾁｮ">絡むーﾁｮ</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <td><input type="text" name="a2"></td>
                </tr>
                <tr>
                    <th>
                        <select name="q3" id="pet-select">
                        <option value="">--質問を選んでﾈ☆--</option>
                            <option value="HN☆">HN☆</option>
                            <option value="ここだけの話">ここだけの話</option>
                            <option value="持ってる資格">持ってる資格</option>
                            <option value="似ている芸能人">似ている芸能人</option>
                            <option value="住んでるところ">住んでるところ</option>
                            <option value="絡むーﾁｮ">絡むーﾁｮ</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <td><input type="text" name="a3"></td>
                </tr>
            </table>
            <input type="submit" value="アップロード" class="submit btn">

        </form>

        <!-- <table>
                <tr>
                    <th>落書きしてく？</th>
                </tr>
            <tr>
                <td>
                    <div class="input_area">
                        <div class="brash input_item">
                            <div class="brash_menu">
                                <span>ペンの色</span>
                                <input type="color" id="brash_color">
                                <p id="inputColorResult"></p>
                            </div>
                            <div class="brash_menu">
                                <span>太さ</span>
                                <input type="range" id="brash_width" name="brash_width" min="3" max="150">
                                <p id="inputWidthResult"></p>
                            </div>
                        </div>
                        <div class="upload input_item">
                            <form action="test.html" method="post" enctype="multipart/form-data">
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
        </table> -->
    </div>
    <footer> SINCE 2024.03.23~</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="./js/main.js">
    </script>
</body>

</html>