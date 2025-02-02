<?php
require '../../config/database.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Delete the product
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$product_id]);

    header("Location: index.php");
    exit;
} else {
    die("No product ID specified.");
}
?>
