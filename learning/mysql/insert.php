<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../crud/rud.php">View</a>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h1>Create username</h1>
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submitBtn" value="Create user">
    </form>
</body>
</html>
<?php
    require("db.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query="INSERT INTO user_tbl(user_name, user_password)
        VALUE('$username', '$password');";
        try{
            mysqli_query($conn, $query);
            echo "You was to Create Username !";
        }
        catch(mysqli_sql_exception){
            echo "Something was wrong!";
        }
    }


    mysqli_close($conn);


?>