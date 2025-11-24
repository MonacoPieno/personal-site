<?php
require_once __DIR__ . '/../privates/_db.php';
require_once __DIR__ . '/../privates/_dal_post.php';
$rec = new Post($pdo);      

$action = $_POST['action'];

if($action == 'update'){
    $idp = $_POST['idp'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $rec->Update($title, $content, $idp);
}else if($action == 'create'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $rec->Create($title, $content);
}


$pdo = null;
header("Location: http://localhost/personal%20site/public/projects.php")
?>