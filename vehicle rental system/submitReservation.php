<?php
include_once 'config.php';
?>

<?php

$name = $_POST["name"];
$pdate = $_POST["pdate"];
$ptime = $_POST["ptime"];
$rdate = $_POST["rdate"];
$rtime = $_POST["rtime"];

$sql = "INSERT INTO reservation (Reservation_ID,Customer_name,Pickup_date,Pickup_time,Return_date,Return_time) VALUES ('','$name','$pdate','$ptime','$rdate','$rtime')";



//execute  the query
  
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Record insert successfully')</script> ";
	//direct to where
	header("Location:reservationAccount.php");
  }
  else{
    echo "<script>alert('Error!!')</script> ";
}

//close the connection
mysqli_close($conn);

?>