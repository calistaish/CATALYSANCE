<?php
session_start();
$userid = $_SESSION['id'];
$id = $_GET['id'];
$quantity = 1;
$design = $_GET['pid'];

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
    removewishlistitem($conn, $id);
    header("location: ../productdeets.php?id=" . $id . "");

