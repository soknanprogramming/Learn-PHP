<?php
require '../../config/database.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ផលិតផល</title>
    <link rel="stylesheet" href="index.css" >
</head>
<body>
    <h1 id="header-of-page">ផលិតផល</h1>
    <div class="nav">
        <a href="add.php">បន្ថែមផលិតផល</a>
        <a href="../../index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
            </svg>
            ចាកចេញ
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>លេខសម្គាល់</th>
                <th>ឈ្មោះ</th>
                <th>ការពិពណ៌នា</th>
                <th>តម្លៃ</th>
                <th>ស្តុក</th>
                <th>សកម្មភាព</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['stock'] ?></td>
                <td class="actions">
                    <a href="edit.php?id=<?= $product['id'] ?>">កែប្រែ</a> |
                    <a href="delete.php?id=<?= $product['id'] ?>" style="color: red;">លុប</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>