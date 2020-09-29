<?php
require_once '/models/db.php';

if ([$_SERVER] === "GET") {
    getTopicList();
}

public function getTopicList(){
    global pdo;
    //DB接続
    $sql = "SELECT * FROM topics";
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-type:application/json')
    $json = json_encode($rows,JSON_UNESCAPED_UNICODE);
    if ($json === false){
        throw new Exception('json_encode Error');
    } else {
        echo $json;
    }
}
