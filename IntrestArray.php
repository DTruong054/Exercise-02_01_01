<!DOCTYPE html>
<html>
    <!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: IntrestArray.php -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Intrest Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Intrest Array</h2>
    <?php
    //Adds intrests days into an array
        $intrestRate1 = .0725;
        $intrestRate2 = .0750;
        $intrestRate3 = .0775;
        $intrestRate4 = .0800;
        $intrestRate5 = .0825;
        $intrestRate6 = .0850;
        $intrestRate7 = .0875;

        $ratesArray = array($intrestRate1, $intrestRate2, $intrestRate3, $intrestRate4, $intrestRate5, $intrestRate6, $intrestRate7);

        //Puts array in a list
        echo "<pre>";
        var_dump($ratesArray);
        echo "</pre>";
    ?>
</body>
</html>