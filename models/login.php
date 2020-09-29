<?php
session_start();
require_once('./db.php');

$name = $_POST["userName"];
$pass = $_POST["pass"];

//入力チェック
if ($name === null || $pass === null) {
    $_SESSION["message_error"] = "入力エラー";
    header("Location: http://localhost/index.php");
} else {
    //ログインチェック
    global $pdo;

    $sql = "SELECT * FROM users WHERE user_name= ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC); 
    
    //指定したハッシュがDBのパスワードに一致しているかチェック
    //一致していたらセッション保存
    if (password_verify($pass, $result['user_pass'])){
        $_SESSION["id"] = $result['user_name']; 
        $_SESSION["pass"] = $result['user_pass'];
        $_SESSION["message_error"] = "";
        header("Location: http://localhost/main.php");
        exit;
    } else {
        $_SESSION["message_error"] = "IDまたはパスワードが違います。<br>";
        header("Location: http://localhost/index.php");
        exit;
    }
}
