<?php

    session_start();

    include'connection.php';
    if (isset($_POST['submit'])) {
        $c_admin = $_POST['Admin_id'];

        $sql = "INSERT INTO tables (capacity, managed_by , booked) VALUES ('3', '$c_admin', '0')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header('location:tables.php');
            exit();
        } else {
            header('location:tables.php');
            exit();
        }
    }
?>