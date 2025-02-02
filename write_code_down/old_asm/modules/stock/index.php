<?php
require '../../config/database.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>
<title>ស្តុក</title>
<link rel="stylesheet" href="index.css">

<h1 class="title">ស្តុក</h1>
<br>
<a href="../../index.php" class="exit-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
    </svg>
    ចាកចេញ
</a>
<br>
<table class="product-table">
    <thead>
        <tr>
            <th>ឈ្មោះផលិតផល</th>
            <th>ស្តុក</th>
            <th>សកម្មភាព</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['stock'] ?></td>
            <td>
                <a href="adjust.php?id=<?= $product['id'] ?>" class="adjust-link">កែប្រែស្តុក</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
