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

<?php class Book{
    public $author;
    public $title;
    private $amountOfPages;

    public function __construct($author, $title, $amountOfPages){
        $this->author = $author;
        $this->title = $title;
        $this->setAmountOfPages($amountOfPages);
    }

    function setAmountOfPages($amountOfPages){
        //maybe some validation logic
        $this->amountOfPages = $amountOfPages;
    }

    function getAmountOfPages(){
        return $this->amountOfPages;
    }
}

$myBook = new Book("JK Rowling", "Harry Potter", 700);
echo ($myBook->author); //JK Rowling 
$myBook->setAmountOfPages(500);
echo ($myBook->getAmountOfPages());

?>

</body>
</html>