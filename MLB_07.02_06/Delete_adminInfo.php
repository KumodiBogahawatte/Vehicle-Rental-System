<?php
//linking configuration file
include_once 'config.php';
?>

<?php

    $aID = $_GET['aID'];
	
	$query = "delete from admin_info where admin_ID = '$aID'";
	
	$data = mysqli_query($conn,$query);
	
	if($data)
	{
			echo"<script>alert('Record deleted')</script>";
				//direct to where
	    header("Location:Admin_account.php");
	}else
		{
			echo"<script>alert('error')</script>";
		}		
	
    mysqli_close($conn);


?>