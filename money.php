


<?php



//Creating Array for JSON response


// Include data base connect class
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/db_connect.php");

 // Connecting to database
$db = new DB_CONNECT();
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

 // Fire SQL query to get all data from bagiot
$result = mysqli_query($con,"SELECT * FROM product");

$Total=0;
while($row=mysqli_fetch_array($result)){

    //$passenger = array();
        //$bagiot["id"] = $row["id"];
       // $BID = $row["id"];
		//$Name = $row["PName"];
        //$Source = $row["Qty"];
		$Dest = $row["Amount"];
        //$Stat = $row["baggagestatus"];
        $Total+=$Dest;
        
}

//echo $Total;
?>

