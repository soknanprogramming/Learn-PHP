<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        Student Name:  
    <?php 
        echo $_GET["student_name"];
        $score_php = $_GET["score_php"];
        $score_cs = $_GET["score_cs"];
        $score_cpp = $_GET["score_cpp"];
        $score_network = $_GET["score_network"];
        $score_design = $_GET["score_design"];
        $score_total = $score_php + $score_cs + $score_cpp + $score_network + $score_design;
        $score_average = $score_total / 5;

        function getGrade($average){
            if($average >= 0 && $average < 50)
                return "F";
            else if($average >= 50 && $average < 65)
                return "D";
            else if($average >= 65 && $average < 75)
                return "C";
            else if($average >= 75 && $average < 85)
                return "B";
            else if($average >= 85 && $average <= 100)
                return "A";
            else{
                return "Invalid Score";
            }
        }

        $grade = getGrade($score_average);

        echo "<br>Total Score: ". $score_total;
        echo "<br>Average: ". $score_average;
        echo "<br>Grade: ". $grade;

    ?>
</body>
</html>