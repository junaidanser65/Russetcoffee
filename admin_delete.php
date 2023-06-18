<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $query_delete = "delete from admin where ID =$id";
        $result_delete = mysqli_query($conn,$query_delete);
        if($result_delete){
            header('location:admins.php');
        }
        else{
        	echo "Kush to masla hai daya";
        }
    }   
?>