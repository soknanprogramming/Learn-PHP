<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Repeating table</title> 
    <style> 
        table, tr, td {  
            border: 1px solid black;  
            border-collapse: collapse;  
        }  
        table {  
            margin: 10px;  /* Add space between tables */ 
            display: inline-block; /* Align tables side by side */ 
        } 
        td { 
            padding: 5px; 
        } 
    </style> 
</head> 
<body> 
    <?php 
        echo "<table>"; 
        for($j = 1; $j <= 5; $j++){ 
            echo "<tr>";
            for ($i = 1; $i <= 5; $i++) 
                echo "<td>" . $i . "</td>";
            echo "</tr>";
            echo "<tr>";
            for ($i = 5; $i >= 1; $i--) 
                echo "<td>" . $i . "</td>"; 
            echo "</tr>";
            
        } 
        echo "</table>"; 
    ?> 
</body> 
</html>
