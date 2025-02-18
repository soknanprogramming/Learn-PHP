<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Age:</label><br>
        <input type="text" name="age"><br><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="submited">
    </form>
    <?php
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        if(empty($age)){
            echo "That number wasn't valid <br>";
        }
        else {
            echo "You are {$age} years old <br>";
        }

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "That email wasn't valid <br>";
        }
        else{
            echo "Your email is {$email} <br>";
        }
    ?>
</body>
</html>