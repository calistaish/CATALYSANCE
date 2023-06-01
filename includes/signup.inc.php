<?php

if(isset($_POST['register'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $phone = $_POST['cont'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../registeracc.php?error=username_already_exists");
        exit();
    }
    
    createUser($conn, $fname, $lname, $email, $phone, $username, $password);
}
else {
    header("location: ../registeracc.php");
}