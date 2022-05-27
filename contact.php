<!DOCTYPE HTML>

<html>
    <head>
        <title>Home | FenixTek</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    </head>
    
    <body>
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