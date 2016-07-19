<?php

require '../app/start.php';

if (!empty($_POST)) {
    $id    = $_POST['id'];
    $title = $_POST['title'];
    $body  = $_POST['body'];
    
    $updatePost = $db->prepare("
        UPDATE posts
        SET
            title = :title,
            body = :body,
            updated = NOW()
        WHERE id = :id
    ");
    
    $updatePost->execute([
        'id'    => $id,
        'title' => $title,
        'body'  => $body,
    ]);
    
    header('Location: ' . BASE_URL . '/admin/listPost.php');
}

if (!isset($_GET['id'])) {
    header('Location: ' . BASE_URL . '/admin/listPost.php');
    die();
}

$post = $db->prepare("
   SELECT id, title, body
   FROM posts 
   WHERE id = :id
");

$post->execute(['id' => $_GET['id']]);

$post = $post->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/editPost.php';