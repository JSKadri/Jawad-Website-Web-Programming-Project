<?php
    // This is the old way of connecting, its retired because it doesn't create the db
    // $DATABSE_HOST = "localhost";
    // $DATABSE_USER = "root";
    // $DATABSE_PSW = "";
    // $DATABASE_NAME = "resn_db";

    // $connection = new MYSQLi($DATABSE_HOST, $DATABSE_USER, $DATABSE_PSW, $DATABASE_NAME);
    
    // if(!$connection) {
    //     die("Connection failed: " . mysqli_connect_error());
    //     // In the future we will redirect to a page that will tell the user that there was an error.
    // } else {
    //     echo "Connected successfully";
    // }
?>

<!-- This is imported from a group project in the web-programming course (still created by me) -->
<?php
    $DATABSE_HOST = "localhost";
    $DATABSE_USER = "root";
    $DATABSE_PSW = "";
    $DATABASE_NAME = "";

    $connection = mysqli_connect($DATABSE_HOST, $DATABSE_USER, $DATABSE_PSW, $DATABASE_NAME);

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS resn_db";  // Create the database
    $DATABASE_NAME = "resn_db";  // Set the database name
    if(mysqli_query($connection, $sql)) {  // If the database was created successfully 
        $sql = "CREATE TABLE IF NOT EXISTS resn_db.users (   
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL,
            creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            permission TINYINT(3) NOT NULL
        )";    // Create the table

        if(mysqli_query($connection, $sql)) {
            //echo "Found Table users successfully";
        } else {
            echo "Error finding table: " . mysqli_error($connection);
        }

    } else {
        echo "Error finding database: " . mysqli_error($connection);
    }

    $connection = new MYSQLi($DATABSE_HOST, $DATABSE_USER, $DATABSE_PSW, $DATABASE_NAME) or die("Error: " . mysqli_error($connection));
?>
