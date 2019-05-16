<?php 


date_default_timezone_set('Asia/Kolkata');
$RA=date('d-m-Y H:i');
echo $RA;


 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

//Creating Array for JSON response
    $response = array();
 
// Check if we got the field from the user
    // Include data base connect class
        $filepath = realpath (dirname(__FILE__));
	   require_once($filepath."/db_connect.php");

 
    // Connecting to database 
        $db = new DB_CONNECT();
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    
    $result = mysqli_query($con,"SELECT * FROM product");
$Tot='';
while($row=mysqli_fetch_array($result)){

    //$passenger = array();
        //$bagiot["id"] = $row["id"];
		$Name = $row["PName"];
        //$Tot=$Tot+","+$Name;
    $Tot=$Name.','.$Tot;

    
}

echo $Tot;
    
?>