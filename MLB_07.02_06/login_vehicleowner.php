<?php
   session_start();
   include_once 'config.php';
?>


<!DOCTYPE html>
<html>
<head>

<title>Login</title>

    <!-- link CSS styles for header and footer-->
    <link rel="stylesheet" href="Styles/styles.css">
	
	<!--link stylesheet for body-->
    <link rel="stylesheet" href="Styles/login.css">
	
	<!--footer stylesheet icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	

</head>

<body>

<!--header-->
<!-- add a horizontal menu bar --> 
                
                <div class="navbar">
                    
                    <a href="home page.html">Home</a>
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
	  

	<br><br><br><br><br><br><br> 
	
	<!--login-->
	
	<!--check login validation-->
	<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['usname'])  //refferd stackoverflow
               && !empty($_POST['pwrd'])) {
        
        $username=$_POST['usname']; 
        $password=$_POST['pwrd'];

        $sql = "SELECT * From register_owner ";
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    if ($username==$row["uname"] && $password==$row["pwd"]) {
                        $_SESSION['logged_user']=$username;
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = $username;
                        header("location:home page.html");
                    }
                    else{
                      
                      $msg = 'Wrong username or password';
                        }
                    }

                    }
                       
            }
                 
               
         ?>


    <!--create login form-->
        <div class="container">
            <center><h2>Vehicle Owner Login</h2></center>
			
			<br>
			
            <form method="POST" class="form1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			
                    <label for="username">Enter your username :</label><br>
                     <input type="text" class="name" id="uname" name="usname" placeholder="username" required><br><br>
					 
					 <label for="password">Enter your password :</label><br>
                     <input type="password" id="pwd" name="pwrd" placeholder="password" required><br><br>
					 
				<center>
                    <input type="submit" id="login" name="login" value="Login">
				</center>
				<br>
				
                </form>
        
        <br>
		<center><?php  echo $msg; ?><br>
		
        Don't have an account? <a href="register_vehicleowner.php">Register</a>
		
		</center>
		
		<br>
        
        </div>

	
	<br><br><br><br><br><br><br><br><br><br>
	
	
	<!--footer-->
	
    <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="Images/logo.jpg" alt="" class="logo"><br>

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
                        <p>Address :70/5,  Post Office Road,  Malabe</p><br>
                        <p><i class="material-icons">call : </i>+94-112345678</p>
                        <p><i class="material-icons">email : </i>TravelLine.SriLanka@email.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </footer>
	  
</body>
</html>	  