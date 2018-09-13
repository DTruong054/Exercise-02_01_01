<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: Functions.php -->

<head>
    <meta charset="utf-8" />
    <title>Functions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Passing Params</h2>
    <?php
    //Incremenet a number by value (Creates a copy of origen number)
        function incrementByValue($countByValue)
        {
            ++$countByValue;
            echo "<p>incrementByValue() value is $countByValue</p>";
        }

    //Incremenet by refernce value (Changes the number completely)
        function incremenetByRefernce(&$countByReference)
        {
            ++$countByReference;
            echo "<p>incremenetByRefernce() value is $countByReference</p>";
        }

        //Main program
        $count = 1;
        echo "<p>Main Program starting value is $count.</p>";
        incrementByValue($count);
        echo "<p>Main program after incrementByValue is $count.</p>";

        $count = 1;
        echo "<p>Main Program starting value is $count.</p>";
        incremenetByRefernce($count);
        echo "<p>Main program after incrementByReference is $count.</p>";
    ?>

    <h2>Default arguments</h2>
    <?php
        function paint($room = "office " , $color = "red")
        {
            return "<p>The color of the {$room} is {$color}</p>";
        }

        echo paint();
        echo paint("bedroom", "blue");
        echo paint(null, null);
        echo paint("bedroom");
    ?>
</body>

</html>