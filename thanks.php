<!DOCTYPE HTML>

<html>
    <head>
        <title>Home | FenixTek</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    
    <body>
        <?php include ("header.php")?>
        
        <?php
            if($_POST['message'])
            {
                //mail("morelethalshadow12@gmail.com", "Test!", $_POST['message']."/nFrom:".$_POST['email']);
                echo "<p>Your message has been sent!</p>";
            }
            else
            {
                echo "<p>Oops! Something, somewhere, went terribly wrong. Please try again.</p>";
            }
            ?>
        <?php include "footer.php" ?>
    </body>
</html>