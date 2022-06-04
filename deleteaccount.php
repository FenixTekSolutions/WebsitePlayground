<?php
    require_once "checklogin.php";
    require_once "config.php";

    $hPassword = $username = $email = $id = "";
    $passwordError = $usernameError = $emailError = "";
    $genError = "Something, somwhere, went terribly wrong... Please try again later.";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // Check username
        if($_SESSION["username"] != trim($_POST["dUsername"]))
        {
            $usernameError = "Incorrect Username.";
        }
        elseif(empty(trim($_POST["dUsername"])))
        {
            $usernameError = "Please enter your username.";
        }
        else
        {
            $sql = "SELECT id FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($link, $sql))
            {
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                $param_username = trim($_POST["dUsername"]);
                
                if(mysqli_stmt_executet($stmt))
                {
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows == 1)
                    {
                        $username = trim($_POST["dUsername"]);
                    }
                    else
                    {
                        $usernameError = "You don't appear to have an account... Contact us, and we'll look into it!";
                    }
                }
                else
                {
                    echo $genError;
                }
                
                mysqli_stmt_close($stmt);
            }
            
            // Check email
            if(empty(trim($_POST[dEmail])))
            {
                $emailError = "Please enter your email address.";
            }
            else
            {
                $sql = "SELECT email FROM users WHERE username = ?";

                if($stmt = mysqli_prepare($link, $sql))
                {
                    mysqli_bind_param($stmt, "s", $param_username);

                    $param_username = trim($_POST["username"]);
                    
                    if(mysqli_execute($stmt))
                    {
                        
                        mysqli_stmt_store_result($stmt);

                        if(mysqli_fetch_column($stmt)["email"] == trim($_POST["email"]))
                        {
                            $email = trim($_POST["email"]);
                            echo "email found.";
                        }
                        else 
                        {
                            $emailError = "Please enter the email associated with your account.";
                        }
                    }
                    else
                    {
                        echo $genError;
                    }
                }

                mysqli_close($stmt);
            }
        }
        // Validate password
        if(empty(trim($_POST["password"])))
        {
            $passwordError = "Please enter your password.";
        }
        else
        {
            
        }
        // Delete Account
    
    }





    //header("location: logout.php");
    //exit;
?>


<!DOCTYPE html>

<html> 
    <head>
        <meta charset="UTF-8">
        <title>Delete Account</title>
        <?php include "headcomp.php" ?>        
    </head>

    <body>
        <?php include "header.php" ?>
        <p>Please enter your details to confirm deletion. <u><b>ONCE DELETED, THE ACCOUNT IS PERMANENTLY LOST.</b></u> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Username</label><br>
                <input name="dUsername"><br>
                <label>Email</label><br>
                <input name="dEmail"><br>
                <label>Password</label><br>
                <input name="dPassword"><br>
                <input type="submit" value="Confirm">
                <input type="reset">
            </div>
        </form>
        <?php include "footer.php" ?>
    </body>

</html>

