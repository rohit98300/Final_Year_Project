
<?php

include("money.php");

//Creating Array for JSON response


// Include data base connect class
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/db_connect.php");

 // Connecting to database
$db = new DB_CONNECT();
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

 // Fire SQL query to get all data from bagiot


$result = mysqli_query($con,"SELECT * FROM money");

while($row=mysqli_fetch_array($result)){

    //$passenger = array();
        //$bagiot["id"] = $row["id"];
        $amount = $row["amount"];


}
?>




<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2 align="center"><b>Welcome to DigiCash Page</b></h2>
   <div>
       
       
       
       
       
       
       
       <h3 align="center">Your Wallet Balance : <?php //echo $amount; }?></h3>-->
       
       
       
       <!DOCTYPE html>
<html lang="en">
<head>
	<title>CheckOut Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
       
       
       
       
       
       
       <?php if($amount>=$Total){
       


    

//echo "<script>alert('Money Sent Successfully');</script>";else {
        // Failed to insert data in database
    
       
       ?>
       <!--<h3 align="center">Grand Total : Rs <?php //echo $Total; ?></h3>
       <form action="succ.php" method="post">
           <div align="center">
           <input type="hidden" name="amount" value="<?php //echo $amount;?>">
           <input type="hidden" name="grand" value="<?php //echo $Total;?>">
           Name :
           <input type="text" name="na" id="na" required/><br/><br/>
           Email ID :
           <input type="email" name="em" id="em" required/><br/><br/>
           Mobile Number :
           <input type="number" name="mob" id="mob" required/><br/><br/>
           <input type="submit" name="submit" value="PayNow">
           </div>
           
       </form>-->
       
       
       
      
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg'); background-size: cover;background-repeat: no-repeat">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="succ.php" method="post">
					<span class="login100-form-title p-b-49">
						Grand Total : <?php echo "Rs ".$Total;?>
					</span>
                    <input type="hidden" name="amount" value="<?php echo $amount;?>">
                    <input type="hidden" name="grand" value="<?php echo $Total;?>">
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Full Name is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="na" placeholder="Enter Full Name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email ID is required">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="email" name="em" placeholder="Enter Email ID">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Mobile Number is required">
						<span class="label-input100">Mobile Number</span>
						<input class="input100" type="number" name="mob" placeholder="Enter Mobile Numebr">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<!--<div class="wrap-input100 validate-input" data-validate="Amount is required">
						<span class="label-input100">Amount</span>
						<input class="input100" type="text" name="amo" placeholder="Enter Amount">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>-->
					
					<!--<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>-->
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Pay Money
							</button>
						</div>
					</div>

					<!--<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>-->

					<!--<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>-->

					<!--<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>-->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



       
       
       <?php 
    
}
       else{
    echo "<script>alert('Insufficient Balance');</script>";
           
        //echo "Problem Inserting into the Database";
           
           
       }
       ?>
       
       
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg'); background-size: cover;background-repeat: no-repeat">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="succ.php" method="post">
					<span class="login100-form-title p-b-49">
						Grand Total : <?php echo "Rs ".$Total;?><br/>
						
					</span>
                   Refresh Page to reload the wallet
                    <input type="hidden" name="amount" value="<?php echo $amount;?>">
                    <input type="hidden" name="grand" value="<?php echo $Total;?>">
					

					<!--<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>-->

					<!--<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>-->

					<!--<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>-->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
       
    </body>
</html>
