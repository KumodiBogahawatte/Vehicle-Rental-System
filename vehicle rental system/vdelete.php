<?php
		//Linking the configuration file
		include_once'config.php';
?>

<!--Referred from Labsheet	-->
<?php

    $v_id = $_GET['vid'];
	
	$query = "delete from vehicle where v_id = '$v_id'";
	
	$data=mysqli_query($conn,$query);
	
	if($data){
			echo"<script>alert('Record deleted')</script>"; //alert box will appered when Record is deleted
			header("Location:Vehicle_owner.php");	
	}
	else{
			echo"<script>alert('error')</script>";
		}		
	
    mysqli_close($conn);


?>