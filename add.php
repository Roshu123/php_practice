<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$details = $_POST['details'];
		$time = strftime("%X");//time
		$date = strftime("%B %d, %Y");//date
		$decision ="no";
		$con=mysqli_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysqli_select_db($con,"trial") or die("Cannot connect to database"); //Connect to database
		foreach($_POST['public'] as $each_check) //gets the data from the checkbox
 		{
 			if($each_check !=null ){ //checks if the checkbox is checked
 				$decision = "yes"; //sets teh value
 			}
 		}
		
		mysqli_query($con,"INSERT INTO list (details, date_posted, time_posted, public) VALUES ('$details','$date','$time','$decision')"); //SQL query
		header("location: home.php");
	}
	else
	{
		header("location:home.php"); //redirects back to hom
	}
?>