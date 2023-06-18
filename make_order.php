<?php

    session_start();

    include'connection.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    if (isset($_POST['submit'])) {
        $c_name = $_POST['Name'];
        $c_email = $_POST['Email'];
        $c_Address = $_POST['Address'];
        $c_Phone = $_POST['Phone'];
        $c_CAFFE_LATTE = $_POST['CAFFE_LATTE'];
        $c_COFFEE_MOCHA = $_POST['COFFEE_MOCHA'];
        $c_WHITE_CHOCOLATE_MOCHA = $_POST['WHITE_CHOCOLATE_MOCHA'];
        $c_AMERICAN_COFFEE = $_POST['AMERICAN_COFFEE'];

        $sql = "INSERT INTO orders (Name, Email, Address, Phone, CAFFE_LATTE, COFFEE_MOCHA, WHITE_CHOCOLATE_MOCHA, AMERICAN_COFFEE) VALUES ('$c_name','$c_email', '$c_Address', '$c_Phone', '$c_CAFFE_LATTE', '$c_COFFEE_MOCHA', '$c_WHITE_CHOCOLATE_MOCHA', '$c_AMERICAN_COFFEE')";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            $o_stat = "Order Recieved!";
            $_SESSION['o_stat'] = $o_stat;
            $mail->SMTPDebug  = 1;  
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = 'batnat786@gmail.com';
            $mail->Password   = 'dajrabegiohwpbpm';

            $mail->IsHTML(true);
            $mail->AddAddress($c_email);
            $mail->SetFrom("admin@russetcoffee.co","Junaid");
            $mail->Subject = "Your order details Recieved to us!";
            $mail->Body    = "Details: \n Name: $c_name \n Email: $c_email \n Address: $c_Address \n Phone: $c_Phone \n Caffe Latte: $c_CAFFE_LATTE \n Coffee Mocha: $c_COFFEE_MOCHA \n WHITE CHOCOLATE MOCHA: $c_WHITE_CHOCOLATE_MOCHA \n AMERICAN COFFEE: $c_AMERICAN_COFFEE";
            $mail->send();
            header('location:shop.php');
            exit();
        } else {
            $o_stat = "Order not recieved!";
            $_SESSION['o_stat'] = $o_stat;
            header('location:shop.php');
            exit();
        }
    }
?>