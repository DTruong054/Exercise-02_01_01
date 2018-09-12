<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: Concerts.php -->

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Central Vally Civic Center</h1>
    <h2>Summer Concert Season</h2>
    <?php
        //Working with PHP arrays
        $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
        $concerts[] = "Bob Dylan";
        $concerts[] = "Ryan Cabrera";
        
        echo "<p>The following ", count($concerts), " concerts are scheduled:</p>";
        echo "<p> $concerts[0]<br>";
        echo "<p> $concerts[1]<br>";
        echo "<p> $concerts[2]<br>";
        echo "<p> $concerts[3]<br>";
        echo "<p> $concerts[4]<br>";
        echo "<p> $concerts[5]<br>";
        echo "<p> $concerts[6]</p>";


        //Types of Debugging tools
        echo "<pre>";
        print_r($concerts);
        echo "</pre>";

        echo "<pre>";
        var_dump($concerts);
        echo "</pre>";
    ?>
</body>

</html>