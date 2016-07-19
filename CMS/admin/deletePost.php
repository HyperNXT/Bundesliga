<?php

require '../app/start.php';

if (isset($_GET['id'])) {
    $deletePost = $db -> prepare("
        DELETE FROM posts
        WHERE id=:id
    ");
    
    $deletePost->execute(['id' => $_GET['id']]);   
}


header('Location: ' . BASE_URL . '/admin/listPost.php');