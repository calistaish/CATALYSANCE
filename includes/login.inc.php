<?php

if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    loginUser($conn, $username, $password);
}
else {
    header("location: ../userlogin.php");
    exit();
}