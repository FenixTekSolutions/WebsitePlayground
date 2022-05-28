<?php
    // include config.php
    require_once "config.php";

    // Initialise empty vars
    $username = $password = $confirmPassword = "";
    $usernameError = $passwordError = $confirmPasswordError = "";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // validate username
        if(empty(trim($_POST["username"])))
        {
            $usernameError = "Invalid Username.";
        }
        elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"])))
        {
            $usernameError = "Invalid Username. Username can only include letters, numbers, and underscores.";
        }
        else
        {
            // Make the select statement
            $sql = "SELECT id FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql))
            {
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set Params
                $param_username = trim($_POST["username"]); 
                
                //Attempt to execute the statement
                if(mysqli_stmt_execute($stmt))
                {
                    // Store the result
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        $usernameError = "Username already exists.";
                    }
                    else
                    {
                        $username = trim($_POST["username"]);
                    }
                }
                else
                {
                    echo "Something, somwhere, went terribly wrong... Please try again later.";
                }

                // close the statement
                mysqli_stmt_close($stmt);
            }

        }

        // Validate password
        if(empty(trim($_POST["password"])))
        {
            $passwordError = "Please enter a password";
        }
        elseif(strlen(trim($_POST["password"])) < 8)
        {
            $passwordError = "Password must contain at least 8 characters.";
        }
        else
        {
            $password = trim($_POST["password"]);
        }

        // Validate password Confirmation
        if(empty(trim($_POST["confirmpassword"])))
        {
            $confirmPasswordError = "Please confirm your password.";
        }
        else
        {
            $confirmPassword = trim($_POST["confirmpassword"]);

            if(empty($confirmPasswordError) && $password != $confirmPassword)
            {
                $confirmPasswordError = "Passwords do not match.";
            }
        }

        // Double Check for errors
        if(empty($usernameError) && empty($passwordError) && empty($confirmPasswordError))
        {
            // prep for insertion (heh... giggity!)
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)"; 

            if($stmt = mysqli_prepare($link, $sql))
            {
                // Bind vars
                mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                // Set params
                $param_username = $username;
                    // hash pwd
                $param_password = password_hash($password, PASSWORD_DEFAULT);

                // Attempt to run statement
                if(mysqli_stmt_execute($stmt))
                {
                    // send user to login page
                    header("location: login.php");
                }
                else
                {
                    echo "Something, somwhere, went terribly wrong... Please try again later.";
                }

                mysqli_stmt_close($stmt);
            }
        }
    }

    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($usernameError)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $usernameError; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($passwordError)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $passwordError; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control <?php echo (!empty($confirmPasswordError)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirmPassword; ?>">
                <span class="invalid-feedback"><?php echo $confirmPasswordError; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>