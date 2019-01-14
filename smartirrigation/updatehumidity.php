<?php 



require_once('DB_connect.php'); 



$data = $_GET['data'];



if($data==1)

{

	$res = array('body' => "It's time to water it!",'title' =>  "1% Soil Moisture", 'sound' => "default");

	

	$firedatajson = json_encode(array('notification' => $res, 'to' => "c3GSGea4J8Q:APA91bE7Mv3JYYD5vwYM-zz-7NUE8bQi-01u_RSCxLY8_yonlCYhhjXcmSZh0V8C4ObOya3k4ux54BE6i_AhANlx34Fjg8vhkL7rQpWMNWA-nZFAs6cBNa-3fB54s3eIVZFNNMDzRtvD"), JSON_FORCE_OBJECT);

	

	/*$sql2 = "SELECT * FROM data";

	$firedata = mysqli_query($con,$sql2);

	$firedatajson = json_encode(mysqli_fetch_object($firedata)); */

	$url = "https://fcm.googleapis.com/fcm/send";

	$headers = array('Content-Type: application/json', 'Authorization: key=AIzaSyDloLT4bWA_N0eB47ycgdbDgfOemDQNVoA');

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');

	curl_setopt($curl, CURLOPT_POSTFIELDS, $firedatajson);

	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

	$response = curl_exec($curl);

	curl_close($curl);

	

	$Sql="UPDATE data SET Humidity = 1 ";   /* Time = ".$_GET["timestamp"]." , */



	mysqli_query($con,$Sql);

	

}



else

{

	

	$Sql="UPDATE data SET Humidity = 73 ";   /* Time = ".$_GET["timestamp"]." , */



	mysqli_query($con,$Sql);

}







mysqli_close($con);







?>