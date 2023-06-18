<?php

    session_start();

    include'connection.php';
    if (isset($_POST['submit'])) {
        $c_name = $_POST['name'];
        $c_email = $_POST['email'];
        $c_password = $_POST['password'];
        $c_privilage = $_POST['privilage'];

        $sql = "INSERT INTO admin (Name, Email, Password, privilage) VALUES ('$c_name','$c_email', '$c_password', '$c_privilage')";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            header('location:admins.php');
            exit();
        } else {
            header('location:admins.php');
            exit();
        }
    }
?>