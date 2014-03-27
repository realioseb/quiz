<?php

if (isset($_POST['book_name']) && isset($_POST['book_author'])) {
    $data = array(
        'book' => array(
            'name' => $_POST['book_name'],
            'author' => $_POST['book_author']
        )
    );
    
    $parsedData = json_encode($data);
    
    $status = "HTTP/1.1 201 Created";
    
    $bookReg = array(
        'name' => $data['book']['name'],
        'author' => $data['book']['author']
    );
    
    $db = new PDO('mysql:host=localhost;dbname=quiz', 'root', '');
    
    $prep = $db->prepare('INSERT INTO book (name, author) VALUES (?, ?)');
    $prep->execute(array(
                $bookReg['name'],
                $bookReg['author']
            ));
} else {
    $data = array(
        'error' => array(
            'message' => "Book Was Not Registered"
        )
    );
    
    $parsedData = json_encode($data);
    
    $status = "HTTP/1.1 400 Bad Request";
}
    
header($status);
header("Content-type: application/json");

exit($parsedData);