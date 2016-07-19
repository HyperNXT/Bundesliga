<?php

require '../app/start.php';

if (!empty($_POST)) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    
    $insertPost = $db->prepare("
        INSERT INTO posts (title, body, created)
        VALUE (:title, :body, NOW())
    ");
    
    $insertPost->execute([
        'title' => $title,
        'body'  => $body,
    ]);
    
    header('Location: ' . BASE_URL . '/admin/listPost.php');
    
}

require VIEW_ROOT . '/admin/addPost.php';