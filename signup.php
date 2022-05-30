<!DOCTYPE HTML>

<html>
    <head>
        <title>Log In | FenixTek</title>
        <?php include "headcomp.php" ?>
    </head>
    
    <body onload="SelectMode()">
        <?php include ("header.php")?>

        <form action="validateuser.php" method="post">
            <input name="fname" type="text" required="true" placeholder="Forename"/><br>
            <input name="sname" type="text" required="true" placeholder="Surname"/><br>
            <input name="email" type="email" required="true" placeholder="Email"/><br>
            <input name="dob" type="date" required="true" placeholder="DOB"/><br>
            <input name="username" type="text" required="true" placeholder="Username"/><br>
            <input name="password" type="password" required="true" placeholder="Password"/><br>
            <input type="submit" oninvalid="InvalidCredentials"/>
        </form>

        <?php include "footer.php" ?>
    </body>
</html>