<!DOCTYPE HTML>

<html>
    <head>
        <title>Log In | FenixTek</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <?php include ("header.php")?>

        <form action="validateuser.php" method="post">
            <input name="username" type="text" required="true" placeholder="Username"/><br>
            <input name="password" type="password" required="true" placeholder="Password"/><br>
            <input type="submit" oninvalid="InvalidCredentials"/>
        </form>

        <?php include "footer.php" ?>
    </body>
</html>