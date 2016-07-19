<?php


$posts = $db->prepare("
        SELECT *
        FROM posts
    ");
    
    $posts->execute();
    
    $posts = $posts->fetchAll(PDO::FETCH_ASSOC);