
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View From DataBase</title>
      <script>
    function doOnClick(){
       if (window.confirm('Really?')){
           __doPostBack('id','msg');
       };
    }
</script>
</head>
<style type="text/css">

    input[type="text"],textarea{
        border:1px solid_dashed;
        background-color: rgb(221,216,212);
        width:480px;
        padding:0.5em;
        font-size:1.0em;
    }

    input[type="submit"]{

        color:white;
        font-size:1.0em;
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
        width:200px;
        height:40px;
        background-color: #5D0580;
        border:5px solid;
        border-bottom-left-radius:35px;
        border-top-left-radius:35px;
        border-top-right-radius: 35px;
        border-color:rgb(221,216,212);
        font-weight:bold;
    }


    .FieldInfo{
        color:rgb(251,174,44);
        font-family:Bitter,Georgia,Times,"Times New Roman",serif;
        font-size:1em;
    }


    .success,.caption{

       color:rgb(158,27,214);
        font-family:Bitter,Georgia,Times,"Times New Roman",serif;
        font-size:1.4em;
        font-weight: bold;


    }

    .FieldInfoHeading{
        color:rgb(251,174,44);
        font-family:Bitter,Georgia,Times,"Times New Roman",serif;
        font-size:1.3em;
    }
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 1500px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:nth-child(odd){background-color: lightgray;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
    }
    /*#customers{
        width:1500px;
    }*/

    div{

        width: 500px;
        margin-left: 18px;

    }
    </style>

<body>
    <table id="customers" width="1000" border="1" align="center">
<!--        <caption class="caption">View From DataBase</caption>-->
        <tr>

            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Amount</th>
            <!--<th>Baggage Status</th>
            <th>Delete</th>-->
            <th>Delete</th>

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
$result = mysqli_query($con,"UPDATE product SET usrdel=0");

$result = mysqli_query($con,"SELECT * FROM product");

$Total=0;
while($row=mysqli_fetch_array($result)){

    //$passenger = array();
        //$bagiot["id"] = $row["id"];
        $BID = $row["tag"];
		$Name = $row["PName"];
        $Source = $row["Qty"];
		$Dest = $row["Amount"];
        $pop = $row["pop"];
        if ($pop){
            echo "<script>alert('Item that you have tried to insert is already in your cart !');</script>";
            $tmp = mysqli_query($con,"UPDATE product SET pop=0 WHERE tag='$BID'");
        }

        //$Stat = $row["baggagestatus"];
        $Total+=$Dest;


?>
   

        
    <tr>
    <td><?php echo $BID ;?></td>
    <td><?php echo $Name ;?></td>
    <td><?php echo $Source ;?></td>
    <td><?php echo "Rs ".$Dest ;?></td>
    <!--<td><?php //echo $Stat ;?></td>-->
        <td><a href="confirm.php?tag=<?php echo $BID?>">Delete</a></td>
        </tr>
    
    <?php } ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><strong>Grand Total = </strong><?php echo "Rs ".$Total?></td>
        <td></td>
    </tr>
  </table>
 <!-- <div style="margin-left:1000px">
  <p ><b>Grand Total = </b><?php// echo "Rs ".$Total?></p>
  </div>-->
  
  

</body>

</html>
