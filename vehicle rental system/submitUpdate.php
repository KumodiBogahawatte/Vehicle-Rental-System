<?php
		//Linking the configuration file
		include_once'config.php';
?>

<!--Referred from Labsheet	-->


<?php
	//  variables = field names of updated Form
	if($_GET['submit']){
		$vid = $_GET["field0"];
		$vehicle = $_GET["field1"];
		$vehicle_num = $_GET["field2"];
		$model = $_GET["field3"];
		$description = $_GET["field4"];
		$hour = $_GET["field5"];
		$day = $_GET["field6"];
		$image = $_GET["field7"];
		
		
		$query = "UPDATE vehicle SET  
					v_id='$vid',
					v_category='$vehicle',
					vehicle_num='$vehicle_num',
					model='$model',
					v_description='$description',
					hour='$hour',
					day='$day',
					v_image='$image' WHERE
					
					v_id='$vid' ";
					
		//names in colunm in database table = variable		
			
				
				
			$data = mysqli_query($conn,$query);
			
			if($data){
				echo"<script> alert('Record Upadated') </script>";
				header("Location:Vehicle_owner.php");
			}
			else{
				echo"<script> alert('Error in Upadate') </script>";
			}
		
	}
	//close the connection
	mysqli_close($conn);
		
?>