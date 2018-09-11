<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: PHPCodeBlocks.php -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP code blocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <h3>This is HTML</h3>
    <?php
        //Testing differnce between echo and print
        echo "This text is displayed using standard PHP script delimeters. <br>";
        print "Second String";
        //HTML in PHP
        print ("<br>Third String");
        //Differnce between with () and without (). Also tested differnce between "," and "."
        echo "<h1>This is a " . " multiple argument string. </h1>";
        echo ("<h1>This is a " . " multiple argument string. </h1>");
        //Math option in PHP
        print ("<h2>This is some math " . (2 + 3) . "</h2>");
    ?>
    </p>

</body>

</html>