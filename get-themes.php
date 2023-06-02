<?php
    $sql = "SELECT themes.id as id, themes.name as name, count(products.theme_id) as count FROM themes join products on themes.id = products.theme_id group by id";
    require_once 'includes/conn.inc.php';
        
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $themeID = $row['id'];
        $themeName = $row['name'];
        $productCount = $row['count'];
        echo '<!-- single brand name -->
        <div class="flex items-center">
            <input type="checkbox" id="theme_'.$themeID.'" class="themeCheckbox text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="theme_'.$themeID.'" class="text-gray-600 ml-3 cursor-pointer">'.$themeName.'</label>
                <div class="ml-auto text-gray-600 text-sm">('.$productCount.')</div>
        </div>
        <!-- single brand name end -->';
    }
?>