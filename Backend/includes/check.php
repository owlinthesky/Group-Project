<?php
if (isset($_POST['check']))
{
require 'db.php';
$studid = mysqli_real_escape_string($mysqli, $_POST['studentid']);
$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
$sql = "select count(*) as cntUser from users where StudentID = '$studid' and password = '$pass'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($result);

$count = $row['cntUser'];
    
if($count > 0)
    {
        echo "1";
    }
    else
    {
        echo "y";
    }
    exit();
}
?>