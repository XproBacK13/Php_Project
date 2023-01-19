<?php
include 'connect.php';

    $id=$_GET['deleteid'];
   
    $sql="DELETE FROM name WHERE id=$id; DELETE FROM email WHERE id=$id;DELETE FROM mobile WHERE id=$id;DELETE FROM address WHERE id=$id;DELETE FROM password WHERE id=$id";
    $result=mysqli_multi_query($con,$sql);
    if($result){
        //echo "Deleted";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

   


?>