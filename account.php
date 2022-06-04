<?php
    
    require_once "checklogin.php";

    // require_once "config.php";

    // Create vars
    $username = $email = "";
    

    // // Confirm user is logged in.
    // if($_SESSION["loggedin"])
    // {
    //     // Create a select statement.
    //         // SELECT id FROM users WHERE username = _SESSION["username"]
    //     // If only one result
    //         // $username = 
    // }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Your Account - FenixTek</title>
        <?php include "headcomp.php" ?>
    </head>

    <body onload="SelectMode()">
        <?php include "header.php"?>
        <h1>Your Account</h1>
        <div id="wrapper-account">
            <div class="section-account">
                <h3>Your Details</h3>
                <dl>
                    <dt>Username:</dt>
                    <dd><?php echo $_SESSION["username"];?></dd>
                    <dt>Email<dt>
                    <dd><?php echo $_SESSION["email"];?></dd>

                </dl>
            </div>
            <div class="section-account">
                <h3>Account Management</h3>
                <a href="changeusername.php">Change Username</a><br>
                <a href="changeemail.php">Change Email</a><br>
                <a href="changepassword.php">Change Password</a><br>
                <a href="deleteaccount.php">Delete Account </a>
            </div>
        </div>
        <?php include "footer.php"?>
    </body>

</html>