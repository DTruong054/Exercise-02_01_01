<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: AssignmentOperators.php -->

<head>
    <meta charset="utf-8" />
    <title>Hello World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    echo "<h1>Assignment Operator</h1>";
    $number = 100;
    $number += 50;
    echo '$number: ', $number;
    
    echo "<h1>Conditional Operator</h1>";
    $value1 = "First text string";
    $value2 = "Second text string";
    $returnValue = ($value1 == $value2) ? "true" : "false";
    echo '$returnValue is: ', $returnValue;
    ?>
</body>

</html>