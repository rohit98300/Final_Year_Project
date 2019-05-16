<?php
 

//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_GET['tag'])) {
    $id = $_GET['tag'];
 
    // Include data base connect class
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/db_connect.php");

 // Connecting to database 
    $db = new DB_CONNECT();	
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
    // Fire SQL query to delete bagiot data by id
    $result = mysqli_query($con,"DELETE FROM product WHERE tag = $id");
 
    // Check for succesfull execution of query
    if ($result) {
        // successfully deleted
        echo'<script>window.open("index.html","_self")</script>';
 
        // Show JSON response
    } else {
        // no matched id found
        echo "No bagiot data found by given id";
 
        // Echo the failed response
    }
} else {
    // If required parameter is missing
    echo "Parameter(s) are missing. Please check the request";
 
    // Show JSON response
}
?>