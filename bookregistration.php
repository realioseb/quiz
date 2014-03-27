<?php

if (!empty($_POST['book_name']) && !empty($_POST['book_author'])) {
    $data = array(
        'book' => array(
            'name' => $_POST['book_name'],
            'author' => $_POST['book_author']
        )
    );
    
    header('Content-type: application/json', true, 201);
    
    print json_encode($data);
    
} else {
    $data = array(
        'error' => array(
            'message' => "Book Was Not Registered"
        )
    );
    
    header('Content-type: application/json', true, 400);
    
    print json_encode($data);
}