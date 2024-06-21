<?php
		//Linking the configuration file
	include_once 'config.php';
?>

<!--Referred from Labsheet	-->
<?php
		//assign values to variables
		$vehicleID = $_GET["vid"];
		$vehicle = $_GET["catergory"];
		$vehicleno = $_GET["vehicle_num"];
		$model = $_GET["model"];
		$description = $_GET["des"];
		$hour = $_GET["hrs"];
		$day = $_GET["day"];
		$image = $_GET["img"];
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Rental System</title>
	
	<!-- Connection CCS code to HTML -->
	<link rel = "stylesheet" href="Styles/Add_vehicle.css">
	
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
                    <a href="contactUs.html">Contact Us</a>
                </div>

<br><br><br><br><br>
<h3>UPDATE VEHICLE DETAILS</h3>


	<form action="submitUpdate.php" method="GET" name="form2">  <!-- php part  connection website -->
	
	<table border="0" width="75%" style="color:white;">
	
		<tr>
			<td>Vehicle ID</td>
			<td><input type="text" value="<?php echo"$vehicleID"?>" name="field0" readonly></td> <!--echo"$___" will Display the prrevious values of submited form-->
		</tr>
		
		
		<tr>
			<td>vehicle Category </td>
			<td><input type="text"  value="<?php echo "$vehicle"?>" name="field1"></td>
		</tr>
		
		
		<tr>
			<td>Vehicle Registration Number</td>
			<td><input type="text" value="<?php echo "$vehicleno"?>" name="field2"></td>
		</tr>
		
		<tr>
			<td>Model</td>
			<td><input type="text"   value="<?php echo "$model"?>" name="field3"></td>
		</tr>
		
		<tr>
			<td>Vehicle Description</td>
			<td><input type="text"  value="<?php echo "$description"?>" name="field4"></td>
		</tr>
		
		<tr>
			<td>Rates per hour</td>
			<td><input type="text"  value="<?php echo "$hour"?>" name="field5"></td>
		</tr>
		
		<tr>
			<td>Rates per day</td>
			<td><input type="text"  value="<?php echo "$day"?>" name="field6"></td>
		</tr>
		
		<tr>
			<td>Vehicle Image</td>
			<td><input type="text"  value="<?php echo "$image"?>" name="field7"></td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>	
		</tr>
		
		
		<tr>
		<td></td>
		<td>
			
			<!--Update Buttom-->
			<input id="submit" type="submit" name="submit" value="   Update   "  
			style="background-color:#d2945e; color:black;  border-radius:8px; border-color: #d2945e; font-size: 28px;font-family: Georgia; box-shadow:  0 0 50px #d2945e;  position: relative;
			 left:15%;"> <!-- Adding styles using inline CSS  -->
			
		</tr>
	
	</table>

	</form>
	
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

	
	<!--footer  	-->
    <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="images/logo.png" alt="" class="logo"><br>

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
                        <p>Address :<br> 70/5,  Post Office Road,  Malabe</p><br>
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