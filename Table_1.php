
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Display_Table_1</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<style>
    /* Clicking the label does not activate the input without this */
    input[type="text"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }

    input[type="email"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }


    input[type="tel"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }

    input[type="number"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }

    input[type="password"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }


    header,
    main,
    footer {
        padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {

        header,
        main,
        footer {
            padding-left: 0;
        }
    }
    
    
    .tabs .indicator {

  background-color: purple;

}

/*To change the active state color use the following code in .css file:*/

.tabs .tab a.active {

  background-color: white !important;

  color: purple !important;

}

/*To change the background color on hover use the following code in .css file:*/

.tabs .tab a:hover {

  background-color: #eee;

}

/*To change the link color use the following code in .css file:*/

.tab a {

  font-weight: 600;

  color: rgb(105, 105, 105) !important;

}
    

</style>
</head>
<body>
<div id="test-swipe-1" class="col s12">

 <div class="row">
                    <div class="col s12 m12 z-depth-3" style="overflow-y: auto;
    height: 456px;
    border-radius: 34px;">

                        <table class="responsive-table centered highlight" style=" border-radius: 23px;">
                            <tr>

            <th>Cart ID</th>
            <th>Customer Name</th>
            <th>Products Name</th>
            <th>Amount</th>
            <th>Date of Purchase</th>
            <th>Transaction ID</th>
            <th>Mode of Payment</th>
            <!--<th>Baggage Status</th>
            <th>Delete</th>-->


        </tr>

<?php



//Creating Array for JSON response


// Include data base connect class
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/db_connect.php");

 // Connecting to database
$db = new DB_CONNECT();
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

 // Fire SQL query to get all data from bagiot
$result = mysqli_query($con,"SELECT * FROM view");

$Total=0;
while($row=mysqli_fetch_array($result)){

    //$passenger = array();
        //$bagiot["id"] = $row["id"];
        $ID = $row["cartid"];
		$Na = $row["Name"];
        $Pr = $row["Products"];
		$Mod = $row["Amount"];
        $Date = $row["DateOf"];
        $On = $row["Mode"];
        $Tr = $row["Transaction"];
        //$Stat = $row["baggagestatus"];


?>
   

        
    <tr>
    <td><?php echo $ID ;?></td>
    <td><?php echo $Na ;?></td>
    <td><?php echo $Pr ;?></td>
       <td><?php echo $Mod ;?></td>
       <td><?php echo $Date ;?></td>
       <td><?php echo $Tr ;?></td>
        <td><?php echo $On ;?></td>
        </tr>
    
    <?php } ?>
                        </table>


                    </div>



                </div>

                </div>
                  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>