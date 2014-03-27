var $bookForm = document.getElementById('book-form');

var dataEncoding = function(object){
    var data = [];

    for (var i in object) {
        data.push(
            encodeURIComponent(i) 
            + "=" +
            encodeURIComponent(object[i])
            );
    }

    data = data.join("&");

    return data;
};

$bookForm.onsubmit = function(e){
    e.preventDefault();
    
    var $name = this.book_name.value;
    var $author = this.book_author.value;
    var $method = this.method;
    var $url = this.action;
    
    var $httpReq = window.XMLHttpRequest 
    ? new XMLHttpRequest() 
    : new ActiveXObject("Microsoft.XMLHTTP");
    
    $httpReq.open($method, $url, false);

    $httpReq.onreadystatechange = function() {
        if ($httpReq.readyState === 4 && $httpReq.status === 201) {
            response = JSON.parse($httpReq.responseText);

            alert("Book registered succesfully: author - " + response.book.author + ", Book Name - " + response.book.name);
        }

        if ($httpReq.readyState === 4 && $httpReq.status === 400) {
            response = JSON.parse($httpReq.responseText);

            alert(response.error.message);
        }
    };
    
    $httpReq.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );
    
    $httpReq.send(dataEncoding({book_name: $name, book_author: $author}));
};