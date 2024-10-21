<?php
session_start();

// For Output in TXT format
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture and sanitize POST data
    $productName = htmlspecialchars($_POST['product_name']);
    $quantity = intval($_POST['quantity']);
    $price = htmlspecialchars($_POST['price']);
    $productImage = htmlspecialchars($_POST['product_image']);

    // Initialize the cart session array if it's not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Append the product details to the session cart
    $_SESSION['cart'][] = [
        "pname" => $productName,
        "qty" => $quantity,
        "price" => $price,
        "productImage" => $productImage
    ];

    // Prepare order details for writing to the file
    $orderDetails = "Product Name: $productName, Quantity: $quantity, Price: $price, Product Image: $productImage\n";

    // Save the order details to 'orders.txt'
    file_put_contents('orders.txt', $orderDetails, FILE_APPEND | LOCK_EX);

    // Respond with success
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
