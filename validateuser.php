<?php

    

    if($_POST['username'] == 'a' && $_POST['password'] == 'b')
    {
        header("location: contact.php");
    }
    else
    {
        echo "<script type=\"text/javascript\">confirm(\"Incorrect Credentials. Please check and try again\")</script>";
        header("location: login.php");
        
    }
?>