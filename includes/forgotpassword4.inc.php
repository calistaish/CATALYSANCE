<?php
session_start();

if(isset($_POST['Confirm'])){
    $email = $_SESSION['email']; 
    $password = $_POST['password'];
    $username = $_POST['username'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    if($_SESSION['chngepassword'] == 1 && $_SESSION['chngeusername'] == 1){
        changePasswordandUsername($conn, $password, $username, $email);
    }
    else if($_SESSION['chngepassword'] == 1){
        changePass($conn, $password, $email);
    }
    else if($_SESSION['chngeusername'] == 1){
        changeUsername($conn, $username, $email);
    }
}
if(isset($_POST['Cancel'])){
    session_start();
    session_unset();
    session_destroy();
    header("location: ../userlogin.php");
    exit();
}

else {
    header("location: ../forgotpassword4.php");
}