<?php 

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "russet_coffee";

    // Establish the database connection
    $conn = mysqli_connect($host, $user, $password, $db);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>