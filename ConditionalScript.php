<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conditonal Script</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Conditonal Script</h2>
    <?php
        $intVariable = 175;
        $result = "";
        if ($intVariable > 100) {
            $result = 'intVariable is less than or equal to 100';
            
        } else {
            $result = 'intVariable is greater than 100';
        }

        echo '<h3>$result: ' . "$result</h3>";
    
    ?>
</body>
</html>