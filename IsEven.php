<!DOCTYPE html>
<html>
    <!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: IsEven.php -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Is even</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Is Even</h2>
    <?php
        $numberArray = array("43", "53", "58", "89", "79", "23", "27", "51", "20", "74");
        $value1 = $numberArray[0] % 2 == 0 ? "even" : "odd";
        $value2 = $numberArray[1] % 2 == 0 ? "even" : "odd";
        $value3 = $numberArray[2] % 2 == 0 ? "even" : "odd";
        $value4 = $numberArray[3] % 2 == 0 ? "even" : "odd";
        $value5 = $numberArray[4] % 2 == 0 ? "even" : "odd";
        $value6 = $numberArray[5] % 2 == 0 ? "even" : "odd";
        $value7 = $numberArray[6] % 2 == 0 ? "even" : "odd";
        $value8 = $numberArray[7] % 2 == 0 ? "even" : "odd";
        $value9 = $numberArray[8] % 2 == 0 ? "even" : "odd";
        $value10 = $numberArray[9] % 2 == 0 ? "even" : "odd";

        
        echo $numberArray[0], " is ", $value1, " number" ,"<br>";
        echo $numberArray[1], " is ", $value2, " number" ,"<br>";
        echo $numberArray[2], " is ", $value3, " number" ,"<br>";
        echo $numberArray[3], " is ", $value4, " number" ,"<br>";
        echo $numberArray[4], " is ", $value5, " number" ,"<br>";
        echo $numberArray[5], " is ", $value6, " number" ,"<br>";
        echo $numberArray[6], " is ", $value7, " number" ,"<br>";
        echo $numberArray[7], " is ", $value8, " number" ,"<br>";
        echo $numberArray[8], " is ", $value9, " number" ,"<br>";
        echo $numberArray[9], " is ", $value10, " number";
    ?>
</body>
</html>