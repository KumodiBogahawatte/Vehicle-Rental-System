<?php
		//Linking the configuration file
		include_once'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Rental System</title>
	
		<!-- Connection CSS code to HTML -->
	<link rel = "stylesheet" href="Styles/vehicle_owner.css">
		
	<link rel = "stylesheet" href="Styles/header.css">
	
	<link rel = "stylesheet" href="Styles/footer.css">
	
	<!--footer stylesheet icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	
	
	
</head>

<body>

<!-- add a horizontal menu bar --> 
               
                <div class="navbar">
                    
                    <a href="homepage.html">Home</a>
                    <a href="login.php">Login</a>
                    <div class="servicebtn">
                        <button class="dropbtn">Service
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="servicebutton-content">
                            <a href="services.php">Select vehicle</a>
                        </div>
                        
                    </div>
        
                    <div class="profilesbtn">
                        <button class="dropbtn">Profiles
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="profilesbutton-content">
                            <a href="register.php">Create an account</a>
                            <a href="user.php">User account</a>
                            <a href="Vehicle_owner.php">Vehicle owner account</a>
                            <a href="adminpage.php">Admin account</a>
                        </div>
                    </div>
        
                    <div class="aboutusbtn">
                        <button class="dropbtn">About us
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="aboutusbutton-content">
                            <a href="Terms and conditions.php">Terms & Conditions</a>
                            <a href="Privacy & Policy page.html">Privacy & Policy</a>
                            </div>
                        </div>
                    <a href="contact Us.html">Contact Us</a>
                </div>
				
				
	<!-- profile_top -->
	<br><br><br><br>
    <div class="profile_top"> 
	
			<p><b><id="owner_name">WElCOME!</b></p>
			
	</div>
	
	<div style="font-size:20px;">	
		<p>
			<center>
				<br>
				<u>Dear Sir/Madam,</u>
				<br><br>
				There's a lot of choices out  there but you singled us out and that means a lot. We just want to express how much we appreciate your business. When you're looking for something truly special, we hope that we'll continue to be the place you think of first.
				<br><br>
				THANKYOU!
				<br><br>
				-Manager of TravelLine Vehicle Rental
			</center>
		</p>
	</div>
	

	<br><br><b><br><br>
		
		<h2><u>Your Vehicles in website</u></h2><br/><br/>
		
		
		
		<center>
		<table style="width:97%; border:1px solid white; color:black; font-size:20px;">
			  <tr>
			  
				<th>Vehicle ID</th>
				<th>Vehicle Catergory</th>
				<th>Vehicle Registration number</th>
				<th>Vehicle Model</th>
				<th>Vehicle Discription</th>
				<th>Rates per hour</th>
				<th>Rates per day</th>
				<th>Vehicle Image</th>
				<th>Update</th>
				<th>Delete</th>
			  </tr>
			  
		<!--Display only details about the vehicle as a table	-->
		<!--Referred from Labsheet	-->
		
		<?php
			  
			  
			$sql = "select*from vehicle";
			$result=$conn->query($sql); // details in table in saved inside $result variable
		
			//check whether table data are empty or not	
			if($result->num_rows>0) //if number of rows greater than 0, than means there are values inside table  
			{
				
				while($row=$result->fetch_assoc()) // using fetch_assoc() function assign into $row array
				{
				
					echo"<tr>
						<td>".$row["v_id"]."</td>
						<td>".$row["v_category"]."</td>
						<td>".$row["vehicle_num"]."</td>
						<td>".$row["model"]."</td>
						<td>".$row["v_description"]."</td>
						<td>".$row["hour"]."</td>
						<td>".$row["day"]."</td>;
						<td>".$row["v_image"]."</td>";
						
						//create Update Button				
						echo "<td>
							<button><a href='vupdate.php? vid=$row[v_id]&catergory=$row[v_category]&vehicle_num=$row[vehicle_num]&model=$row[model]&des=$row[v_description]&hrs=$row[hour]&day=$row[day]&img=$row[v_image]'>
							Update </button></a>
						</td>";
						
						
						//create Delete Button
						echo" <td>
							<button type ><a href='vdelete.php?  vid=$row[v_id]'>
							Delete </button></a>
						</td>
						
					</tr>";
						
			
				
				}
			}
			
			else
			{
				echo "Empty Rows"; // If there are no any data in table
			}
			
			//close the table tag
			echo"</table>";
			
			//close the connection   
			mysqli_close($conn);	
		
		?>
		
		</center>
		
		
		<br><br><br>
		<button class="addmore" onclick="document.location='Add_vehicle.php' ">Add More Vehicle</button>
   
	
	
	<br><br><br><br><br><br><br><br><br>
	
	<!--footer-->
    <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="images/logo.jpg" alt="" class="logo"><br>

                    <p>"With the help of our amazing rental fleet, unleash your trip. <br> Go off exploring!"</p>
                    
                    <div class="social"><br>
                        <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="www.youtube.com"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>

                <div class="col" id="useful-links"><br>
                    <h3>Links</h3>
                    <div class="link">
                        <a href="About us.php">About us</a>
                        <a href="services.php">Services</a>
                        <a href="Privacy & Policy page.html">Privacy and Policy</a>
                        <a href="Terms and conditions.php">Terms and condditions</a>
                        <a href="contactUs.html">Contact us</a>
                    </div>
                </div>

                <div class="col" id="contacts"><br>
                    <h3>Contact</h3>
                    <div class="contact-details">
                        <p>Address :70/5,  Post Office Road,  Malabe</p>
                        <p><i class="material-icons">call</i>+94-112345678</p>
                        <p><i class="material-icons">email</i>TravelLine.SriLanka@email.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </footer>
		
</body>
</html>