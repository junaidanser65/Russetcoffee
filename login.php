<?php

    session_start();

    include'connection.php';
    $_SESSION['p_privilage']=null;
    if (isset($_POST['submit'])) {
        $c_email = $_POST['email'];
        $c_password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE Email='" . $c_email . "' AND Password='" . $c_password . "' LIMIT 1";
        $privilage = "SELECT privilage FROM admin WHERE Email='" . $c_email . "' AND Password='" . $c_password . "' LIMIT 1";
        $ID = "SELECT ID FROM admin WHERE Email='" . $c_email . "' AND Password='" . $c_password . "' LIMIT 1";
        $privilage_result = mysqli_query($conn, $privilage);
        $ID_result = mysqli_query($conn,$ID);
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($privilage_result);
            $row_i = mysqli_fetch_assoc($ID_result);
            $privilage = $row['privilage'];
            $_SESSION['email'] = $c_email;
            $_SESSION['ID'] = $row_i['ID'];
            if($privilage == 1){
                $_SESSION['is_admin'] = true;
            }
            else{
                $_SESSION['is_admin'] = false;
            }
            header('location:panel.php');
            exit();
        } else {
            $wrong = "Wrong Email or Password";
            $_SESSION['wrong'] = $wrong;
            header('location:admin.php');
            exit();
        }
    }
?>