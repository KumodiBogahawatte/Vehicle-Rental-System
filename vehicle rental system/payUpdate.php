<?php
// Linking the configuration file
include_once 'config.php';

if (isset($_POST['submit'])) {
    // Update the payment record
    $paymentID = $_GET['updateid'];
    $fullname = $_POST['fullname'];
    $No = $_POST['NIC'];
    $contactNo = $_POST['cNo'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $Name = $_POST['name'];
    $cardno = $_POST['cardNo'];
    $cvv = $_POST['CVV'];
    $p_date = $_POST['pDate'];
    $r_date = $_POST['rDate'];
    $loca = $_POST['location'];
    $Note = $_POST['note'];

    $sql = "UPDATE payment SET fullname='$fullname', NIC='$No', cNo='$contactNo', email='$email', address='$address', name='$Name', cardNo='$cardno', CVV='$cvv', pDate='$p_date', rDate='$r_date', location='$loca', note='$Note' WHERE paymentID='$paymentID'";

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Update successful
        echo "Payment record updated successfully.";
        header("Location: user.php");

    } else {
        // Error occurred during update
        echo "Error updating payment record: " . mysqli_error($conn);
    }
} else {
    // Retrieve the data from the database based on the paymentID
    $paymentID = $_GET['updateid'];
    $sql = "SELECT * FROM `payment` WHERE paymentID=$paymentID";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Assign the fetched values to variables
        $fullname = $row['fullname'];
        $No = $row['NIC'];
        $contactNo = $row['cNo'];
        $email = $row['email'];
        $address = $row['address'];
        $Name = $row['name'];
        $cardno = $row['cardNo'];
        $cvv = $row['CVV'];
        $p_date = $row['pDate'];
        $r_date = $row['rDate'];
        $loca = $row['location'];
        $Note = $row['note'];

    } else {
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>TravelLine vehicle rental</title>
<!--home page stylesheet-->
    <link rel="stylesheet" href="Styles/homepage.css">


<!--footer stylesheet-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--icon links-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

<!--font-awsome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--header and footer stylesheet-->
<link rel="stylesheet" href="Styles/haed&foot.css">


<!--payament stylesheet-->
<link rel="stylesheet" href="Styles/payment.css">

<link rel="stylesheet" href="Styles/UserAccount.css">


</head>

<body>

 <!--JavaScript-->   
    <script>
        function payFunction() {
             alert("New payment successfully added!");
        }

        function validateEmail(input) {
        var email = input.value;
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailPattern.test(email)) {
            input.setCustomValidity('');
            input.style.border = ''; // Remove inline border style
        } else {
            input.setCustomValidity('Please enter a valid email address');
            input.style.border = '2px solid red'; // Apply red border inline style
        }
        }
    </script>

        <!-- add a horizontal menu bar --> 
        
        <div class="navbar">

        <a href="home page.html">Home</a>
            <a href="login.php">Login</a>
            <div class="servicebtn">
                <button class="dropbtn">Service
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="servicebutton-content">
                    <a href="services.html">Select vehicle</a>
                </div>
                
            </div>

            <div class="profilesbtn">
                <button class="dropbtn">Profiles
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="profilesbutton-content">
                    <a href="register.php">Create an account</a>
                    <a href=" user.php">User account</a>
                    <a href="Vehicle_owner.php">Vehicle owner account</a>
                    <a href="adminpage.html">Admin account</a>
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
        
        
        <div class="containor">
        <button class="btn-1"><a href="payment.php"><b>New Payment</b></a></button>
    </div><br>
<div class="p-containor">

<!-- <form action="displayPay.php" method="POST"> -->
<form action="payUpdate.php?updateid=<?php echo $_GET['updateid']; ?>" method="POST">


        <div class="p-row">

            <div class="p-col">

                <h3 class="title">Customer Information</h3><br>
                <div class="inputBox">
                    <span>Full name : </span>
                    <input type="text" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required>
                </div><br>
                <div class="inputBox">
                    <span>Customer NIC No or Passport NO : </span>
                    <input type="text" placeholder="NIC or Passport" name="NIC" value="<?php echo $No; ?>" required>
                </div><br>
                <div class="inputBox">
                    <span>Contact No : </span>
                    <input type="tel" placeholder="0712345678" name="cNo" pattern="[0-9]{10}" value="<?php echo $contactNo; ?>" required>
                </div><br>
                <div class="inputBox">
                    <span>Email : </span>
                    <input type="email" placeholder="example@email.com" name="email" id="email" value="<?php echo $email; ?>" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required oninput="validateEmail(this)" style="border: 2px solid;">
                </div><br>
                <div class="inputBox">
                    <span>Address : </span>
                    <input type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
                </div><br>
                <div class="inputBox">
                    <span>Pick-up date : </span>
                    <input type="date" name="pDate" value="<?php echo $p_date; ?>" required>
    
                </div><br>
                <div class="inputBox">
                    <span>Return date : </span>
                    <input type="date" name="rDate" value="<?php echo $r_date; ?>" required>
    
                </div><br><br>
                <div class="inputBox">
                    <span>Pickup Location : </span>
                    <input type="text" name="location" value="<?php echo $loca; ?>" required>
                </div><br>
            </div>
        </div>

        <div class="p-row">

            <div class="p-col">
    
                <h3 class="title">Payment Information</h3><br>
                <div class="inputBox">
                    <span>Name on card : </span>
                    <input type="text" placeholder="Name" name="name" value="<?php echo $Name; ?>" required>
                </div><br>
                <div class="inputBox">
                    <span>Credit card NO : </span>
                    <input type="text" name="cardNo" placeholder="1111-2222-3333-4444" pattern="[0-9]{10}" value="<?php echo $cardno; ?>" required>
                </div><br>

                <div class="inputBox">
                    <span>CVV : </span>
                    <input type="text" placeholder="1234" name="CVV" pattern="[0-9]{4}" value="<?php echo $cvv; ?>" required>
                </div><br>

                <div class="inputBox">
                    <span>Note : </span>
                    <textarea name="note" id="" cols="30" rows="10" placeholder="Some Message :"><?php echo $Note; ?></textarea>
                </div><br>
            </div><br>
            <input type="checkbox" name="accept" value required> Accept privacy policy and terms <br>
        </div>
        <button type="submit" id="paybtn" name="submit" onclick="payFunction()">Update</button>
    </form>
</div>

<!--footer-->
    <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="Images/logo.png" alt="" class="logo"><br>

                    <p>"With the help of our amazing rental fleet, unleash your trip. <br> Go off exploring!"</p>
                    
                    <div class="social"><br>
                        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
                    </div>

                </div>

                <div class="col" id="useful-links"><br>
                    <h3>Links</h3>
                    <div class="link">
                        <a href="About us.php">About us</a>
                        <a href="services.html">Services</a>
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