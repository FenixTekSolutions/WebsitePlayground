<!DOCTYPE HTML>

<html>
    <head>
        <title>Home | FenixTek</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    </head>
    
    <body>
        <header>
            <h1>We'll be in touch!</h1>
            <h2 align="center">Thanks for your message. Please allow some time for a reply, and someone will get back to you ASAP!<br></h2>
            <nav id="navMain"><a class="navLink" href="index.php">HOME</a> | <a class="navLink" href="about.php">ABOUT</a> | <a class="navLink" href="cv.php">CV</a> | <a class="navLink" href="code.php">CODE SAMPLES</a> | <a class="navLink" href="contact.php">CONTACT</a></nav>
        </header>

        <?php
            if($_POST['message'])
            {
                //mail("morelethalshadow12@gmail.com", "Test!", $_POST['message']."/nFrom:".$_POST['email']);
                echo "<p>Your message has been sent!</p>";
            }
            else
            {
                echo "<p>Oops! Something, somewhere, went wrong. Please try again.</p>";
            }
        ?>
    </body>
</html>