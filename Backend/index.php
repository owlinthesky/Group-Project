<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'includes/db.php';

$result = $mysqli->query("SELECT P_id, P_description, P_Title FROM posts");
?>
<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Chris Page">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Marble Management Systems</title>
</head>
    
    <?php
    require 'content/header.php';
    require 'content/login.php';
    require 'content/footer.php';
    ?>
</body>
</html> 