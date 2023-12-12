<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- <script src='main.js'></script> -->
</head>

<body>
    <?php
    //let's test include keyword and namespaces
    use NamespaceTest\Book;
    include "index-4-header.php";
    require "index-3.php";

    $myObject = new stdClass();
    $myObject->property1 = "value";

    echo $myObject->property1; //expect "value"


    $myObject = new Book("José Saramago", "Ensayo sobre la ceguera", 400);
    echo $myObject->author; //expect José Saramago
    // due to namespaces, class Book is not defined here but could be used;

    include "index-4-footer.php";


    ?>
</body>

</html>