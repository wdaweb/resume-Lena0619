<?php
include_once "base.php";

if (empty($_SESSION['login'])) {
    echo "非法入侵";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery -->
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="plugin/js.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="plugin/back.css" />

     <title>Shiang's Website</title>
</head>

<body>
    <small style="color: red;">登入成功 !</small>

    <div class="container">
        <h2>後台管理</h2>
        <ul id="bacList">
            <li style="display:inline;margin-right:25px"><a href="?do=myinfo">個人基本資料管理</a></li>
            <li style="display:inline;margin-right:25px"><a href="?do=introductions">自傳區管理</a></li>
            <li style="display:inline;margin-right:25px"><a href="?do=experience">學經歷管理</a></li>
            <li style="display:inline;margin-right:25px"><a href="?do=picture">圖片管理</a></li>
            <li style="display:inline;margin-right:25px"><a href="?do=skills">技能區管理</a></li>
            <li style="display:inline;margin-right:25px"><a href="?do=profile">作品區管理</a></li>
            <li style="display:inline;margin-right:25px"><a href="?do=job">求職條件管理</a></li>
        </ul>

        <div id="bacMain">

            <?php

            $do = isset($_GET['do']) ? $_GET['do'] : 'introductions';
            $file = 'back/' . $do . ".php";

            if (file_exists($file)) {
                include $file;
            } else {
                include "back/introductions.php";
            }

            ?>

        </div>


        <!-- modal -->
        <div id="cover" style="display:none;">
            <div id="coverr">
                <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
                <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
            </div>


        </div>

    </div>




</body>

</html>