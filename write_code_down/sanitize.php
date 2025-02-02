<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Age:</label><br>
        <input type="text" name="age"><br><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="submited">
    </form>
    <?php
        if(isset($_POST["submited"])){
            // if(!empty($_POST["username"])){
            //     $username = $_POST["username"];
            //     echo "Your name is {$username}";
            // }
            if(!empty($_POST["username"])){
                $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
                echo "Hello {$username} <br>";
            }
            if(!empty($_POST["age"])){
                $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
                echo "Your age is {$age} <br>";
            }
            if(!empty($_POST["email"])){
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                echo "Your email is {$email} <br>";
            }

        }
    ?>
</body>
</html>