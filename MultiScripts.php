<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: MultiScripts.php -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP enviorment Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>PHP Enviorment info</h1>
    <p>
        The PHP code was rendered with PHP version
        <?php
        #This is telling what version of PHP we are using
            echo phpversion();  
        ?>

    </p>
    <p>
        The PHP code was rendered with Zend Engine version
        <?php
        //Telling Zend Version
            echo zend_version();
        ?>
    </p>
    <p>
        PHP's default MIME type is 
        <?php
        //Telling the MIME type
            echo ini_get("default_mimetype");
        ?>
    </p>
    <p>
        The max allowed execution time of a PHP script is 
        <?php
        //Telling the max execution time
            echo ini_get("max_execution_time");
        ?>
    </p>
</body>

</html>