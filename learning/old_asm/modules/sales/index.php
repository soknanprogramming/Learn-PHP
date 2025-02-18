<?php 
require '../../config/database.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];

    // Record the sale
    $stmt = $pdo->prepare("INSERT INTO sales (product_id, quantity, total_price) VALUES (?, ?, ?)");
    $stmt->execute([$product_id, $quantity, $total_price]);

    // Update the stock
    $stmt = $pdo->prepare("UPDATE products SET stock = stock - ? WHERE id = ?");
    $stmt->execute([$quantity, $product_id]);

    header("Location: index.php");
    exit;
}
?>
<title>ការលក់</title>
<link rel="stylesheet" type="text/css" href="index.css" />

<h1>ការលក់</h1>
<a href="../../index.php" class="button-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
    </svg>
    ត្រលប់ក្រោយ
</a>

<form method="POST">
    <label>Product:</label>
    <select name="product_id" required>
        <?php foreach ($products as $product): ?>
        <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label>ចំនួន:</label>
    <input type="number" name="quantity" required>
    <br>
    <label>តម្លៃសរុប:</label>
    <input type="number" step="0.01" name="total_price" required>
    <br>
    <button type="submit">កត់ត្រាការលក់</button>
</form>

<h2>ប្រវត្តិការលក់</h2>
<table>
    <thead>
        <tr>
            <th>ឈ្មោះផលិតផល</th>
            <th>ចំនួន</th>
            <th>តម្លៃសរុប</th>
            <th>ពេលលក់</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stmt = $pdo->query("SELECT sales.*, products.name AS product_name FROM sales JOIN products ON sales.product_id = products.id");
        $sales = $stmt->fetchAll();
        foreach ($sales as $sale): ?>
        <tr>
            <td><?= $sale['product_name'] ?></td>
            <td><?= $sale['quantity'] ?></td>
            <td><?= $sale['total_price'] ?></td>
            <td><?= $sale['created_at'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
