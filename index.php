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
        <script type="text/javascript">
            function check(){
                if(login.loginName.value == "" || login.pass.value == ""){
                    alert("IDとパスワードを入力してください");
                    return false;   //送信ボタンの動作キャンセル
                } else {
                    return true;
                }
            }
        </script>
    </head>
    <body>
        <div id="header">タスク管理システム</div>
            <div id="login_form">
            <form action="login.php" method="POST">
            <?php if(isset($_SESSION["message_error"])){echo $_SESSION["message_error"];} ?>
                <p>ログインID<input type="text" name="userName"></p>
                <p>パスワード<input type="password" name="pass"></p>
                <input type="submit" onClick="return check()" name="login" value="ログイン"></form>
            </div>
       <hr>
       <p>新規登録は<a href="logon.php">こちら</a> 
        <footer><small>©moxyo3.com</small></footer>
    </body>
</html>
