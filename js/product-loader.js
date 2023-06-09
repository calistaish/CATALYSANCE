$(document).ready(function() {
    // Initial AJAX request to generate the categories
    $.ajax({
        url: '/demo/CATALYSANCE/get-categories.php',
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            console.log('successfully added category panel');
            $('#categoryContainer').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            xhr.error(error);
        }
    });

    $.ajax({
        url: '/demo/CATALYSANCE/get-themes.php',
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            console.log('Successfully added theme panel');
            $('#themeContainer').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });

    updateProductsPanel();

    // Listen for checkbox changes and trigger the AJAX request
    $(document).on('change', '.categoryCheckbox', function() {
        console.log("calling out category");
        updateProductsPanel();
    });

    $(document).on('change', '.themeCheckbox', function() {
        console.log("calling out theme");
        updateProductsPanel();
    });

    $('#minPriceRange, #maxPriceRange').blur(function() {
        console.log("Price range blurred");
        updateProductsPanel();
    });

    $('#sortCombobox').change(function() {
        console.log("Sorting");
        updateProductsPanel();
      });
      
});

function updateProductsPanel() {
    console.log('Updating products panel');
    var selectedCategories = [];
    var selectedThemes = [];

    var minPrice = parseFloat($('#minPriceRange').val());
    var maxPrice = parseFloat($('#maxPriceRange').val());
    var errorMessages = [];

    var selectedSort = $('#sortCombobox').val();

    console.log(minPrice + " and " + maxPrice);
    if (minPrice !== "" && !isNumeric(minPrice)) {
        errorMessages.push('Minimum price must be a number');
        $('#minPriceRange').addClass('error');
    } else {
        $('#minPriceRange').removeClass('error');
    }

    if (maxPrice !== "" && !isNumeric(maxPrice)) {
        errorMessages.push('Maximum price must be a number');
        $('#maxPriceRange').addClass('error');
    } else {
        $('#maxPriceRange').removeClass('error');
    }

    if (minPrice !== "" && maxPrice !== "" && parseFloat(minPrice) > parseFloat(maxPrice)) {
        errorMessages.push('Minimum price cannot be greater than maximum price');
        $('#minPriceRange, #maxPriceRange').addClass('error');
    } else {
        $('#minPriceRange, #maxPriceRange').removeClass('error');
    }   

    $('.categoryCheckbox:checked').each(function() {
        var categoryId = $(this).attr('id').replace('category_', '');
        selectedCategories.push(categoryId);
        console.log('Selected Category: ' + categoryId);
    });

    $('.themeCheckbox:checked').each(function() {
        var themeId = $(this).attr('id').replace('theme_', '');
        selectedThemes.push(themeId);
        console.log('Selected Theme: ' + themeId);
    });

    if (errorMessages.length > 0) {
        $('#errorMessages').html(errorMessages.join('<br>')).show();
    } else {
        $('#errorMessages').html('').hide();

        $.ajax({
            url: '/demo/CATALYSANCE/get-products.php',
            type: 'POST',
            data: { 
                categories: selectedCategories,
                themes: selectedThemes,
                minPrice: minPrice,
                maxPrice: maxPrice,
                sort: selectedSort
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.success) {
                    // Update the products container with the retrieved products
                    updateProducts(response.products);
                } else {
                    console.error('Error:', response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                console.log('Response:', xhr.responseText);
            }
        });
    }
}

function updateProducts(products) {
    
    // Update the products container with the new products
    var productsHTML = '';

    // Generate the HTML for each product based on the retrieved data
    for (var i = 0; i < products.length; i++) {
        var product = products[i];

        // Generate the HTML for each product
        var productHTML = '<div class="group rounded bg-white shadow overflow-hidden">';
        productHTML += '<div class="relative">';
        productHTML += '<img src="./img/bp12.png" class="w-full">';
        productHTML += '<div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">';
        productHTML += '<a href="productdeets.php?id=' + product.id + 'class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center"> <i class="fas fa-search"></i></a>';
        productHTML += '<a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center"> <i class="far fa-heart"></i></a>';
        productHTML += '</div></div>';
        productHTML += '<div class="pt-4 pb-3 px-4">';
        productHTML += '<a href="productdeets.php?id='+product.id+'"><h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">' + product.name + '</h4></a>';
        productHTML += '<div class="flex items-baseline mb-1 space-x-2">';
        productHTML += '<p class="text-xl text-primary font-roboto font-semibold">₱' + product.price + '</p>';
        productHTML += '<p class="text-sm text-gray-400 font-roboto line-through">₱' + product.price + '</p>';
        productHTML += '</div>';
        productHTML += '<div class="flex items-center">';
        productHTML += '<div class="flex gap-1 text-sm text-yellow-400">';
        for($i = 0; $i < product.stars; $i++){
            productHTML += '<span><i class="fas fa-star"></i></span>';
        }
        productHTML += '</div>';
        productHTML += '<div class="text-xs text-gray-500 ml-3">(' + product.reviews + ')</div>';
        productHTML += '</div></div>';
        productHTML += '<a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to Cart</a>';
        productHTML += '</div>';

        productsHTML += productHTML;
    }

    // Update the products container with the new HTML
    $('#productContainer').html(productsHTML);
}

function isNumeric(value) {
    return !isNaN(parseFloat(value)) && isFinite(value);
}