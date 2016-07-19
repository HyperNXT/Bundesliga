<?php

require '../app/start.php';

$posts = $db->query("
    SELECT id, title
    FROM posts
    ORDER BY created DESC
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/listPost.php';