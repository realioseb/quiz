var $bookForm = document.getElementById('book-form');

bookForm.onsubmit = function(e){
    e.preventDefault();
    
    var $name = this.book_name.value;
    var $author = this.book_author.value;
    var $method = this.method;
    var $url = this.action;
    
    var httpReq = window.XMLHttpRequest 
    ? new XMLHttpRequest() 
    : new ActiveXObject("Microsoft.XMLHTTP");
    
    httpReq.open($method, $url, false);
    
    httpReq.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );
};