<?php
    // Define Login details for server
    define('DB_SERVER', 'LOCALHOST');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'webdemo');

    // Create connection
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Test connection
    if($link === false){
        die("ERROR: Couldn't connect to server.".mysqli_connect_error());
    }
?>