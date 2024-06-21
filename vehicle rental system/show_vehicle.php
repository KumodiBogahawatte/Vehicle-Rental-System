<!-- Display vehicle details-->	
<?php
		//Linking the configuration file
		include_once'config.php';
?>

<!--Referred from YouTube -->
<?php
		$k = $_POST['id'];
		$sql = "select * from vehicle where v_category ='{$k}'"; 
		
		$res= mysqli_query($conn,$sql);
		
		while($rows= mysqli_fetch_array($res)){
?>
		<tr>
			<td > <?php echo $rows['model'];  ?> </td>
			<td> <?php echo $rows['vehicle_num'];  ?> </td>
			<td > <?php echo $rows['v_category'];  ?> </td>
			<td> <?php echo '<a href="vehicle_details.html"> <input type="submit" class = "btn" value ="More Details"> </a>';
?></td>

		</tr>


<?php			
			
		}
		echo $sql;


?>