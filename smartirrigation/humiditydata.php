<?php
 require_once('DB_connect.php');
 

 
$sql = "SELECT * FROM data";
 
$res = mysqli_query($con,$sql);


echo json_encode(mysqli_fetch_object($res));
 
mysqli_close($con);
 
?>