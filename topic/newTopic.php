<?php
include ("../db.php");

$topicName = $_POST['topicName'];
//$_SESSIONからuser名取得
$createUser = 'testUser';

try {
    //PDOインスタンス生成
    $pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD,
    array(PDO::ATTR_PERSISTENT => true
    ));
    //DBへの接続を維持、再利用
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM topics WHERE topic_name = :topicName limit 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':topicName',$topicName);
    $stmt->execute();
    $result = $stmt->fetch();

    ////文字数チェック
    //if (mb_strlen($topicName, 'UTF-8')>32) {
    //    //文字数エラー
    //    $err_msg = '32文字以内で入力してください';
    //    return false;
    //}

    //空文字でないか
    if ($topicName == "") {
        //空文字エラー
        $err_msg = 'トピック名を入力してください';
        echo $err_msg;
        return false;
    }

    if ($result > 0) {
        $err_msg = "既に登録済のトピック名です";
        echo $err_msg;
    } else {
        $sql ="INSERT INTO topics (topic_name, createUser) VALUES (:topicName, :createUser)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':topicName',$topicName);
        $stmt->bindParam(':createUser',$createUser);
        $stmt->execute();
        
        //チェックOKなら登録、画面表示（モーダル閉じるボタン）
        echo 'トピックを作成しました';
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<br>
<button>戻る</button>