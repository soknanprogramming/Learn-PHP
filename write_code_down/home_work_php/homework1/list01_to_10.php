<!DOCTYPE html> 
<html lang="en"> 
<head>
    <title>List 01 to 10</title>
</head>
<body>
<?php
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li>List" . sprintf("%02d", $i) . "</li>";
}
echo "</ul>";
?>    
</body>
</html>
