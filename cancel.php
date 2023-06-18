<?php
    session_start();
    include 'connection.php';
    include 'mail.php';
    if(isset($_GET['cancelid'])){
        $id = $_GET['cancelid'];
        $can_id = $_SESSION['ID'];
        $query_delete = "delete from orders where orderid =$id";
        $query_insert = "insert into cancelled_orders select *, now(), $can_id from orders where orderid =$id";
        $query_email = "select * from orders where orderid =$id";
        $c_row_e = mysqli_query($conn,$query_email);
        $c_email = mysqli_fetch_assoc($c_row_e);
        $result_insert = mysqli_query($conn,$query_insert);
        if($result_insert){
            $result_delete = mysqli_query($conn,$query_delete);
            if($result_delete){
                $mail->SMTPDebug  = 1;  
                $mail->SMTPAuth   = TRUE;
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Host       = "smtp.gmail.com";
                $mail->Username   = 'batnat786@gmail.com';
                $mail->Password   = 'dajrabegiohwpbpm';

                $mail->IsHTML(true);
                $mail->AddAddress($c_email["Email"]);
                $mail->SetFrom("admin@russetcoffee.co","Junaid");
                $mail->Subject = "Your order Has been Cancelled!";
                $mail->Body    = "Details: Name: {$c_email["Name"]} \n Email: {$c_email["Email"]} \n Address: {$c_email["Address"]} \n Phone: {$c_email["Phone"]} \n Caffe Latte: {$c_email["CAFFE_LATTE"]} \n Coffee Mocha: {$c_email["COFFEE_MOCHA"]} \n WHITE CHOCOLATE MOCHA: {$c_email["WHITE_CHOCOLATE_MOCHA"]} \n AMERICAN COFFEE: {$c_email["AMERICAN_COFFEE"]}";
                $mail->send();
                header('location:panel.php');
            }
            else{
                echo "Kush to masla hai daya";
            }
        }
        else{
        	echo "Kush to masla hai daya";
        }
    }   
?>