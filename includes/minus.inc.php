<?php
$id = $_GET['id'];
$condition = $_GET['cond'];
function minus($condition){

    $minusvalue = 0;
    if($condition == 1){
        $minusvalue = 1;
        
    }
    else {
        $minusvalue = 0;
    }
    return $minusvalue;
}

minus($condition);
