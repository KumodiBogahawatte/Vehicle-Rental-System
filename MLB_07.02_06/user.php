<?php
//Linking the configuration file
include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operations</title>

<!--home page stylesheet-->
<link rel="stylesheet" href="Styles/homepage.css">


<!--footer stylesheet-->
<link rel="stylesheet" href="Styles/styles/footer.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--icon links-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

<!--font-awsome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--payament stylesheet-->
<link rel="stylesheet" href="Styles/payment.css">

<!--header and footer stylesheet-->
<link rel="stylesheet" href="Styles/haed&foot.css">

<link rel="stylesheet" href="Styles/UserAccount.css">

    
</head>
<body>

 <!--JavaScript-->   
 <script>
function deleteFunction() {
  alert("You have successfully deleted the details!");
}
</script>

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
    
    <img src="Images/user.jpg" alt="" style="width:200px;margin-left:43%;border-radius:50%;">

    <h1 style="font-size: 55px;text-align: center;">Welcome!</h1><br><br>
    <section>
    <h1>Change Payment Details</h1><br><br>
    <p style="font-size:20px;text-align:center;">To update your payment details, please click on UPDATE. To delete your payment deatils, please click on DELETE .</p>
    <br><br>
    <table class="tab1">
        
        <h2 style=" text-align: center;">Customer Information Table</h2>
         <thead>
            <th style="width:50px;background-color: cadetblue;">Payment ID</th>
            <th style="width:200px;background-color: cadetblue;">Full Name</th>
            <th style="width:150px;background-color: cadetblue;">NIC No</th>
            <th style="width:150px;background-color: cadetblue;">Contact No</th>
            <th style="width:250px;background-color: cadetblue;">Email</th>
            <th style="width:250px;background-color: cadetblue;">Address</th>
            <th style="width:300px;background-color: cadetblue;">Operation</th>
         </thead>
        
         <tbody>
         <?php
                $sql = "select * from payment;";
                $result=mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $paymentID=$row['paymentID'];
                        $fullname=$row['fullname'];
                        $No=$row['NIC'];
                        $contactNo=$row['cNo'];
                        $email=$row['email'];
                        $address=$row['address'];

                        echo '<tr>
                        <th scope="row">'.$paymentID.'</th>
                        <th>'.$fullname.'</th>
                        <th>'.$No.'</th>
                        <th>'.$contactNo.'</th>
                        <th>'.$email.'</th>
                        <th>'.$address.'</th>
                        <th>
                            <button class="btn-2"><a href="payUpdate.php?updateid='.$paymentID.'">UPDATE</a></button>
                            <button class="btn-3" onclick="deleteFunction()"><a href="payDeleteInfo.php?deleteid='.$paymentID.'">DELETE</a></button>
                        </th>
                     </tr>'; }  
                    }
                ?>
         </tbody>
    </table>
<br><br>
    <table class="tab2">
    <h2 style=" text-align: center;">Payment Information Table</h2>
        <thead>
            <th style="width:50px;background-color: cadetblue;">Payment ID</th>
            <th style="width:200px;background-color: cadetblue;">Name on card</th>
            <th style="width:100px;background-color: cadetblue;">Card No</th>
            <th style="width:40px;background-color: cadetblue;">CVV</th>
            <th style="width:200px;background-color: cadetblue;">Pickup Date & time</th>
            <th style="width:200px;background-color: cadetblue;">Return Date & time</th>
            <th style="width:100px;background-color: cadetblue;">Location</th>
            <th style="width:300px;background-color: cadetblue;">Note</th>
            <th style="width:300px;background-color: cadetblue;">Operation</th>
        </thead>

        <tbody>
            <?php
                $sql = "select * from payment;";
                $result=mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $paymentID=$row['paymentID'];
                        $Name=$row['name'];
                        $cardno=$row['cardNo'];
                        $cvv=$row['CVV'];
                        $p_date=$row['pDate'];
                        $r_date=$row['rDate'];
                        $loca=$row['location'];
                        $Note=$row['note'];

                    echo '<tr>
                    <th scope="row">'.$paymentID.'</th>
                    <th>'.$Name.'</th>
                    <th>'.$cardno.'</th>
                    <th>'.$cvv.'</th>
                    <th>'.$p_date.'</th>
                    <th>'.$r_date.'</th>
                    <th>'.$loca.'</th>
                    <th>'.$Note.'</th> 
                    <th>
                        <button class="btn-2"><a href="payUpdate.php?updateid='.$paymentID.'">UPDATE</a></button>
                        <button class="btn-3" onclick="deleteFunction()"><a href="payDeleteInfo.php?deleteid='.$paymentID.'">DELETE</a></button>
                    </th>
                 </tr>'; }  
                }
            ?>
            
         </tbody>
    </table>
    
    </section>
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
 
</body>
</html>