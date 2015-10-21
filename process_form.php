<html>
  <head>
	<title>process_form</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="text-right">
	    <a href="logout.php" class="btn btn-danger">Log Out</a>
	<?php 
		 $name  = $_POST['realname'];
		 $pass  = $_POST['mypassword'];
		
		$myfile="password.txt";
		$fh=fopen($myfile,'r');
		$data=fgets($fh);
		fclose($fh);
		$text=explode(":",$data);
		$pass=$pass."\n";
		if($pass===$text[1] && $name===$text[0]  )
		{	echo "<b><h1 class='text-center'>Welcome Shashank</b>";
			session_start();
			$_SESSION['name']=$name;
			$_SESSION['pass']=$pass;
		}
		else
			{
				echo "You dont have this access" ;
				header ("Location: /password_test");
			}
	?>
	</div>
	<br>
<div class="btn-group-vertical">
  <a href="response.php" class="btn btn-info">press to add new details!!</a>
  <a href="trainers.php" class="btn btn-success">press to view the trainers!!</a>
</div>

  </body>
</html>