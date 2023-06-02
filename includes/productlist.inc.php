<?php
require_once 'conn.inc.php';
require_once 'productsfunction.inc.php';

if (isset($_GET["page"])) {
    $page  = $_GET["page"]; } else { $page=1; 
};

$results_per_page = 6;
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM products p, images i where p.image_id = i.id ORDER BY ID ASC LIMIT $start_from, $results_per_page;";
$rs_result = mysqli_query($conn, $sql);

function displayProducts($rs_result){
    while($row = mysqli_fetch_assoc($rs_result)) {
    <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="<?php echo row["image"] ?>"  class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="productdeets.php"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="productdeets.php">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                <?php echo $row["name"]; ?>
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">₱ echo <?php $row["price"]; ?></p>
                            <p class="text-sm text-gray-400 font-roboto line-through">₱ <?php echo $row["original_price"]; ?></p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(<?php echo $row["reviews"]; ?>)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
            </div>
            <!-- product wrapper end -->
            
    }
}

