<?php
    $id = $_GET['id'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    removewishlistitem($conn, $id);