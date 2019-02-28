<?php

require 'db.php';

if(isset($_GET['check'], $_GET['id'])) {
    $type = $_GET['check'];
    $id = (int)$_GET['id'];
    
    switch($type) {
        case 'post':
            $sql = "INSERT INTO post_likes (user, post) SELECT {$_SESSION['U_id']}, {$id} FROM posts WHERE EXISTS (SELECT P_id from posts where P_id = {$id}) AND NOT EXISTS (SELECT Like_id FROM post_likes WHERE  U_id = {$_SESSION['U_id']} AND P_id = {$id}) LIMIT 1";
            mysqli_query($conn, $sql);
            break;
    }
}