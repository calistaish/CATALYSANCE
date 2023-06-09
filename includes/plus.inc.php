<?php 
$id = $_GET['id'];
function plus(){
    $condition = $_GET['cond'];
    $minusvalue = 0;
    if($condition == 1){
        $minusvalue = 1;
        
    }
    else {
        $minusvalue = 0;
    }
    return $minusvalue;
}

plus();

header("location: ../productdeets.php?id= ". $id . "");