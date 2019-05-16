
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './vendor/autoload.php';
$mail = new PHPMailer(true);  


?>


<?php 
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/db_connect.php");

 // Connecting to database
$db = new DB_CONNECT();
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

 // Fire SQL query to get all data from bagiot

$result = mysqli_query($con,"SELECT * FROM product");

if(isset($_POST['na']) && isset($_POST['em']) && isset($_POST['mob']))
{
    $Name1=$_POST['na'];
    $Email=$_POST['em'];
    $Mobile=$_POST['mob'];
    $am=$_POST['amount'];
    $Tot=$_POST['grand'];
}
$Rem=$am-$Tot;
$con1 = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    // Fire SQL query to delete bagiot data by id
    $result1 = mysqli_query($con1,"UPDATE money SET amount=$Rem WHERE cartid = 44105");
    if(mysqli_affected_rows($con1)>0) {
        // successfully inserted
        //echo "Inserted Successfully";

    

echo "<script>alert('Please Collect the Remaining Amount');</script>";
    } else {
        // Failed to insert data in database
        //echo "Problem Inserting into the Database";

    }





$a = mt_rand(100000,999999); 
$RR="INV".(string)$a;
$Total=0;

    $c=$c+1;
date_default_timezone_set('Asia/Kolkata');
$RA=date('d-m-Y');






$response = array();
 
// Check if we got the field from the user

    // Include data base connect class
    //$filepath = realpath (dirname(__FILE__));
	//require_once($filepath."/db_connect.php");

 
    // Connecting to database 
   // $db = new DB_CONNECT();
 //$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    // Fire SQL query to insert data in bagiot


$result1 = mysqli_query($con,"SELECT * FROM product");
$con4 = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
while($row=mysqli_fetch_array($result1)){

    //$passenger = array();
        //$bagiot["id"] = $row["id"];
       // $BID = $row["id"];
		$PName1 = $row["PName"].','.$PName1;
        //$Source = $row["Qty"];
		//$Dest = $row["Amount"];
        //$Stat = $row["baggagestatus"];
        //$Total+=$Dest;
        
}
      
$PName1=substr($PName1,0,strlen($PName1)-1);
//echo $PName1;
$cart=44105;
$Mod="DigiCash Mode";
    $re = mysqli_query($con4,"INSERT INTO view(cartid,Name,Products,Mode,Amount,DateOf,Transaction) VALUES($cart,'$Name1','$PName1','$Mod',$Tot,'$RA','$RR')");
    // Check for succesfull execution of query
    if ($re) {
        // successfully inserted 
        //$response["success"] = 1;
        //$response["message"] = "Product successfully Added.";
 
        // Show JSON response
        //echo json_encode($response);
        //echo "Successful Insertion";
    } else {
        // Failed to insert data in database
        //$response["success"] = 0;
        //$response["message"] = "Something has been wrong";
        //echo "Unsuccessful Insertion";
        // Show JSON response
        //echo json_encode($response);
    }







 ob_start();
require('fpdf/fpdf.php');
    $pdf = new FPDF();
$pdf->AddPage();
//$pdf->SetFillColor(120,220,100);
//$pdf->SetTextColor(0,0,0);
$pdf->Image('paid1.png',32,85,150);
//Heading
$pdf->Cell(65,10,'',0,0);
$pdf->SetFont('Arial','BU',16);
$pdf->Cell(80,10,'INVOICE',0,1,'C',false);
$pdf->SetFont('Arial','',12);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(65,10,'Shoppify Mall',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(65,5,'15/2, South City Avenue',0,0);
$pdf->Cell(65,5,'',0,0);
$pdf->Cell(20,5,'DATE:',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,$RA,0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130,5,'KOLKATA, WEST BENGAL 700028',0,0);
$pdf->Cell(40,5,'INVOICE NUMBER:',0,1);
$pdf->Cell(130,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,$RR,0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,'Bill To :',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,$Name1,0,1);
$pdf->Cell(40,5,$Email,0,1);
$pdf->Cell(40,5,$Mobile,0,1);
//$pdf->Cell(40,5,'$Contact',0,1);
$pdf->Cell(40,5,'',0,1);
$pdf->Cell(40,5,'',0,1);
$pdf->Cell(40,5,'',0,1);
$pdf->Cell(40,5,'',0,1);
$pdf->Cell(40,5,'',0,1);
$pdf->Cell(20,5,'SL NO.',1,0,'C');
$pdf->Cell(30,5,'ITEM CODE',1,0,'C');
$pdf->Cell(60,5,'DESCRIPTION',1,0,'C');
$pdf->Cell(20,5,'QTY',1,0,'C');
$pdf->Cell(20,5,'PRICE',1,0,'C');
$pdf->Cell(40,5,'TOTAL',1,1,'C');
////////////////////////
$c=0;
while($row=mysqli_fetch_array($result)){

    //$passenger = array();
        //$bagiot["id"] = $row["id"];
        $BID = $row["tag"];
        $Name = $row["PName"];
        $Source = $row["Qty"];
		$Dest = $row["Amount"];
        
    $c=$c+1;
$pdf->Cell(20,10,$c,'L',0,'C',false);
$pdf->Cell(30,10,$BID,'L',0,'C');
$pdf->Cell(60,10,$Name,'L',0,'C');
$pdf->Cell(20,10,$Source,'L',0,'C');
$pdf->Cell(20,10,'Rs '.$Dest,'L',0,'C');
$pdf->Cell(40,10,'Rs '.$Dest,'LR',1,'C');
$Total=$Total+$Dest;
    //$Tot=$Tot+$Dest;
}
$GST=0.18*$Total;
$Grand=$Total+$GST;
////////////////////////
/*$pdf->Cell(20,10,$c,'L',0,'C',false);
$pdf->Cell(30,10,$BID,'L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');*/
//$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','L',0,'C',false);
$pdf->Cell(30,10,'','L',0,'C');
$pdf->Cell(60,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(20,10,'','L',0,'C');
$pdf->Cell(40,10,'','LR',1,'C');
////////////////////////
$pdf->Cell(20,10,'','LB',0,'C');
$pdf->Cell(30,10,'','LB',0,'C');
$pdf->Cell(60,10,'','LB',0,'C');
$pdf->Cell(20,10,'','LB',0,'C');
$pdf->Cell(20,10,'','LB',0,'C');
$pdf->Cell(40,10,'','LRB',1,'C');
$pdf->Cell(130,10,'',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,10,'TOTAL(Rs)',1,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,$Total,1,1,'C');
$pdf->Cell(130,10,'',0,0);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,'GST(18%) Rs',1,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,$GST,1,1,'C');
$pdf->Cell(130,10,'',0,0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(20,10,'Grand Total(Rs)',1,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,$Grand,1,1,'C');
$pdf->Cell(40,5,'',0,1);
$pdf->Cell(90,5,'**Goods once sold cannot be returned**',0,1);


//$pdf->SetFont('Arial','B',12);
//$pdf->Cell(40,5,'$number',1,1);
//$pdf->Cell(197.5,5,'Congratulations!!!You have successfully paid for events in PHOENIX 2019. Below are the details ',0,1);
//$pdf->Cell(197.5,5,'pertaining to your payment.',0,1);
$pdf->Cell(100,2,'',0,1);
$dest='bills/'.$RR.'.pdf';
$pdf->Output('F',$dest);
ob_end_flush();
///////////////////////////////   INSERTION      /////////////////////////////////////////////////

//Creating Array for JSON response










////////////////////////////////////// MAIL CREATION///////////////////////////////////////



$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sahu.rohitbest.che@gmail.com';                 // SMTP username
    $mail->Password = '8981587730';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;   
    $mail->setFrom('sahu.rohitbest.che@gmail.com', 'Admin');
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    
     if(!empty($Email))
    $mail->addAddress($Email);

    
    //Attachments
    if(!empty($dest))
    $mail->addAttachment($dest);       //Add attachments
    
    
     $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Payment Bill for Shopping';
    $mail->Body    = '<b>This is an auto generated mail. Do not reply</b>';
    $Execute=$mail->send();
        if($Execute){
            echo "<script>alert('Success!!!! Check Email for Bill');</script>";
            
            
            $filepath = realpath (dirname(__FILE__));
        require_once($filepath."/db_connect.php");

 // Connecting to database 
    $db = new DB_CONNECT();	
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
    // Fire SQL query to delete bagiot data by id
    $result = mysqli_query($con,"DELETE FROM product");
            
    if($result)
    {
        
    }
    else
    {
        
    }
            




        }
            

                
        else{
//	echo 'Please Atleast add Email and Phone';
            echo "<script>alert('Error!!!! Something Went Wrong!');</script>";
            }





?>







<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Success</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Custom Theme files -->
    <link href="css/style8.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->

    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //web font -->

</head>

<body>

    <!-- main -->
    <div class="w3layouts-main">
        <div class="bg-layer">
            <h1>Thank You</h1>
            <div class="header-main">
                <div class="main-icon">
                    <span class="fa fa-eercast"></span>
                  
                </div>
                <div class="header-left-bottom">

                        <!--<div class="icon1">
                            <span class="fa fa-user"></span>
                            <input type="email" placeholder="Email Address" required="" />
                        </div>
                        <div class="icon1">
                            <span class="fa fa-lock"></span>
                            <input type="password" placeholder="Password" required="" />
                        </div>
                        <div class="login-check">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
                        </div>
                        <div class="bottom">-->
                        <a href="index.html" style="color:white; align:center;">Return to Product Page</a>
                        
                </div>
                <!--<div class="social">
                    <ul>
                        <li>or login using : </li>
                        <li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>-->
            </div>

            <!-- copyright -->
            <!--<div class="copyright">
                <p>© 2019 Slide Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
            </div>-->
            <!-- //copyright -->
        </div>
    </div>
    <!-- //main -->

</body>

</html>



