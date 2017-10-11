<html>
	<head>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <title>My first PHP website</title>
	</head>
	<body>
		<h2>Registration Page</h2>
		<a href="index.php">Click here to go back</a><br/><br/>
		<form action="register.php" method="post">
		   <div class="form-group">
			Enter Username: <input type="text" name="username" required="required" class="form-control"/> <br/>
			</div>
			<div class="form-group">
			Enter Password: <input type="password" name="password" required="required" class = "form-control"/> <br/>
			</div>
			<input type="submit" value="Register" />
		</form>
	</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$servername = "localhost";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$database = "trial";
	//print 'hello'.$username;
    $bool = true;
	//$con=mysqli_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	$con = new mysqli($servername,"root","",$database);
	//mysqli_select_db($con,"trial") or die("Cannot connect to database"); //Connect to database
	$query = mysqli_query($con,"Select * from login"); //Query the users table
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		
		mysqli_query($con,"INSERT INTO login (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
	}
}
?>