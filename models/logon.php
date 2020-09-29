<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <!-- フォーム入力チェック -->
        <script type="text/javascript">
            function check(){
                if(logonForm.userName.value == "" || logonForm.pass.value == ""){
                    alert("ユーザーIDとパスワードを入力してください");
                    return false;   //送信ボタンの動作キャンセル
                } else if (!logonForm.userName.value.match(/^[A-Za-z0-9]+$/)){
                   alert("ユーザーIDは半角英数字で入力してください"); 
                   return false;
                } else if (!logonForm.pass.value.match(/^[A-Za-z0-9]+$/)){
                   alert("パスワードは半角英数字で入力してください"); 
                   return false;
                } else {
                    return true;
                }
            }
        </script>
    </head>
    <body>
        <div id="header">タスク管理システム</div>
        <div id="logon">
        <h2>アカウント新規登録</h2>
            <div id="logon">
            <form action="account.php" method="POST" name="logonForm">
            <?php if(isset($_SESSION["message_error"])) {echo $_SESSION["message_error"];} ?>
            <form action="account.php" method="POST" name="logonForm">
                <p>ユーザーID：<input type="text" name="userName"></p>
                <p>パスワード：<input type="password" name="pass"></p>
                <p>※ユーザーID、パスワードは半角英数字のみ</p>
                <input type="submit" onClick="return check()" name="login" value="アカウント登録"></form>
            </div>
       <hr>
       <p>ログインは<a href="index.php">こちら</a> 
        <footer><small>©moxyo3.com</small></footer>
    </body>
</html>
