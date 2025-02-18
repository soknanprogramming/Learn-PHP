<!DOCTYPE html> 
<html lang="en"> 
<head>
<title>List 100 to 001</title>
</head>
<body>
<?php
echo "<ul>";
for ($i = 100; $i >= 1; $i--) {
    echo "<li>List" . sprintf("%03d", $i) . "</li>";
}
echo "</ul>";
?>    
</body>
</html>
