<?php
$id = $_GET['id'];
if(isset($_POST['save'])){
    session_start();

    $quantity = $_POST['quantity'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    
    editQuantity($conn, $quantity, $id);
}
else {
    header("location: ../cart.php");
}