<?php

function QueryProductList($start_from, $results_per_page){
    $sql = "SELECT * FROM products ORDER BY ID ASC LIMIT ?, ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $start_from, $results_per_page);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    return $resultData;
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}