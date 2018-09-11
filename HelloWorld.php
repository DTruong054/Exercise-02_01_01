<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: HelloWorld.php -->

<head>
    <meta charset="utf-8" />
    <title>Hello World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    //Global Variables
        $worldVar = "world";
        $sunVar = "Sun";
        $moonVar = "Moon";
        $worldInfo = 92897000;
        $sunInfo = 72000000;
        $moonInfo = 3456;

        //Coding Experiment
        echo "<p>Hello $worldVar!<br>";
        echo "The $worldVar is $worldInfo miles from the $sunVar. <br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temp is aprox $sunInfo degrees F.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is $moonInfo miles in diameter </p>";

        //Test with {}'s
        echo "This is a {$moonVar}embedded in double quotes";
        //Undefined Error since $moonVarembedded is not a var, need to either space or add {}.
        echo "This is a $moonVarembedded in double quotes";
    ?>
</body>

</html>