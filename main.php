<?php
session_start();
//開発中オフ-セッション管理
//if(!isset($_SESSION["id"])){
//    header("Location: http://localhost/index.php");
//    exit;
//}
?>
<!-- DOCTYPE html -->
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src = "/controllers/topics.js"></script>
    </head>
    <body>
        <div id="header">タスク管理システム</div>

        <div class="contents">
            <!-- サイドメニュー（左） -->
            <div class ="left-side">
                <p>トピック一覧</p>
                <a class="js-topicmodal-open newTopicList" href="">トピック新規作成</a>
                <!-- topics.jsからDB取得したデータを一覧表示 -->
                <div>
                    <table>
                        <tbody class="topicList"></tbody>
                    </table>
                    </div>
            </div>

            <!-- main.jsで書き換えられるメインページ（右） -->
            <div class ="right-side">
                <p>トピックを選択してください</p>
            </div>
            
            <!-- トピック作成モーダル -->
            <div class="topicmodal js-topic-modal">
                <div class="topicmodal_bg js-modal-close"></div>
                <div class="topicmodal-form"><!-- modal inner -->
                    <p>トピック新規作成</p>
                    <input class="form-control" type="text" placeholder="トピック名">
                    <input type ="submit" value="トピック新規作成">
                </div><!-- modal inner -->
            </div>
        <hr>
        <div id="footer"><small>©moxyo3.com</small></div>
    </body>
</html>
