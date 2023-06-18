<?php

    session_start();
    include'connection.php';
    if (isset($_POST['submit'])) {
        $c_name = $_POST['Name'];
        $c_email = $_POST['Email'];
        $c_Table_no = $_POST['Table_no'];
        $c_Peoples = $_POST['Peoples'];
        $c_Message = $_POST['Message'];
        
        $sql = "INSERT INTO bookings (Name, Email, Table_id, no_of_peoples, requests) VALUES ('$c_name','$c_email', '$c_Table_no', '$c_Peoples', '$c_Message')";
        $query = "update tables set booked ='1' where table_id ='$c_Table_no'";
        $result = mysqli_query($conn, $sql);
        $q_result = mysqli_query($conn, $query);


        if ($result) {
            $t_stat = "Table Booked!";
            $_SESSION['t_stat'] = $t_stat;
            header('location:booking.php');
            exit();
        } else {
            $t_stat = "Table not Booked!";
            $_SESSION['t_stat'] = $t_stat;
            header('location:booking.php');
            exit();
        }
    }
?>