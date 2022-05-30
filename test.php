<!DOCTYPE HTML>

<html>
    <head>
        <title>TEST | FenixTek</title>
        <?php include "headcomp.php" ?>
    </head>
    
    <body onload="SelectMode()">
        <button id="darkmodebutton" onclick="ToggleDarkMode()">Toggle Dark Mode</button>
        <?php include ("header.php")?>

        <form action="validateuser.php" method="post">
            <fieldset>
            <label class="formlabel" for="fname">Forename</label>
            <input class="formelem" name="fname" type="text" required="true" placeholder="Forename"/><br>
            <label class="formlabel" for="sname">Surname</label>
            <input class="formelem" name="sname" type="text" required="true" placeholder="Surname"/><br>
            <label class="formlabel" for="Phone #">Phone #</label>
            <input class="formelem" name="Phone #" type="tel" required="false" placeholder="Phone"/><br>
            <label class="formlabel" for="email">Email</label>
            <input class="formelem" name="email" type="email" required="true" placeholder="Email"/><br>
            <label class="formlabel" for="DOB">Date Of Birth</label>
            <input class="formelem" name="" type="date" required="true" placeholder="DOB"/><br>
            <label class="formlabel" for="username">Username</label>
            <input class="formelem" name="username" type="text" required="true" placeholder="Username"/><br>
            <label class="formlabel" for="password">Password</label>
            <input class="formelem" name="password" type="password" required="true" placeholder="Password"/><br>
            <label class="formlabel" for="passwordconf">Confirm Password</label>
            <input class="formelem" name="passwordconf" type="password" required="true" placeholder="Confirm password"/><br>
            
            <input type="submit" oninvalid="InvalidCredentials"/>
            </fieldset>
        </form>
        <?php include "footer.php" ?>
    </body>
</html>