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
            <input name="fname" type="text" required="true" placeholder="Forename"/><br>
            <input name="sname" type="text" required="true" placeholder="Surname"/><br>
            <input name="Phone #" type="tel" required="false" placeholder="Phone"/><br>
            <input name="email" type="email" required="true" placeholder="Email"/><br>
            <input name="" type="date" required="true" placeholder="DOB"/><br>
            <input name="username" type="text" required="true" placeholder="Username"/><br>
            <input name="password" type="password" required="true" placeholder="Password"/><br>
            <input type="submit" oninvalid="InvalidCredentials"/>
        </form>

        <?php include "footer.php" ?>
    </body>
</html>