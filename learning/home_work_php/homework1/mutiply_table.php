<!DOCTYPE html> 
<html lang="en"> 
<head>
    <title>Mutiply Table</title> 
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
    </style> 
</head> 
<body> 
    <?php 
        for($j = 2; $j <= 10; $j++){ 
                echo "<table>"; 
            for ($i = 1; $i <= 10; $i++) 
            { 
                if($j == $i) 
                    echo "<tr style=\"background-color:red\">"; 
                else  
                    echo "<tr>";     
                     
                    echo "<td>" . $j . "</td>"; 
                    echo "<td>" . $i . "</td>"; 
                     
                        echo "<td>" . $j * $i . "</td>"; 
                     
                    echo "</tr>"; 
                 
            } 
            echo "</table>"; 
        } 
    ?> 
</body> 
</html>
