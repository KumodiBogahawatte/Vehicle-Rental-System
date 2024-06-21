<?php
//Linking the configuration file
include_once 'config.php';

if(isset($_GET['deleteid'])){
    $paymentID=$_GET['deleteid'];  //accessing delete ID from URL and getting that deleteid

    $sql="delete from payment where paymentID=$paymentID";

    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfully...";
        header('location:user.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>