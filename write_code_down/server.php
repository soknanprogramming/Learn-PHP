<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Info</title>
    <script>
        function filterKeys() {
            let input = document.getElementById("search").value.toLowerCase();
            let rows = document.querySelectorAll(".server-row");

            rows.forEach(row => {
                let keyName = row.getAttribute("data-key").toLowerCase();
                row.style.display = keyName.includes(input) ? "" : "none";
            });
        }
    </script>
</head>
<body>

    <input type="text" id="search" onkeyup="filterKeys()" placeholder="Search key name...">
    <br><br>

    <?php
        $x = 1;
        echo "<table border='1'>";
        echo "<tr><th>#</th><th>Key</th><th>Value</th></tr>";
        foreach($_SERVER as $key => $value){
            echo "<tr class='server-row' data-key='{$key}'>";
            echo "<td>{$x}</td><td>{$key}</td><td>{$value}</td>";
            echo "</tr>";
            $x++;
        }
        echo "</table>";
    ?>

</body>
</html>
