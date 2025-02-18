<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Login Form</h1>
        <label>Username: </label><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholderr="Password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
    }
    if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
        if($_SESSION["username"] == "admin" && $_SESSION["password"] = "1234"){
            header("Location: home.php");
        }
    }

    
?>