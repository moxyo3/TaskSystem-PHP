<?php
require_once "./db.php";
//アカウント登録処理

$name= $_POST['userName'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
//入力チェック
if ($name === null || $pass === null) {
    $_SESSION["message_error"]  = "入力エラー";
    header("Location: logon.php");
    exit;
} elseif(!preg_match("/^[A-Za-z0-9]+$/", $name) {
    $_SESSION["message_error"] = "ユーザーIDは半角英数字のみです";
    header("Location: logon.php");
    exit;
} elseif(!preg_match("/^[A-Za-z0-9]+$/", $pass) {
    $_SESSION["message_error"] = "パスワードは半角英数字のみです";
    header("Location: logon.php");
    exit;
} else {
    global $pdo;
    
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $stmt = $pdo->prepare($sql);
    //print_r($pdo->errorInfo());
    $stmt->bindValue(1, $name);
    $stmt->execute();
    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    //すでに登録されているIDの場合
    if ($result['user_name'] === $name){
            $msg = "このIDは利用できません";
            $link = '<a href="logon.php">戻る</a>'; 
    } else {
        //アカウント登録処理
        $sql = "INSERT INTO users(user_name, user_pass, mentor_flag) VALUES(:name, :pass, 0)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':pass', $pass);
        $stmt->execute();

        $msg = '登録が完了しました';
        $link = '<a href= "index.php">ログインページ</a>';
    }
}
?>

<h2><?php echo $msg; ?></h2>
<?php echo $link; ?>
