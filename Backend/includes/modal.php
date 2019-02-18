<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require('db.php');
    $id = $_GET['id'];
    

    $member = $mysqli->query(SELECT * FROM 'posts' WHERE 'P_id'='$id')
    $mem = mysqli_fetch_assoc($members);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>
 
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="modal-body">
    <h2><?php echo $mem['P_Title'];?></h2>
    <p><?php echo $mem['P_description'];?></p>
</div>

</body>
</html>