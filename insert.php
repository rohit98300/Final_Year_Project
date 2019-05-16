<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_GET['tag']) && isset($_GET['PName']) && isset($_GET['Qty']) && isset($_GET['Amount']) && isset($_GET['delreq'])) {
 
    $tag = $_GET['tag'];
    $Pn = $_GET['PName'];
    $Qt = $_GET['Qty'];
    $am = $_GET['Amount'];
    $del = $_GET['delreq'];
    // Include data base connect class
    $filepath = realpath (dirname(__FILE__));
	require_once($filepath."/db_connect.php");

 
    // Connecting to database 
    $db = new DB_CONNECT();
 $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    // Fire SQL query to insert data in bagiot


$notinsert = 1;
$usrdelreq = 0;

$result = mysqli_query($con,"SELECT * FROM product WHERE tag='$tag'");

if ($del==0){
    while($row=mysqli_fetch_array($result)){
            $tmp = mysqli_query($con,"UPDATE product SET pop=1 WHERE tag='$tag'");
                $notinsert=0;
        }
    }
    else{
        while($row=mysqli_fetch_array($result)){
            $usrdelreq = $row["usrdel"];
            if($usrdelreq){
            $tmp = mysqli_query($con,"UPDATE product SET delreq=1 WHERE tag='$tag'");
        }
        else{
            $tmp = mysqli_query($con,"UPDATE product SET pop=1 WHERE tag='$tag'");
        }
            $notinsert=0;
        }
        if($usrdelreq==0){
            $del = 0;
        }
    }

if($notinsert){
    $result = mysqli_query($con,"INSERT INTO product(tag,PName,Qty,Amount,delreq) VALUES('$tag','$Pn',$Qt,$am,$del)");
 
    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "Product successfully Added.";
 
        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";
 
        // Show JSON response
        echo json_encode($response);
    }
}else{
    $response["success"] = 0;
    $response["message"] = "Duplicate insertion";
    echo json_encode($response);
}
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    // Show JSON response
    echo json_encode($response);
}
?>