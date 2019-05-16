<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './vendor/autoload.php';
$mail = new PHPMailer(true);  


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    if($_SESSION['permit']==0 || $_SESSION['permit']==1 || $_SESSION['permit']==2) { 
    $con= mysqli_connect('198.71.225.54:3306','phnx','phoenix123456#','phoenixmain'); 
    $teamname = mysqli_real_escape_string($con,$_POST["element_4_1_1"]);
    $caid = mysqli_real_escape_string($con,$_POST["caid"]);
    $name1 =mysqli_real_escape_string($con, $_POST["element_2_1_1"]);
    $name2 = mysqli_real_escape_string($con,$_POST["element_2_1_2"]);
    $name3 = mysqli_real_escape_string($con,$_POST["element_2_1_3"]);
    $name4 = mysqli_real_escape_string($con,$_POST["element_2_1_4"]);
    $name5 = mysqli_real_escape_string($con,$_POST["element_2_1_5"]);
	$college1 =mysqli_real_escape_string($con, $_POST["element_2_2_1"]);
    $college2 = mysqli_real_escape_string($con,$_POST["element_2_2_2"]);
    $college3 = mysqli_real_escape_string($con,$_POST["element_2_2_3"]);
    $college4 =mysqli_real_escape_string($con, $_POST["element_2_2_4"]);
    $college5 = mysqli_real_escape_string($con,$_POST["element_2_2_5"]);
    $mail1 = mysqli_real_escape_string($con,$_POST["element_2_3_1"]);
    $mail2 = mysqli_real_escape_string($con,$_POST["element_2_3_2"]);
    $mail3 = mysqli_real_escape_string($con,$_POST["mail3"]);
    $mail4 = mysqli_real_escape_string($con,$_POST["element_2_3_4"]);
    $mail5 = mysqli_real_escape_string($con,$_POST["element_2_3_5"]);
	$phone1 = mysqli_real_escape_string($con,$_POST["element_2_4_1"]);
    $phone2 = mysqli_real_escape_string($con,$_POST["element_2_4_2"]);
    $phone3 = mysqli_real_escape_string($con,$_POST["element_2_4_3"]);
    $phone4 = mysqli_real_escape_string($con,$_POST["element_2_4_4"]);
    $phone5 = mysqli_real_escape_string($con,$_POST["element_2_4_5"]);
    $allterrain = "No";
	$robosoccer = "No";
	$roborush = "No";	
    $robowar = "No";
	$linefollow = "No";
	$linemaze = "No";
	$fsoc = "No";
    $web = "No";
	$hunt = "No";
	$sherlock = "No";		
	$matchstick = "No";
	$doodle = "No";
	$wordsworth = "No";
    $podium = "No";
	$quizzomaniac = "No";
	$poetry = "No";		
	$cs16 = "No";
    $csgo = "No";
	$dota = "No";
	$fifa19 = "No";
    $nfsmw = "No";
    $pubgmob = "No";
    $pubgemu = "No";
    $pitcher = "No";
    $marketing = "No";
    $penta = "No";
    $insta = "No";
    
    $allterrainpay = "Unpaid";
	$robosoccerpay = "Unpaid";
	$roborushpay = "Unpaid";	
    $robowarpay = "Unpaid";
	$linefollowpay = "Unpaid";
	$linemazepay = "Unpaid";
	$fsocpay = "Unpaid";
    $webpay = "Unpaid";
	$huntpay = "Unpaid";
	$sherlockpay = "Unpaid";		
	$matchstickpay = "Unpaid";
	$doodlepay = "Unpaid";
	$wordsworthpay = "Unpaid";
    $podiumpay = "Unpaid";
	$quizzomaniacpay = "Unpaid";
	$poetrypay = "Unpaid";
	//$cs16pay = "Unpaid";
    $csgopay = "Unpaid";
	$dotapay = "Unpaid";
	$fifa19pay = "Unpaid";
    $nfsmwpay = "Unpaid";
    $pubgmobpay = "Unpaid";
    $pubgemupay = "Unpaid";
    $pitcherpay = "Unpaid";
    $marketingpay = "Unpaid";
    $pentapay = "Unpaid";
    $instapay = "Unpaid";
    $rereg = "No";
    $regby = $_SESSION['login_user'];
        
        
    ///////////////////////////////////////////
        
        $reallterrainpay = "Unpaid";
        $rerobosoccerpay = "Unpaid";
        $reroborushpay = "Unpaid";
        $reroyalrumblepay = "Unpaid";
        $relinefollowpay = "Unpaid";
        $relinemazepay = "Unpaid";
        $refsocpay = "Unpaid";
        $rewebpay = "Unpaid";
            
        $reallterrain="No";
        $rerobosoccer="No";
        $reroborush="No";
        $reroyalrumble="No";
        $relinefollow="No";
        $relinemaze="No";
        $refsoc="No";
        $reweb="No";
/////////////////////////////////////////////
    if(isset($_POST["element_9"]))
		$rereg = "Yes";
	if(isset($_POST["allterrain"]))
		$allterrain = "Yes";
	if(isset($_POST["robosoccer"]))
		$robosoccer = "Yes";
	if(isset($_POST["roborush"]))
		$roborush = "Yes";
    if(isset($_POST["linefollow"]))
		$linefollow = "Yes";
	if(isset($_POST["linemaze"]))
		$linemaze = "Yes";
	if(isset($_POST["robowar"]))
		$robowar = "Yes";
	if(isset($_POST["fsoc"]))
		$fsoc = "Yes";
    if(isset($_POST["web"]))
		$web = "Yes";
    if(isset($_POST["hunt"]))
		$hunt = "Yes";
    if(isset($_POST["sherlock"]))
		$sherlock = "Yes";
    if(isset($_POST["matchstick"]))
		$matchstick = "Yes";
    if(isset($_POST["doodle"]))
		$doodle = "Yes";
    if(isset($_POST["wordsworth"]))
		$wordsworth = "Yes";
    if(isset($_POST["podium"]))
		$podium = "Yes";
    if(isset($_POST["quizzomaniac"]))
		$quizzomaniac = "Yes";
    if(isset($_POST["poetry"]))
		$poetry = "Yes";
    if(isset($_POST["cs16"]))
		$cs16 = "Yes";
    if(isset($_POST["csgo"]))
		$csgo = "Yes";
    if(isset($_POST["dota"]))
		$dota = "Yes";
    if(isset($_POST["fifa19"]))
		$fifa19 = "Yes";
    if(isset($_POST["nfsmw"]))
		$nfsmw = "Yes";
    if(isset($_POST["pubgmob"]))
		$pubgmob = "Yes";
    if(isset($_POST["pubgemu"]))
		$pubgemu = "Yes";
    if(isset($_POST["pitcher"]))
		$pitcher = "Yes";
    if(isset($_POST["marketing"]))
		$marketing = "Yes";
    if(isset($_POST["penta"]))
		$penta = "Yes";
    if(isset($_POST["insta"]))
		$insta = "Yes";
    
    /////////////////////////////////////          QUERY            ////////////////////////////////////
    //$date = date('Y-m-d H:i:s');
    
    $mysql_qry="INSERT INTO maindata (name1, college1, mail1, phone1, name2, college2, mail2, phone2, name3, college3, mail3, phone3, name4, college4, mail4, phone4, name5, college5, mail5, phone5, allterrain, robosoccer, roborush,robowar, linefollow, linemaze, fsoc, web, hunt,sherlock, matchstick, doodle, wordsworth, podium, quizzomaniac, poetry, cs16, csgo, fifa19, nfsmw,dota, pubgmob, pubgemu,pitcher,marketing,penta,insta,rereg,teamname,timestamp,allterrainpay,robosoccerpay,roborushpay,robowarpay, linefollowpay,linemazepay,fsocpay,webpay,huntpay,sherlockpay, matchstickpay, doodlepay, wordsworthpay, podiumpay, quizzomaniacpay, poetrypay,csgopay, fifa19pay, nfsmwpay,dotapay, pubgmobpay, pubgemupay,pitcherpay,marketingpay,pentapay,instapay,regby,caid,reallterrain,reallterrainpay,rerobosoccer,rerobosoccerpay,reroborush,reroborushpay,reroyalrumble,reroyalrumblepay,relinemaze,relinemazepay,relinefollow,relinefollowpay,refsoc,refsocpay,reweb,rewebpay) VALUES (\"$name1\", \"$college1\", \"$mail1\", \"$phone1\", \"$name2\", \"$college2\", \"$mail2\", \"$phone2\", \"$name3\", \"$college3\", \"$mail3\", \"$phone3\", \"$name4\", \"$college4\", \"$mail4\", \"$phone4\", \"$name5\", \"$college5\", \"$mail5\", \"$phone5\", \"$allterrain\", \"$robosoccer\", \"$roborush\", \"$robowar\", \"$linefollow\", \"$linemaze\", \"$fsoc\", \"$web\", \"$hunt\",\"$sherlock\", \"$matchstick\", \"$doodle\", \"$wordsworth\", \"$podium\", \"$quizzomaniac\", \"$poetry\", \"$cs16\", \"$csgo\", \"$fifa19\", \"$nfsmw\",\"$dota\", \"$pubgmob\", \"$pubgemu\", \"$pitcher\",\"$marketing\",\"$penta\",\"$insta\",\"$rereg\",\"$teamname\",DATE_ADD(NOW(),INTERVAL 750 MINUTE), \"$allterrainpay\",\"$robosoccerpay\",\"$roborushpay\",\"$robowarpay\",\"$linefollowpay\",\"$linemazepay\",\"$fsocpay\",\"$webpay\",\"$huntpay\",\"$sherlockpay\",\"$matchstickpay\",\"$doodlepay\",\"$wordsworthpay\",\"$podiumpay\",\"$quizzomaniacpay\",\"$poetrypay\",\"$csgopay\",\"$fifa19pay\",\"$nfsmwpay\",\"$dotapay\",\"$pubgmobpay\",\"$pubgemupay\",\"$pitcherpay\",\"$marketingpay\",\"$pentapay\",\"$instapay\",\"$regby\",\"$caid\",\"$reallterrain\",\"$reallterrainpay\",\"$rerobosoccer\",\"$rerobosoccerpay\",\"$reroborush\",\"$reroborushpay\",\"$reroyalrumble\",\"$reroyalrumblepay\",\"$relinemaze\",\"$relinemazepay\",\"$relinefollow\",\"$relinefollowpay\",\"$refsoc\",\"$refsocpay\",\"$reweb\",\"$rewebpay\");";
    $mysqli_result=mysqli_query($con,$mysql_qry);
    
    if($mysqli_result)
        echo 'Inserted successfully';
    else
        echo error_reporting(E_ALL);

    /////////////////////////////////////          UPDATE QUERY ////////////////////////////////////////
    
    $idupdate = "UPDATE maindata SET teamid=id+1800 WHERE mail1='$mail1'";
    $mysqli_result1=mysqli_query($con,$idupdate);
    $Connection= mysqli_connect('198.71.225.54:3306','phnx','phoenix123456#','phoenixmain');//Establishing Connection with the database
    $ViewQuery="SELECT * From maindata ";
    $Execute= mysqli_query($Connection, $ViewQuery);
    while($DataRows=mysqli_fetch_array($Execute)){
	$UnId=$DataRows['teamid'];
    $timestampreg=$DataRows['timestamp'];
    }
    echo $UnId;
    
    
        /////////////////////////////////////      PDF CREATION      /////////////////////////////////////
    ob_start();
   require('fpdf.php');
    $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFillColor(120,220,100);
$pdf->SetTextColor(0,0,0);

//$pdf->SetDisplayMode('fullwidth');

//$pdf->SetFont('Arial','B',16);

//$pdf->Image('watermark.png',50,50,189);
//$pdf->Image('exhibit.jpg',0,4,210);
//$pdf->Image('Untitled-1.png',32,80,150);
//$pdf->Image('phoenixlogo.png',9,40,25,35);
$pdf->Image('Phoenix 2019 612x93.jpg',0,4,210);
$pdf->Image('Phoenix Logo Light.jpg',32,80,150);
$pdf->Image('Phoenix Logo 183x238.jpg',9,40,25,35);
$pdf->Image('xplorica.jpg',165,40,40,30);
//dummy cell
$pdf->Cell(40,10,'',0,1);
$pdf->Cell(40,10,'',0,1);
$pdf->Cell(40,10,'',0,1);
$pdf->Cell(40,10,'',0,1);
$pdf->Cell(40,10,'',0,1);
$pdf->Cell(40,10,'',0,1);
//$pdf->Cell(40,10,'',1,1);
$pdf->Cell(40,10,'',0,0);
$pdf->Cell(20,10,'',0,0);
//Heading
$pdf->SetFont('Arial','BU',16);
$pdf->Cell(80,10,'CONFIRMATION LETTER',0,1,'C',false);
$pdf->SetFont('Arial','',12);
$pdf->Cell(197.5,5,'Congratulations!!!You are successfully registered with PHOENIX 2019. Below are the details ',0,1);
$pdf->Cell(197.5,5,'pertaining to your registration.',0,1);
$pdf->Cell(180,10,'If the details are not correct please contact the registration desk immediately.',0,1);
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(130,5,'Given below are the details pertaining to your registration',0,0);
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(30,5,'CA: ID(if any):',1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,5,$caid,1,1);

//Team name and ID
$pdf->SetFont('Arial','',11);
$pdf->Cell(30,5,'TEAM NAME: ',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,5,$teamname,0,0);
$pdf->Cell(50,5,'EVENTS REGISTERED',0,1);
$pdf->SetFont('Arial','',11);
$pdf->Cell(30,5,'TEAM ID: ',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,5,$UnId,0,0);
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(50,5,'Technical',0,1);

//First Memeber Details
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(130,10,'1ST MEMBER:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,'All Terrain',0,0);
$pdf->Cell(10,10,$allterrain,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'NAME:',0,0);
$pdf->Cell(110,5,$name1,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'RoboSoccer',0,0);
$pdf->Cell(10,5,$robosoccer,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'INSTITUTE:',0,0);
$pdf->Cell(110,5,$college1,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Robowar',0,0);
$pdf->Cell(10,5,$robowar,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'MAIL ID:',0,0);
$pdf->Cell(110,5,$mail1,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Roborush',0,0);
$pdf->Cell(10,5,$roborush,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'PHONE:',0,0);
$pdf->Cell(110,5,$phone1,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'The Following',0,0);
$pdf->Cell(10,5,$linefollow,0,1);

//Second Memeber Details
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(130,10,'2ND MEMBER:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,'Line Maze',0,0);
$pdf->Cell(10,10,$linemaze,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'NAME:',0,0);
$pdf->Cell(110,5,$name2,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'F-Society',0,0);
$pdf->Cell(10,5,$fsoc,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'INSTITUTE:',0,0);
$pdf->Cell(110,5,$college2,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Webtronix',0,0);
$pdf->Cell(10,5,$web,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'MAIL ID:',0,0);
$pdf->Cell(110,5,$mail2,0,0);
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(40,5,'Non Technical',0,1);
//$pdf->Cell(10,5,'$royal',1,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'PHONE:',0,0);
$pdf->Cell(110,5,$phone2,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Treasure Hunt',0,0);
$pdf->Cell(10,5,$hunt,0,1);

//Third Memeber Details
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(130,10,'3RD MEMBER:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,'Sherlockology',0,0);
$pdf->Cell(10,10,$sherlock,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'NAME:',0,0);
$pdf->Cell(110,5,$name3,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Match Stick Art',0,0);
$pdf->Cell(10,5,$matchstick,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'INSTITUTE:',0,0);
$pdf->Cell(110,5,$college3,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Doodle',0,0);
$pdf->Cell(10,5,$doodle,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'MAIL ID:',0,0);
$pdf->Cell(110,5,$mail3,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Poetry Slam',0,0);
$pdf->Cell(10,5,$poetry,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'PHONE:',0,0);
$pdf->Cell(110,5,$phone3,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'The Podium',0,0);
$pdf->Cell(10,5,$podium,0,1);

$pdf->SetFont('Arial','BU',12);
$pdf->Cell(130,5,'',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Instaframe',0,0);
$pdf->Cell(10,5,$insta,0,1);
//Fourth Member Details
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(130,10,'4TH MEMBER:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,'Quizomaniac',0,0);
$pdf->Cell(10,10,$quizzomaniac,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'NAME:',0,0);
$pdf->Cell(110,5,$name4,0,0);
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(40,5,'Gaming',0,1);
//$pdf->Cell(10,5,'$poetry',1,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'INSTITUTE:',0,0);
$pdf->Cell(110,5,$college4,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'CS GO',0,0);
$pdf->Cell(10,5,$csgo,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'MAIL ID:',0,0);
$pdf->Cell(110,5,$mail4,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Dota 2',0,0);
$pdf->Cell(10,5,$dota,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'PHONE:',0,0);
$pdf->Cell(110,5,$phone4,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'FIFA 19',0,0);
$pdf->Cell(10,5,$fifa19,0,1);
$pdf->SetFont('Arial','',8);

//Fifth Member Details
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(130,10,'5TH MEMBER:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,'PUBG PC',0,0);
$pdf->Cell(10,10,$pubgemu,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'NAME:',0,0);
$pdf->Cell(110,5,$name5,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'PUBG MOB',0,0);
$pdf->Cell(10,5,$pubgmob,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'INSTITUTE:',0,0);
$pdf->Cell(110,5,$college5,0,0);
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(40,5,'Managment',0,1);
//$pdf->Cell(10,5,'$pitcher',1,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'MAIL ID:',0,0);
$pdf->Cell(110,5,$mail5,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Pitchers',0,0);
$pdf->Cell(10,5,$pitcher,0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,5,'PHONE:',0,0);
$pdf->Cell(110,5,$phone5,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Marketing',0,0);
$pdf->Cell(10,5,$marketing,0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,5,'Registered By:',1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,$regby,1,0);
$pdf->Cell(50,5,'',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,5,'Registered On:',1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,$timestampreg,1,0);

    
//$pdf->Cell(40,10,'Hello World!',1,1);
//$dest1='ok';
$dest='regpdfs/'.$UnId.'.pdf';
//$dest=$UnId.'.pdf';
//$pdf->Output('D',$dest);
$pdf->Output('F',$dest);
ob_end_flush();
    
    
    ////////////////////////////        MAIL CREATION ///////////////////////////////////////
    
    
    
    
//$mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'phoenixfiem12@gmail.com';                 // SMTP username
//    $mail->Password = 'Phoenix131415';                           // SMTP password
//    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = 587;   
        
        
        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
//        $mail->isSMTP();
//        $mail->Host = 'relay-hosting.secureserver.net';
//        $mail->Port = 25;
//        $mail->SMTPAuth = false;
//        $mail->SMTPSecure = false;
//        
//        $mail->Username = 'phoenixfiem12@gmail.com';                 // SMTP username
//        $mail->Password = 'Phoenix131415';  
//        $mail->setFrom('phoenixfiem12@gmail.com', 'Phoenix');
//    $mail->SMTPOptions = array(
//    'ssl' => array(
//        'verify_peer' => false,
//        'verify_peer_name' => false,
//        'allow_self_signed' => true
//    )
//);
        
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'phoenixfiem12@gmail.com';                 // SMTP username
    $mail->Password = 'Phoenix131415';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;   
    $mail->setFrom('phoenixfiem12@gmail.com', 'Admin');
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    
     if(!empty($mail1))
    $mail->addAddress($mail1);
     if(!empty($mail2))
    $mail->addAddress($mail2);
     if(!empty($mail3))
    $mail->addAddress($mail3);
     if(!empty($mail4))
    $mail->addAddress($mail4);
     if(!empty($mail5))
    $mail->addAddress($mail5);
    
    //Attachments
    if(!empty($dest))
    $mail->addAttachment($dest);       //Add attachments
    
    
     $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Registration Confirmed';
    $mail->Body    = '<b>This is an auto generated mail. Do not reply</b>';
    $Execute=$mail->send();
        if($Execute){
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Good Job!","Your Team id is:'.$UnId.'","success");';
            echo '}, 500);</script>';

                    }
        else{
//	echo 'Please Atleast add Email and Phone';
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Error!","Please add atleast email and phone","error");';
            echo '}, 500);</script>';
            }
    }
    
    ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>