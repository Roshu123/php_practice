<html>
    <head>
	    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Login Page</h2>
        <a href="index.php">Click here to go back </a><br/><br/>
        <form action="checklogin.php" method="POST">
		 <div class="form-group">
           Enter Username: <input type="text" name="username" required="required" class="form-control"/> <br/>
		  </div>
		  <div class="form-group">
           Enter password: <input type="password" name="password" required="required" class="form-control" /> <br/>
		   </div>
           <input type="submit" value="Login"/>
        </form>
    </body>
</html>