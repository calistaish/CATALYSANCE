<?php
session_start();
$userid = $_SESSION['id'];
$id = $_GET['id'];
$product_id = $_GET['product_id'];
$design = 0;
$quantity = 1;

require_once 'conn.inc.php';
require_once 'functions.inc.php';

if (checkCartifset($conn, $userid) == false) {
    createCart($conn, $userid);
    $cartexist = checkCartifset($conn, $userid);
    $cartID =  $cartexist['cart_id'];
}
    $cartexist = checkCartifset($conn, $userid);
    $cartID =  $cartexist['cart_id'];

    addCartItem($conn, $cartID, $id, $quantity, $design);
    
    wremovewishlistitem($conn, $id, $product_id);
    header("location: ../productdeets.php?id=" . $id . "");

