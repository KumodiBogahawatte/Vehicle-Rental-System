<?php
include_once'config.php';

$name = $_POST["field1"];
$email = $_POST["field2"];
$pnumber = $_POST["field3"];
$pword = $_POST["field4"];

$sql = "INSERT INTO admin_info(user_name,email,phone_number,password) VALUES
		('$name','$email','$pnumber','$pword')";



//execute  the query
  
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Record insert successfully')</script> ";
	//direct to where
	header("Location:Admin_account.php");
  }
  else{
    echo "<script>alert('Error!!')</script> ";
}

//close the connection
mysqli_close($conn);

?>