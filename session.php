<?php

    session_start();

    include'connection.php';

    $userprofile = $_SESSION['email'];
    if($userprofile == true){
    }
    else{
        header('location:admin.php');
    }

?>