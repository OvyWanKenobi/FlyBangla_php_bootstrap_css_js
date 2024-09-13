<?php

include '_dbconnect.php';
$insertsuccess = false;
$errmsg = 'noerror';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['p_name'];
    $email = $_POST['p_email'];
    $pass = $_POST['p_pass'];
    $conpass = $_POST['p_conpass'];
    $address = $_POST['p_address'];
    $phone = $_POST['p_phone'];
    $dob = $_POST['p_dob'];

    $userexist = false;
    $uexistsql = "SELECT * FROM `users` WHERE `u_email` ='$email'";
    $result = $conn->query($uexistsql);
    if ($result->num_rows > 0) {
        $userexist = true;
    }



    $lastuser = "SELECT * FROM `users` ORDER BY `u_id` DESC LIMIT 1";
    $result1 = $conn->query($lastuser);

    while ($row = $result1->fetch_assoc()) {

        $newuserid = $row['u_id'] + 1;
    }



    if (($pass == $conpass) && ($userexist == false)) {
        $passwordhash = password_hash($pass, PASSWORD_DEFAULT);
        $insertusersql = "INSERT INTO `users`(`u_id`,`u_name`,`u_email`,`u_propic`,`u_created`,`u_role`,`u_access`,`u_pass`) VALUES ('$newuserid','$name', '$email', 'default.png', current_timestamp(), 'passenger', 'yes', '$passwordhash');";
        $insertpassengersql = "INSERT INTO `passengers`(`p_name`,`p_email`,`p_propic`,`p_uid`,`p_phone`,`p_address`,`p_dob`,`p_created`) VALUES ('$name', '$email', 'default.png','$newuserid', '$phone', '$address', $dob, current_timestamp());";

        $insertuserresult = $conn->query($insertusersql);
        $insertpassengerresult = $conn->query($insertpassengersql);
        if ($insertuserresult && $insertpassengerresult) {
            $insertsuccess = true;
            header("location: ../view/public/index.php?signupsuccess=true");
        }
    } elseif ($userexist == true) {
        $errmsg = 'This Email is not available. Try another.';
        header("location:  ../view/public/index.php?signupsuccess=false&errmsg=$errmsg");
    } else {
        $errmsg = 'Passwords do not match';
        header("location: ../view/public/index.php?signupsuccess=false&errmsg=$errmsg");
    }
}
