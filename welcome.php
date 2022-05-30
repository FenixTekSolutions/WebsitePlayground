<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <?php include "headcomp.php" ?>
    </head>
    
    <body onload="SelectMode()">
        <?php include "header.php"?>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Welcome!</h1>
        <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
        </p>
        <?php include "footer.php"?>
    </body>
</html>