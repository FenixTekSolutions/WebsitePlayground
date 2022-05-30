<!DOCTYPE HTML>

<html>
    <head>
        <title>Home | FenixTek</title>
        <?php include "headcomp.php" ?>
    </head>
    
    <body onload="SelectMode()">
        <?php include ("header.php")?>

        <form action="thanks.php" method="post">
            <input type="text" placeholder="Your name here..."><br>
            <input type="email" name="email" placeholder="Email Address"><br>
            <input type="textarea" name="message" placeholder="Your Message"></textarea><br>
            <input type="submit">
        </form>

        <?php include "footer.php" ?>
    </body>
</html>