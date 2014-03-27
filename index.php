<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="book-form" method="post" action="bookregistration.php">
            <fieldset>
                <legend>Register Book</legend>
                <div>
                    <label>
                        Book name:
                        <input type="text" name="book_name">
                    </label>
                </div>
                <div>
                    <label>
                        Book author:
                        <input type="text" name="book_author">
                    </label>
                </div>
                <div>
                    <button type="submit" name="register">Register</button>
                </div>
            </fieldset>
        </form>
        <script src="js.js"></script>
    </body>
</html>
