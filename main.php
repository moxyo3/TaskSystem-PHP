<? php
session_start();
if(!isset($_SESSION["id"])){
    header("Location: http://localhost/index.php");
    exit;
}
?>
<!-- DOCTYPE html -->
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="header">タスク管理システム</div>
        <div id="side"></div>
        <div id="main"></div>
        <footer><small>©moxyo3.com</small></footer>
    </body>
</html>
