<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: HelloWorld2.php -->

<head>
    <meta charset="utf-8" />
    <title>Hello World 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    //Global Variables
        $worldVar = "world";
        $sunVar = "Sun";
        $moonVar = "Moon";
        //Change Variables to constants
        define("WORLD_INFO", 92897000);
        define("SUN_INFO", 72000000);
        define("MOON_INFO", 3456);

        //Coding Experiment with const and number_format().
        echo "<p>Hello $worldVar!<br>";
        echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar. <br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temp is aprox ", number_format(SUN_INFO, 2), " degrees F.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is ",number_format(MOON_INFO, 0), " miles in diameter </p>";
    ?>
</body>

</html>