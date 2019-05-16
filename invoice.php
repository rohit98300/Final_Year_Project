<?php 
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/db_connect.php");

 // Connecting to database
$db = new DB_CONNECT();
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

 // Fire SQL query to get all data from bagiot
$result = mysqli_query($con,"UPDATE product SET usrdel=0");

$result = mysqli_query($con,"SELECT * FROM product");

$Total=0;

    $c=$c+1;
date_default_timezone_set('Asia/Kolkata');
$RA=date('d-m-Y');
 ob_start();
require('fpdf/fpdf.php');
    $pdf = new FPDF();
$pdf->AddPage();
//$pdf->SetFillColor(120,220,100);
//$pdf->SetTextColor(0,0,0);

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
$pdf->Cell(40,5,'$number',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,'Bill To :',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'$Name',0,1);
$pdf->Cell(40,5,'$Company',0,1);
$pdf->Cell(40,5,'$Address',0,1);
$pdf->Cell(40,5,'$Contact',0,1);
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

$pdf->Output();
ob_end_flush();
?>