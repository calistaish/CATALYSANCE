<?php
session_start();

if(isset($_POST['Submit'])){
    $email = $_SESSION['email']; 
    $password = $_POST['password'];
    $username = $_POST['username'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    if($password != 1 && $username != 1){
        session_start();
        session_unset();
        session_destroy();
        header("location: ../userlogin.php");
        exit();
    }
    $_SESSION['chngepassword'] = $password;
    $_SESSION['chngeusername'] = $username;
    header("location: ../forgotpassword4.php");
    exit();
}
if(isset($_POST['Cancel'])){
    session_start();
    session_unset();
    session_destroy();
    header("location: ../userlogin.php");
    exit();
}
else {
    header("location: ../forgotpassword3.php");
}