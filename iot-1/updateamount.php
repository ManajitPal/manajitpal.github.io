<?php 

require_once('DB_connect.php'); 

$data = $_GET['amount'];

$Sql="UPDATE offline_payment SET Amount = '$data' ";   /* Time = ".$_GET["timestamp"]." , */

mysqli_query($con,$Sql);

mysqli_close($con);

?>