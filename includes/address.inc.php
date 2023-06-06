<?php


if(isset($_POST['billing'])){
    session_start();
    $userid = $_SESSION['id'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $address = $_POST['address'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    if (checkAddressifset($conn, $userid) !== false) {
        editAddress($conn, $country, $region, $city, $zipcode, $address, $userid);
    }
    else{
        addAddress($conn, $userid, $country, $region, $city, $zipcode, $address);
    }  
}
else {
    header("location: ../profile-info.php");
}