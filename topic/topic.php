<?php
//session_start();
//if(isset($_SESSION["id"])){
//   header("Location: http://localhost/main.php"); 
// //no_login_urlにとばす
//   exit;
//}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>トピック作成</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>トピック新規作成</h3>
    <div class="newTopic">
        <form action="newTopic.php" method="POST">
            <div class="topic_name">
                <input type="text" name="topicName" placeholder="32文字以内で入力してください" size=32>
                <button type="submit" name="newTopic">トピック作成</button>
            </div>
        </form>
    </div>

</body>
</html>