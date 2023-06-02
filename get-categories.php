<?php
    $sql = "SELECT categories.id as id, categories.name as name, count(products.category_id) as count FROM categories join products on categories.id = products.category_id group by id";
    require_once 'includes/conn.inc.php';
        
    $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $categoryID = $row['id'];
                                $categoryName = $row['name'];
                                $productCount = $row['count'];
                                echo 
                                '<!-- single category -->
                                <div class="flex items-center">
                                    <input type="checkbox" id="category_'.$categoryID.'"
                                        class="categoryCheckbox text-primary focus:ring-0 rounded-sm cursor-pointer">
                                    <label for="category_'.$categoryID.'" class="text-gray-600 ml-3 cursor-pointer">'.$categoryName.'</label>
                                    <div class="ml-auto text-gray-600 text-sm">('.$productCount.')</div>
                                </div>
                                <!-- single category end -->';
                            }
                        ?>