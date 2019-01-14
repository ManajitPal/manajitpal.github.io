<?php
//checking if the script received a post request or not 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //Getting post data 
 $switch = $_POST['switch'];
 

 //If the values are not blank
 //Connecting to our database by calling dbConnect script 
 require_once('DB_connect.php');
 
 //Creating an SQL Query to insert into database 

 
 //This query is to check whether the switch is already in the same state or not 
 $sql = "SELECT * FROM toggle WHERE switch='$switch'";
 
 //If variable check has some value from mysqli fetch array 
 //That means the state already exist 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 //Checking check has some values or not 
 if(isset($check)){
 //If check has some value that means the state is same 
 echo 'The switch is already in the present state';
 }else{ 
 //If state not already exist 
 //Creating updating query 

 $sql = "UPDATE toggle SET switch='$switch'";
 
 //Trying to insert the values to db 
 if(mysqli_query($con,$sql)){
 //If inserted successfully 
 if($switch==1)
 {
	 echo "Plant watering turned ON";
 }
 else{
	 echo "Plant watering turned OFF";
 }

 }else{
 //In case any error occured 
 echo 'oops! Please try again!';
 }
 }
 //Closing the database connection 
 mysqli_close($con);
 }
else{
echo 'error';
}