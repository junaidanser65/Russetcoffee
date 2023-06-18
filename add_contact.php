<?php
    
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
        $c_subject = $_POST['subject'];
        $c_message = $_POST['message'];

        $sql = "INSERT INTO contact (Name, Email, Subject, Message) VALUES ('$c_name','$c_email', '$c_subject', '$c_message')";
        $result = mysqli_query($conn, $sql);


        if ($result) {

            $mail->SMTPDebug  = 1;  
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = 'batnat786@gmail.com';
            $mail->Password   = 'dajrabegiohwpbpm';

            $mail->IsHTML(true);
            $mail->AddAddress("junaidanser65@gmail.com");
            $mail->SetFrom($c_email, $c_name);
            $mail->Subject = $c_subject;
            $mail->Body    = $c_message;
            $mail->send();
            header('location:contact.php');
            exit();
        } else {
            header('location:contact.php');
            exit();
        }
    }
?>