<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: VariableScope.php -->

<head>
    <meta charset="utf-8" />
    <title>Variable scope</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Variable Scope</h2>
    <?php
        $globalVar = "global Variable";

        function scopeExample()
        {
            $localVar = "local Variable";
            print "<p>This is a $localVar</p>";
        }

        //To use Global Vars, use the keyword: global
        function globalExample()
        {
            global $globalVar;
            echo "This is a $globalVar";
        }

        scopeExample();
        print "<p>This is a $globalVar</p>";
        globalExample();
    ?>
</body>

</html>