<?php


if(isset($_POST['edit'])){
    session_start();
    $id = $_SESSION['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['cont'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    editUser($conn, $fname, $lname, $email, $phone, $gender, $birthday, $id);
}
else {
    header("location: ../profile-info.php");
}