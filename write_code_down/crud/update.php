<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="rud.php">Back to View</a>
    <h1>Update username : <?= $_GET['name']?></h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Username: </label><br>
        <input type="text" name="username" required><br><br>
        <label>Password: </label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Udate"><br>
    </form>
</body>
</html>
<?php 
include('db.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $oldUsername = $_GET['name'];

    $query = "UPDATE user_tbl SET user_name = '$newUsername', user_password = '$newPassword' WHERE user_name = '$oldUsername';";

    mysqli_query($conn, $query);
    header("Location: rud.php");
}
?>