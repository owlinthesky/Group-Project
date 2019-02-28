<?php
session_start();

if (isset($_POST['check']))
{
require 'db.php';
$studid = mysqli_real_escape_string($conn, $_POST['studentid']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
    
$sqlPass = "select password, U_id from users where StudentID = '$studid'";
$PassRes = mysqli_query($conn, $sqlPass);
if ($PassRes->num_rows > 0)
{
    while ($row = $PassRes->fetch_assoc()) {
    //echo $row['password']; 
    //$hashedPass = password_hash($, PASSWORD_DEFAULT);
     if(password_verify($pass, $row['password'])) {
         echo "1";
     } else {
         echo "0";
     }
    }
} else {
    echo "0";
}
/*
$row = mysqli_fetch_array($result);


$count = $row['cntUser'];
 
if($count > 0)
    {
        $_SESSION['user'] = $studid;
        echo "1";
    }
    else
    {
        echo "y";
    }
    exit();
}
*/
}
?>