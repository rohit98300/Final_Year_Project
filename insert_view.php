<?php 
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/db_connect.php");

 // Connecting to database
$db = new DB_CONNECT();
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
re = mysqli_query($con,"INSERT INTO view(cartid,Name,Products,Mode,Amount,DateOf,Transaction) VALUES(44105,'$Name1','$PName1,'$Mod',$Total,'$RA','$RR')");
    // Check for succesfull execution of query
    if ($re) {
        // successfully inserted 
        //$response["success"] = 1;
        //$response["message"] = "Product successfully Added.";
 
        // Show JSON response
        //echo json_encode($response);
        echo "Successful Insertion";
    } else {
        // Failed to insert data in database
        //$response["success"] = 0;
        //$response["message"] = "Something has been wrong";
        echo "Unsuccessful Insertion";
        // Show JSON response
        //echo json_encode($response);
    }