<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
        <h1>How get work</h1>
        <label>First Name:</label><br>
        <input type="text" name="firstName" required><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="lastName" required><br><br>
        <label>Age:</label><br>
        <input type="number" name="age" required><br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>
    <?php
        if(($_SERVER['REQUEST_METHOD'] == "GET") && isset($_GET['submit'])){
                if(isset($_GET['firstName']) && isset($_GET['lastName'])&& isset($_GET['age'])){
                $firstName = $_GET['firstName']; 
                $lastName = $_GET['lastName'];
                $age = $_GET['age'];

                echo "Your name is {$firstName} {$lastName} <br>";
                echo "Your age is {$age} <br>";
            }
        }
    ?>
</body>
</html>
<style>
    input{
        margin-left:10px;
    }
</style>
<!-- Note: <a href="delete.php?id=<//?= $product['id'] ?>" style="color: red;">លុប</a>-->
<!-- http://localhost/understand_get_method/get_work_in_one_page.php?firstName=POCH&lastName=soknan&age=22&submit=Submit -->