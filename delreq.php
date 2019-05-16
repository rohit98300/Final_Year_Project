<?php if (isset($_GET['tag'])) {
    $id = $_GET['tag'];
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/db_connect.php");
 // Connecting to database
    $db = new DB_CONNECT();
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

    // Fire SQL query to delete bagiot data by id
    $result = mysqli_query($con,"UPDATE product SET delreq=1 WHERE tag = $id");
    if(mysqli_affected_rows($con)>0) {
        // successfully inserted
        echo 1;

        // Show JSON response

    } else {
        // Failed to insert data in database
        echo 0;
    }
  }

    ?>
