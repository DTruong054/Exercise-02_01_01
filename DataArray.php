<!DOCTYPE html>
<html>
    <!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DataArray.php -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Data Array</h2>
    <?php
        $days = array("Sunday", "Monday", "Tuseday", "Wednesday", "Thursday", "Friday", "Saturday");
        $days[] = "Dimanche";
        $days[] = "Lundi";;
        $days[] = "Mardi";
        $days[] = "Mercredi";
        $days[] = "Jeudi";
        $days[] = "Vendredi";
        $days[] = "Samedi";
        echo "The days of the week in English are: ", $days[0], ", " , $days[1], ", ", $days[2], ", ", $days[3], ", ", $days[5], ", ", $days[6], "<br>";
        echo "The days to the week in French are: ", $days[7], ", ", $days[8], ", ", $days[9], ", ", $days[10], ", ", $days[11], ", ", $days[12], ", ", $days[13], "<br>";

    ?>
</body>
</html>