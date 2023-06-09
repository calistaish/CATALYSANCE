<?php 
    
if(isset($_POST['submit'])){
    session_start();
    $userid = $_SESSION['id'];
    $total = $_POST['total'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cname = $_POST['cname'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $mop = $_POST['MOP'];
    

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    carttorders($conn, $userid);
    addCheckout($conn, $fname, $lname, $cname, $country, $address, $city, $zipcode, $phone, $email, $mop, $userid);
}
else {
    header("location: ../checkout.php");
}