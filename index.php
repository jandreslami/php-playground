<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $myName = "Juan";
    $myAge = 28;
    $undefinedVariable;

    echo ("hello world my name is $myName <br>");
    echo ("my age is $myAge");
    echo ("this is an undefined variable: $undefinedVariable");

    $myName = "Juan Ignacio";
    
    echo("now my name is $myName");
    ?>
</body>
</html>