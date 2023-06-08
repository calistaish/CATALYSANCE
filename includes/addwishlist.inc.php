<?php
session_start();
$userid = $_SESSION['id'];
$id = $_GET['id'];

require_once 'conn.inc.php';
require_once 'functions.inc.php';

if (checkWishlistifset($conn, $userid) == false) {
    createWishlist($conn, $userid);
    $wishlistexist = checkWishlistifset($conn, $userid);
    $wishlistID =  $wishlistexist['id'];
}
    $wishlistexist = checkWishlistifset($conn, $userid);
    $wishlistID =  $wishlistexist['id'];

    addWishlistItem($conn, $wishlistID, $id);
    header("location: ../productdeets.php?id=" . $id . "");

