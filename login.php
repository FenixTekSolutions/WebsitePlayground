<?php
    session_start();

    // Check if logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"])
    {
        // Redirect to welcome page;
        header("location: welcome.php");
        exit;
    }

    // Include Config file to connect to db
    require_once "config.php";

    // Define & init vars
    $username = $password = "";
    $username_error = $password_error = "";

    // Collect submitted data and validate
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Ensure !empty and collect username
        if(empty(trim($_POST["username"])))
        {
            $username_error = "Please enter a valid username.";
        }
        else
        {
            $username = trim($_POST["username"]);
        }

        // Do the same for pwd
        if(empty(trim($_POST["password"])))
        {
            $password_error = "Please enter your password.";
        }
        else
        {
            $password = trim($_POST["password"]);
        }

        // Check against db
            // only run if no errors
        if(empty($username_error) && empty($password_error))
        {
            //Prep the select statement
            $sql = "SELECT id, username, password FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql))
            {
                // Bind params
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                //Set params
                $param_username = $username;

                // Attempt to run
                if(mysqli_stmt_execute($stmt))
                {
                    // Collect result
                    mysqli_stmt_store_result($stmt);

                    // Confirm username exists, validate password
                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        // Bind result vars
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

                        if(mysqli_stmt_fetch($stmt))
                        {
                            if(password_verify($password, $hashed_password))
                            {
                                session_start();

                                // Store sesh vars
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;

                                header("location: welcome.php");
                            }
                            else
                            {
                                $password_error = "Password or username is invalid.";
                            }
                        }
                    }
                    else
                    {
                        $password_error = "Password or username is invalid.";
                    }
                }
                else
                {
                    echo "Something, somewhere went terribly wrong. Please try again later.";
                }

                // Close the statement
                mysqli_stmt_close($stmt);
            }
        }

        mysqli_close("$link");
    }

?>


<!DOCTYPE HTML>

<html>
    <head>
        <title>Log In | FenixTek</title>
        <?php include "headcomp.php" ?>
    </head>
    
    <body onload="SelectMode()">
        <?php include ("header.php")?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Username</label><br>
            <input name="username" type="text" required="true" placeholder="Username" value="<?php echo $username; ?>"><br>
            <span><?php echo $username_error?></span>

            <label>Password</label><br>
            <input name="password" type="password" required="true" placeholder="Password"><br>
            <span><?php echo $password_error; ?></span>
            <input type="submit" value="Log in"/>
            <p>Not already signed up? <a href="signup.php">Sign Up</a>.</P>
        </form>

        <?php include "footer.php" ?>
    </body>
</html>