<?php
include_once 'config.php';
?>

<?php
    if($_GET['submit'])
	{
        
		$aID = $_GET['field0'];
		$name = $_GET['field1'];
		$email = $_GET['field2'];
		$pnumber = $_GET['field3'];
		$pword = $_GET['field4'];
		
        $query = "UPDATE admin_info SET 
		     admin_ID='$aID',
			 user_name='$name',
			 email='$email',
			 phone_number='$pnumber',
			 password='$pword' WHERE  
			 admin_ID='$aID' ";

			$data = mysqli_query ($conn,$query);

        if($data)
		{
			echo"<script>alert('Record updated')</script>";
			header("Location:Admin_account.php");
		}
		else
		{
			echo"<script>alert('error')</script>";
		
		}
	}
	//close connection
    mysqli_close($conn);

?>