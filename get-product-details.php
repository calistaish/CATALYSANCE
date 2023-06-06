<?php
    $id = $_GET['id'];

    require_once 'includes/conn.inc.php';

    $stmt = mysqli_prepare($conn, "SELECT * from products where id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        $productID = $row['id'];
        $productCategoryID = $row['category_id'];
        $productThemeID = $row['theme_id'];
        $productImageID = $row['image_id'];
        $productDetailsID = $row['details_id'];
        $productName = $row['name'];
        $productPrice = $row['price'];
        $productOriginalPrice = $row['original_price'];
        $productDescription = $row['description'];
        $productReviews = $row['reviews'];
        $productStars = $row['stars'];
    
        $product = array(
            'id' => $productID,
            'category_id' => $productCategoryID,
            'theme_id' => $productThemeID,
            'image_id' => $productImageID,
            'details_id' => $productDetailsID,
            'name' => $productName,
            'price' => $productPrice,
            'originalPrice' => $productOriginalPrice,
            'description' => $productDescription,
            'reviews' => $productReviews,
            'stars' => $productStars
        );
    
        $response = array(
            'success' => true,
            'product' => $product
        );
    } else {
        $response = array(
            'success' => false,
            'message' => 'Product not found'
        );
    }
    
    // Output the response as JSON
    echo json_encode($response);
?>