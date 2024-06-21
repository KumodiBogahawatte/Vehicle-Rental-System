<?php
		//Linking the configuration file
		include_once'config.php';
?>




<?php
	if($_GET['submit']){

		$rID = $_GET["field0"];
		$name = $_GET["field1"];
		$pdate= $_GET["field2"];
		$ptime = $_GET["field3"];
		$rdate = $_GET["field4"];
		$rtime = $_GET["field5"];
		
		
		
		$query = "UPDATE reservation SET  
					Reservation_ID='$rID',
					Customer_name='$name',
					Pickup_date='$pdate',
					Pickup_time='$ptime',
					Return_date='$rdate',
					Return_time='$rtime'  WHERE
					
					Reservation_ID='$rID' ";
					
				
			
				
				
			$data = mysqli_query($conn,$query);
			
			if($data){
				echo"<script> alert('Record Upadated') </script>";
				header("Location:reservationAccount.php");
			}
			else{
				echo"<script> alert('Error in Upadate') </script>";
			}
		
	}
	//close the connection
	mysqli_close($conn);
		
?>
