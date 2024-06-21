<!--Referred from Labsheet	-->

<?php
		//Linking the configuration file
		include_once'config.php';
?>


<?php		
		
		//assign text box values(user inputs) to variables
		$vehicle = $_POST["vehicle"];
		$vehicle_num = $_POST["vehicleno"];
		$model = $_POST["model"];
		$description = $_POST["description"];
		$hour = $_POST["hour"];
		$day = $_POST["day"];
		$image = $_POST["image"];
		
		$sql = "INSERT INTO vehicle(v_id,v_category,vehicle_num,model,v_description,hour,day,v_image)
		VALUES('','$vehicle','$vehicle_num','$model','$description','$hour','$day','$image')";			
		
		//execute the query
		if(mysqli_query($conn,$sql)){
			//echo"<script> alert('Record inserted Sussessfully') </script>";
			header("Location:vehicle_owner.php");
		}
		else{
			echo"<script> alert('Error in Insertion! ') </script>";
		}	
		
		//close the connection
		mysqli_close($conn);
		
		
		
?>