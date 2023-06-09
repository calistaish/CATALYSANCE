<?php
require_once 'plus.inc.php';
require_once 'minus.inc.php';

plus();
minus();

function getQuant(){
    $minusvalue = minus();
    $plusvalue = plus();
    $value = 1; 
    
    $quantity = $plusvalue + $value - $minusvalue;
    return $quantity;
}

getQuant();

header("location: ../productdeets.php");