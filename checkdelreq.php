<?php if (isset($_GET['tag'])) {
    $id = $_GET['tag'];
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/db_connect.php");
 // Connecting to database
    $db = new DB_CONNECT();
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

    // Fire SQL query to delete bagiot data by id
    $result = mysqli_query($con,"SELECT delreq FROM product WHERE tag = '$id'");
    while($row=mysqli_fetch_array($result)){
      if($row["delreq"]){
        header("Location: delete.php?tag='$id'");
        die();
      }
    }
  }

    ?>
