<?php

    session_start();

    include'connection.php';

    $userprofile = $_SESSION['email'];

    if($userprofile == true){
        if($_SESSION['is_admin'] == true){

        }
        else{
            $msg = "Sorry! you are not allowed to access admin page.";
            $_SESSION['p_privilage']=$msg;
            header('location:panel.php');
            exit();
        }
    }
    else{
        header('location:admin.php');
    }

?>