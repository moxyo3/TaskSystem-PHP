<?php session_start();
if(isset($_SESSION["id"])){
   header("Location: http://localhost/main.php"); 
   exit;
}
?>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <!-- フォーム入力チェック -->
       <script src="./login.js"></script> 
    </head>
    <body>
        <div id="header">タスク管理システム</div>
            <div id="login_form">
            <form action="login.php" method="POST" id="login">
            <?php if(isset($_SESSION["message_error"])){echo $_SESSION["message_error"];} ?>
                <p>ログインID<input type="text" id="userName" form="login"></p>
                <p>パスワード<input type="password" id="pass" form="login"></p>
                <input type="submit" onClick="return check()" form="login" value="ログイン"></form>
            </div>
       <hr>
       <p>新規登録は<a href="logon.php">こちら</a> 
        <footer><small>©moxyo3.com</small></footer>
    </body>
</html>
