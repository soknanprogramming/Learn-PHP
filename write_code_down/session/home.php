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
    <h1>Welcome to Home Page</h1>
    <form action="home.php" method="post">
        <input type="submit" name="submit" value="Logout">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        session_destroy();
        header("Location: index.php");
    }
    if(empty($_SESSION["username"]) && empty($_SESSION["password"]))
    {
        header("Location: index.php");
    }
?>