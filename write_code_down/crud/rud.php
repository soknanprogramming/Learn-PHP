<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../mysql/insert.php">Add new</a>
    <?php
        require('db.php');

        $query = "SELECT * FROM user_tbl ;";
        $result = mysqli_query($conn, $query);
        echo "<table>";
        echo "<tr><th>Name</th><th>Password</th><th>Update</th><th>Delete</th></tr>";
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['user_password'] . "</td>";
                echo '<td> <a href="update.php?name=' . $row['user_name'] . '">Update</a> </td>';
                echo '<td> <a href="delete.php?id=' . $row['user_id'] . '">Delete</a> </td>';
                echo "</tr>";
            }
        }
        echo "</table>";
    ?>
</body>
</html>
<style>
    table, tr, th, td{
        border: 2px solid black;
        border-collapse: collapse;
    }
    table{
        margin: auto;
        width: 90%;
    }
    th, td{
        padding: 10xp;
    }
</style>