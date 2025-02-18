<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
        }

        /* Container for sidebar and product */
        .container {
            display: flex;
            align-items: flex-start; /* Aligns sidebar and product from the top */
            margin: 20px;
        }

        /* Sidebar styles */
        #sidebar {
            width: 250px; /* Set the width of the sidebar */
            background-color: #f0f0f0;
            padding: 15px;
            margin-right: 20px; /* Adds space between the sidebar and product */
        }

        /* Product section styles */
        #product {
            flex-grow: 1; /* Takes the remaining space on the right */
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 products per row */
            gap: 20px; /* space between products */
            margin: 20px;
        }

        .product {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .product img {
            max-width: 100%; /* Ensure image takes full width */
            height: auto;    /* Maintain image aspect ratio */
        }

        .product h2 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .product p {
            font-size: 1em;
            color: #333;
        }


    </style>
</head>
<body>
    <?php include "top_menu.php"; ?>
    
    <!-- Sidebar and product container -->
    <div class="container">
        <!-- Sidebar -->
        <div id="sidebar">
            <?php include "sidebar_for_home_page.php"; ?>
        </div>

        <!-- Product grid -->
        <div id="product">
            <div class="product-grid">
                <div class="product">
                    <h2> Intel Core i5</h2>
                    <p>$55.99</p>
                    <img src="cpu/i5.jpg">
                    
                </div>
                <div class="product">
                    <h2> Intel Core i7</h2>
                    <p>$77.00</p>
                    <img src="cpu/i7.webp">
                    
                </div>
                <div class="product">
                    <h2> Intel Core i9</h2>
                    <p>$99.00</p>
                    <img src="cpu/i9.jpg">
                    
                    
                </div>
                <div class="product">
                    <h2>AMD Ryzen 5</h2>
                    <p>$55.00</p>
                    <img src="cpu/r5.jpg">
                    
                    
                    
                </div>
                <div class="product">
                    <h2>AMD Ryzen 7</h2>
                    <p>$77.00</p>
                    <img src="cpu/r7.jpg">
                    
                    
                </div>
                <div class="product">
                    <h2>AMD Ryzen 9</h2>
                    <p>$99.00</p>
                    <img src="cpu/r9.avif">
                    
                    
                </div>
            </div>
        </div>
    </div>
</body>
<style>
        #home_li{
            background-color: blue;
        }
        #home_page_cpu {
            color: #f1f1f1;
            background-color: blue;
        }
    </style>
</html>
