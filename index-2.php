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
        echo $text = "this is a string";
        $integer =10;
        $float = 15.32;
        echo $integer+$float; //25.32
        $boolean = false;
        $nullVariable = null;

        echo ("<br> boolean is actually $boolean <br>");
        //echo strtoupper($text);
        //echo strlen($text);
        //echo $text[0]; //should be "t"
        echo str_replace(" is ", " is not ", $text);

        $array = array("test", 1, true);
        //echo $array;
        // echo $array[1];

        // function sum($a,$b){
        //     return $a+$b;
        // }

        // echo (sum (1,2));

        echo (5=="5");


    ?>
</body>
</html>