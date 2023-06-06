var urlParams = new URLSearchParams(window.location.search);
var productId = urlParams.get('id');

$(document).ready(function() {
    $.ajax({
        url: '/demo/CATALYSANCE/get-product-details.php',
        type: 'GET',
        data: {id: productId},
        dataType: 'json', // Expecting JSON response
        success: function(response){
            if (response.success) {
                var product = response.product;
                updateProductView(product); // Call your updateProductView function with the retrieved product
            } else {
                console.log('Error: Unable to retrieve product details.');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
});

function updateProductView(product) {
    var productsHTML = '';
    var productHTML = '<div class="container pt-4 pb-6 grid lg:grid-cols-2 gap-6">';
    productHTML += '<div>';
    productHTML += '<div>';
    productHTML += '<img id="main-img" src="./img/bp13.png" class="w-full zoom">';
    productHTML += '</div>';
    productHTML += '<div class="grid grid-cols-5 gap-4 mt-4">';
    productHTML += '<div><img src="./img/bp13.png" class="single-img w-full cursor-pointer border border-primary"></div>';
    productHTML += '<div><img src="./img/bp11.png" class="single-img w-full cursor-pointer border"></div>';
    productHTML += '<div><img src="./img/bp12.png" class="single-img w-full cursor-pointer border"></div>';
    productHTML += '<div><img src="./img/bp11.png" class="single-img w-full cursor-pointer border"></div>';
    productHTML += '<div><img src="./img/bp14.png" class="single-img w-full cursor-pointer border"></div>';
    productHTML += '</div>';
    productHTML += '</div>';
    productHTML += '<div>';
    productHTML += '<h2 class="md:text-3xl text-2xl font-medium uppercase mb-2">' + product.name + '</h2>';
    productHTML += '<div class="flex items-center mb-4">';
    productHTML += '<div class="flex gap-1 text-sm text-yellow-400">';
    for (var i = 0; i < product.stars; i++) {
        productHTML += '<span><i class="fas fa-star"></i></span>';
    }
    productHTML += '</div>';
    productHTML += '<div class="text-xs text-gray-500 ml-3">' + product.reviews + ' Reviews</div>';
    productHTML += '</div>';
    productHTML += '<div class="space-y-2">';
    productHTML += '<p class="text-gray-800 font-semibold space-x-2"><span>Availability: </span><span class="text-green-600">In Stock</span></p>';
    productHTML += '<p class="space-x-2"><span class="text-gray-800 font-semibold">Theme: </span><span class="text-gray-600">' + product.theme + '</span></p>';
    productHTML += '<p class="space-x-2"><span class="text-gray-800 font-semibold">Category: </span><span class="text-gray-600">' + product.category + '</span></p>';
    productHTML += '<p class="space-x-2"><span class="text-gray-800 font-semibold">SKU: </span><span class="text-gray-600">' + product.sku + '</span></p>';
    productHTML += '</div>';
    productHTML += '<div class="mt-4 flex items-baseline gap-3"><span class="text-primary font-semibold text-xl">₱' + product.price + '</span></div>';
    productHTML += '<p class="mt-4 text-gray-600">' + product.description + '</p>';
    productHTML += '<div class="mt-4">';
    productHTML += '<h3 class="text-base1 text-gray-800 mb-1">Design</h3>';
    productHTML += '<div class="flex items-center gap-2">';
    var sizes = ['xs', 's', 'm', 'l', 'xl'];
    for (var i = 0; i < sizes.length; i++) {
        var size = sizes[i];
        productHTML += '<div class="size-selector">';
        productHTML += '<input type="radio" name="size" class="hidden" id="size-' + size + '"';
        productHTML += size === sizes[2] ? ' checked' : '';
        productHTML += '>';
        productHTML += '<label for="size-' + size + '"';
        productHTML += ' class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">';
        productHTML += size;
        productHTML += '</label>';
        productHTML += '</div>';
    }
    productHTML += '</div>';
    productHTML += '</div>';
    productHTML += '<div class="mt-4">';
    productHTML += '<h3 class="text-base1 text-gray-800 mb-1">Quantity</h3>';
    productHTML += '<div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">';
    productHTML += '<div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>';
    productHTML += '<input type="text" class="quantity-input border border-gray-300 text-gray-600 w-16 px-2 py-1">';
    productHTML += '<div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>';
    productHTML += '</div>';
    productHTML += '</div>';
    productHTML += '<div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">';
    productHTML += '<a href="#" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase hover:bg-transparent hover:text-primary transition text-sm flex items-center">';
    productHTML += '<span class="mr-2"><i class="fas fa-shopping-bag"></i></span> Add to cart';
    productHTML += '</a>';
    productHTML += '<a href="#" class="border border-gray-300 text-gray-600 px-8 py-2 font-medium rounded uppercase hover:bg-transparent hover:text-primary transition text-sm">';
    productHTML += '<span class="mr-2"><i class="far fa-heart"></i></span> Wishlist';
    productHTML += '</a>';
    productHTML += '</div>';
    productHTML += '<div class="flex space-x-3 mt-4">';
    productHTML += '<a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">';
    productHTML += '<i class="fab fa-facebook-f"></i>';
    productHTML += '</a>';
    productHTML += '<a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">';
    productHTML += '<i class="fab fa-twitter"></i>';
    productHTML += '</a>';
    productHTML += '<a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">';
    productHTML += '<i class="fab fa-instagram"></i>';
    productHTML += '</a>';
    productHTML += '</div>';
    productHTML += '</div>';
    productHTML += '</div>';

    productsHTML += productHTML;

    $('#productDetailsContainer').html(productsHTML);
}