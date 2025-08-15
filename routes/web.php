<?php

use Illuminate\Support\Facades\Route;

// Sample product data (just for learning — normally this comes from a database)
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 100,
        "image" => "https://placehold.co/400x400?text=T-Shirt",
        "description" => "Comfortable cotton t-shirt for everyday wear."
    ],
    [
        "id" => 2,
        "name" => "Pants",
        "price" => 600,
        "image" => "https://placehold.co/400x400?text=Pants",
        "description" => "Stylish and durable pants for all occasions."
    ],
    [
        "id" => 3,
        "name" => "Backpack",
        "price" => 860,
        "image" => "https://placehold.co/400x400?text=Backpack",
        "description" => "Spacious backpack with multiple compartments."
    ],
    [
        "id" => 4,
        "name" => "Wrist Watch",
        "price" => 420,
        "image" => "https://placehold.co/400x400?text=Watch",
        "description" => "Elegant wrist watch with leather strap."
    ],
    [
        "id" => 5,
        "name" => "Running Shoes",
        "price" => 580,
        "image" => "https://placehold.co/400x400?text=Shoes",
        "description" => "Lightweight running shoes with great grip."
    ],
    [
        "id" => 6,
        "name" => "Headphones",
        "price" => 1500,
        "image" => "https://placehold.co/400x400?text=Headphones",
        "description" => "Wireless headphones with noise cancellation."
    ],
    [
        "id" => 7,
        "name" => "Sunglasses",
        "price" => 300,
        "image" => "https://placehold.co/400x400?text=Sunglasses",
        "description" => "UV-protected sunglasses with a stylish frame."
    ],
    [
        "id" => 8,
        "name" => "Laptop Bag",
        "price" => 950,
        "image" => "https://placehold.co/400x400?text=Laptop+Bag",
        "description" => "Waterproof laptop bag with padded compartments."
    ],
    [
        "id" => 9,
        "name" => "Hoodie",
        "price" => 750,
        "image" => "https://placehold.co/400x400?text=Hoodie",
        "description" => "Warm and cozy hoodie for chilly days."
    ],
    [
        "id" => 10,
        "name" => "Cap",
        "price" => 150,
        "image" => "https://placehold.co/400x400?text=Cap",
        "description" => "Adjustable cap with breathable fabric."
    ],
];

// Home Page
Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
});

// About Page
Route::get('/about', function () {
    return view('about.index', ['title' => 'About Us']);
});

// Products List Page
Route::get('/products', function () use ($products) {
    // Pagination setup
    $perPage = 9; // items per page
    $page = request()->get('page', 1); // current page
    $total = count($products);
    $offset = ($page - 1) * $perPage;
    $paginated = array_slice($products, $offset, $perPage);

    return view('products.index', [
        'products' => $paginated,
        'title' => 'Products',
        'total' => $total,
        'perPage' => $perPage,
        'currentPage' => $page
    ]);
});

// Product Details Page
Route::get('/products/{id}', function ($id) use ($products) {
    // Find the product by ID
    $product = collect($products)->firstWhere('id', $id);

    // If product not found, return a simple 404 view (or redirect)
    if (!$product) {
        abort(404, 'Product not found');
    }

    return view('products.product_details', [
        'product' => $product,
        'title' => $product['name']
    ]);
});
