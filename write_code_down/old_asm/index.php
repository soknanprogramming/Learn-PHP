<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <title>គ្រប់គ្រងស្តុក</title>
    </head>
    <body>
        <?php
        session_start();

        // Check if user is logged in by checking for 'username' session
        if (!isset($_SESSION['username'])) {
            // Redirect to login page if no session is found
            header("Location: login.php");
            exit;  // Always use exit after header redirection
        }
        ?>


        <h1 id="header-of-page">គ្រប់គ្រងស្តុក</h1>

        <div id="all-menu" class="container">
            <a href="modules/products/index.php">
                <div class="div-after" class="item">
                    <div class="div-second-after">
                        <img src="images/products.png" alt="Stock">
                        </br>
                        <p>ផលិតផល</p>
                    </div>
                </div>
            </a>
            <a href="modules/stock/index.php">
                
                <div class="div-after" class="item">
                    <div class="div-second-after">
                        <img src="images/warehouse_2795451.png" alt="Stock">
                        </br>
                        <p>ស្តុក</p>
                    </div>
                </div>
            </a>
            <a href="modules/sales/index.php">
                <div class="div-after" class="item">
                    <div class="div-second-after">
                        <img src="images/bag_6775557.png" alt="Stock">
                        </br>
                        <p>លក់</p>
                    </div>
                </div>
            </a>
            <a href="logout.php">
                <div class="div-after" class="item">
                    <div class="div-second-after">
                        <img src="images/exit_3094700.png" alt="Stock">
                        </br>
                        <p>ចាកចេញ</p>
                    </div>
                </div>
            </a>   
        </div>

    </body>
</html>