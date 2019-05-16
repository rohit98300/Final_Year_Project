<!doctype html>
<html lang="en">
<?php if (isset($_GET['tag'])) {
    $id = $_GET['tag'];
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/db_connect.php");
    // Connecting to database 
    $db = new DB_CONNECT();
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    $tmp = mysqli_query($con,"UPDATE product SET usrdel=1 WHERE tag='$id'");
  }
    ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Modal confirmation</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        Cancel: function() {
          $( this ).dialog( "close" );
          window.open("index.html","_self");
        }
      }
    });
  } );
  </script>
  <script type="text/javascript">
  var auto_refresh = setInterval( function() { $('#should-delete').load('checkdelreq.php?tag=<?php echo $id?>'); }, 1000); // refreshing after every 15000 milliseconds
</script>

</head>
<body>
<div id="should-delete">
</div>
<div id="dialog-confirm" title="Delete item?">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>
</body>
</html>
