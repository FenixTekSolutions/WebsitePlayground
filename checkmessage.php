        
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