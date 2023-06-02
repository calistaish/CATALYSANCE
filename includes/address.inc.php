<?php


if(isset($_POST['billing'])){
    session_start();
    $userid = $_SESSION['id'];
    $addresstype = 1;
    $country = $_POST['country'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $address = $_POST['address'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    if (checkAddressifset($conn, $userid, $addresstype) !== false) {
        $addressid = $_SESSION['addressid'];
        editAddress($conn, $country, $region, $city, $zipcode, $address, $addressid);
    }
    else{
        addAddress($conn, $addresstype, $userid, $country, $region, $city, $zipcode, $address);
    }  
}
if(isset($_POST['shipping'])){
    session_start();
    $userid = $_SESSION['id'];
    $addresstype = 2;
    $country = $_POST['country'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $address = $_POST['address'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    if (checkAddressifset($conn, $userid, $addresstype) !== false) {
        $addressid = $_SESSION['addressid'];
        editAddress($conn, $country, $region, $city, $zipcode, $address, $addressid);
    }
    else{
        addAddress($conn, $addresstype, $userid, $country, $region, $city, $zipcode, $address);
    }  
}
else {
    header("location: ../profile-info.php");
}