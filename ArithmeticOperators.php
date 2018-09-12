<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: ArithmeticOperators.php -->

<head>
    <meta charset="utf-8" />
    <title>Hello World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    echo "<h1>Arithmetic Operator</h1>";
    //Addition
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo "<h2>Addition</h2>";
    echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";

    //Subtraction
    $x = 10;
    $y = 7;
    $returnValue = $x - $y;
    echo "<h2>Subtraction</h2>";
    echo '<p>$returnValue after subtraction expression: ', $returnValue, "</p>";

    //Divide
    $x = 24;
    $y = 3;
    $returnValue = $x / $y;
    echo "<h2>Divide</h2>";
    echo '<p>$returnValue after divide expression: ', $returnValue, "</p>";

    //Modulus
    $x = 10;
    $y = 7;
    $returnValue = $x % $y;
    echo "<h2>Modulus</h2>";
    echo '<p>$returnValue after modulus expression: ', $returnValue, "</p>";

    //Unary
    echo "<h2>Unary increment: Prefix Notation</h2>";
    $studentId = 100;
    $curStudentId = ++$studentId;
    echo "<p>The first student ID is: " , $curStudentId , "</p> <br>";
    $curStudentId = ++$studentId;
    echo "<p>The second student ID is: " , $curStudentId , "</p> <br>";
    $curStudentId = ++$studentId;
    echo "<p>The third student ID is: " , $curStudentId , "</p> <br>";

    echo "<h2>Unary increment: Postfix Notation</h2>";
    $studentId = 100;
    $curStudentId = $studentId++;
    echo "<p>The first student ID is: " , $curStudentId , "</p> <br>";
    $curStudentId = $studentId++;
    echo "<p>The second student ID is: " , $curStudentId , "</p> <br>";
    $curStudentId = $studentId++;
    echo "<p>The third student ID is: " , $curStudentId , "</p> <br>";
    ?>
</body>

</html>