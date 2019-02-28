<?php
if (isset($_POST['check']))
{
    require 'db.php';
    $studid = mysqli_real_escape_string($conn, $_POST['studentid']);
    $pass = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
    $first = mysqli_real_escape_string($conn, $_POST['firstname']);
    $last = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    
    $sql = "INSERT INTO users (U_email, U_fname, U_lname, U_course, StudentID, password) VALUES ('$email', '$first', '$last', '$course', '$studid', '$pass')";
    
    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($myqsli);
    }
    $conn->close();
}
?>