<?php
require '../../config/database.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch the product details
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();

    if (!$product) {
        die("Product not found.");
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $quantity = $_POST['quantity'];
        $movement_type = $_POST['movement_type'];

        // Adjust stock (increase or decrease)
        if ($movement_type == 'add') {
            $new_stock = $product['stock'] + $quantity;
        } else {
            $new_stock = $product['stock'] - $quantity;
        }

        // Update product stock
        $stmt = $pdo->prepare("UPDATE products SET stock = ? WHERE id = ?");
        $stmt->execute([$new_stock, $product_id]);

        // Log stock movement
        $stmt = $pdo->prepare("INSERT INTO stock_movements (product_id, quantity, movement_type) VALUES (?, ?, ?)");
        $stmt->execute([$product_id, $quantity, $movement_type]);

        header("Location: index.php");
        exit;
    }
} else {
    die("No product ID specified.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>កែប្រែស្តុក</title>
    <link rel="stylesheet" href="adjust.css" >
</head>
<body>
    <h1>កែប្រែស្តុកនៃ <?= $product['name'] ?></h1>
    <style>
        h1{
            text-align: center;
            background: linear-gradient(green,yellow);
            padding: 20px;
            color: rgb(3, 0, 47);
            margin: 0;
        }
    </style>
    <a href="index.php" style="margin-left: 100px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
        </svg>
        ត្រលប់ក្រោយ
    </a>
    <form method="POST">
        <label>ចំនួន:</label>
        <input type="number" name="quantity" required>
        <br>
        <label>ប្រភេទផ្លាស់ប្តូរ:</label>
        <select name="movement_type" required>
            <option value="add">បន្ថែម</option>
            <option value="remove">បន្ថយ</option>
        </select>
        <br>
        <button type="submit">កែប្រែស្តុក</button>
    </form>
</body>
</html>
