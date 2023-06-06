<?php
    $selectedCategories = !empty($_POST['categories']) ? $_POST['categories'] : [];
    $selectedThemes = !empty($_POST['themes']) ? $_POST['themes'] : [];
    $minPrice = !empty($_POST['minPrice']) ? $_POST['minPrice'] : null;
    $maxPrice = !empty($_POST['maxPrice']) ? $_POST['maxPrice'] : null;
    $sortOption = !empty($_POST['sort']) ? $_POST['sort'] : 'default';

    require_once 'includes/conn.inc.php';
    $products = [];
    if (empty($selectedCategories) && empty($selectedThemes) && is_null($minPrice) && is_null($maxPrice)) {
        $sql = "SELECT * FROM products";
        $stmt = mysqli_prepare($conn, $sql);
    } else {
        $sql = "SELECT * FROM products WHERE 1=1";
        $params = [];
        
        if (!empty($selectedCategories)) {
            $placeholdersCategories = implode(',', array_fill(0, count($selectedCategories), '?'));
            $sql .= " AND category_id IN ($placeholdersCategories)";
            $params = array_merge($params, $selectedCategories);
        }
        if (!empty($selectedThemes)) {
            $placeholdersThemes = implode(',', array_fill(0, count($selectedThemes), '?'));
            $sql .= " AND theme_id IN ($placeholdersThemes)";
            $params = array_merge($params, $selectedThemes);
        }
        if (!is_null($minPrice) && !is_null($maxPrice)) {
            $sql .= " AND original_price BETWEEN ? AND ?";
            $params[] = $minPrice;
            $params[] = $maxPrice;
        }
        switch ($sortOption) {
            case 'low':
                $sql .= " ORDER BY original_price ASC";
                break;
            case 'high':
                $sql .= " ORDER BY original_price DESC";
                break;
            case 'latest':
                $sql .= " ORDER BY id DESC";
                break;
            default:
            $sql .= " ORDER BY id ASC";
                break;
        }
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            if (!empty($params)) {
                $types = str_repeat("i", count($params));
                mysqli_stmt_bind_param($stmt, $types, ...$params);
            }
        } else {
            // Handle prepare statement error
            die("Prepare statement error: " . mysqli_error($conn));
        }
    }
    
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
        $productID = $row['id'];
        $productName = $row['name'];
        $productPrice = $row['price'];
        $productOriginalPrice = $row['original_price'];
        $productReviews = $row['reviews'];
        $productStars = $row['stars'];
                        $product = array(
                            'name' => $productName,
                            'price' => $productPrice,
                            'originalPrice' => $productOriginalPrice,
                            'reviews' => $productReviews,
                            'stars' => $productStars,
                            'id' => $productID
                        );
                
                        // Add the product to the products array
                        $products[] = $product;
                        
                    }
                    $response = array(
                        'success' => true,
                        'products' => $products
                    );
                
                    // Output the response as JSON
                    echo json_encode($response);
                ?>