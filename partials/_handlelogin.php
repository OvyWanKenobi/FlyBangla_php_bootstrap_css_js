<?php

include '_dbconnect.php';

$errmsg = 'noerror';
$loginsuccess = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['u_email'];
    $pass = $_POST['u_pass'];


    $sql = "SELECT * FROM `users` WHERE `u_email` ='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            if (password_verify($pass, $row['u_pass'])) {
                $loginsuccess = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['loggedusermail'] = $email;
                $_SESSION['loggedusername'] = $row['u_name'];
                $_SESSION['loggeduser_id'] = $row['u_id'];
                header("location:../view/passenger/welcome.php?loginsuccess=true");
            } else {
                $errmsg = 'Invalid Credentials';
                header("location: ../view/public/index.php?loginsuccess=false&errmsg=$errmsg");
            }
        }
    } else {
        $errmsg = 'Invalid Credentials';
        header("location: ../view/public/index.php?loginsuccess=false&errmsg=$errmsg");
    }
}
