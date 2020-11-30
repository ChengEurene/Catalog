<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Result</title>
</head>
<body>
    <h1>Searched Result</h1>
    <?php
    
    $isbn = $_POST['isbn'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    if(isset($isbn, $author, $title, $price)){
        $isbn = $_POST['isbn'];
        $author = $_POST['author'];
        $title = $_POST['title'];
        $price = $_POST['price'];
    }

    $hostname = 'localhost';
    $database = 'catalog';
    $username = 'cheng';
    $password = 'password';

    $conn = new mysqli($hostname, $username, $password, $database);
    if($conn->connect_error) die ('Fatal Error');

    $query = "INSERT INTO catalogs VALUES('$isbn','$author','$title','$price')";
    $result = $conn->query($query);

    echo '
    isbn: '.$isbn.'<br>
    author: '.$author.'<br>
    title: '.$title.'<br>
    price: '.$price.'<br>
    ';

    $conn->close();
    ?>
</body>
</html>