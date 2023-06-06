<?php
session_start();

if(isset($_POST['Submit'])){
    $email = $_SESSION['email']; 
    $answer = strtoupper($_POST['answer']);

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    SAAuthenticator($conn, $email, $answer);
}
if(isset($_POST['Cancel'])){
    session_start();
    session_unset();
    session_destroy();
    header("location: ../userlogin.php");
    exit();
}

else {
    header("location: ../forgotpassword2.php");
}