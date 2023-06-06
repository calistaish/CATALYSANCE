<?php


if(isset($_POST['Submit'])){
    $email = $_POST['username'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    if (emailExists($conn, $email) == false) {
        header("location: ../forgotpassword.php?error=email_not_found");
    }
    emailCheck($conn, $email);
}
if(isset($_POST['Cancel'])){
    header("location: ../userlogin.php");
}
else {
    header("location: ../forgotpassword.php");
}