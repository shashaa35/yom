<html>
  <head>
	<title>data addition page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  </head>
  <body> 
  <div class="text-right">
      <a href="logout.php" class="btn btn-danger">Log Out</a>
      </div>
	<?php
	 require_once __DIR__ . '/db_connect.php';
     require_once 'admincheck.php';
    $db = new DB_CONNECT();
	
	$id		=$_POST['id'];
	$name   =$_POST['name'];
	$phone	=$_POST['phone'];
	$loc	=$_POST['loc'];
	$lat    =$_COOKIE['cityLat'];
	$lng	=$_COOKIE['cityLng']; 
	$email	=$_POST['email'];
	if(isset($_POST['gender'])){
		if($_POST['gender']=='male')
			$gender='male';
		else
			$gender='female';
	} 
$result = mysql_query("INSERT INTO coach VALUES('$id','$name', '$phone','$gender','$loc','$lat','$lng','$email')")or die(print "<br>".mysql_error());

if($result)
{
	
	print "<div class='alert alert-success'>
  <strong>Success!</strong> Data has been successfully Added.</div>";
	print "<div class='btn-group-vertical'>
			<a href='response.php' class='btn btn-info'>Add more</a>
			<a href='trainers.php' class='btn btn-success'>View</a></div>";
}
else
	print "<div class='alert alert-danger'>ERROR</div>";

?> 
  </body>
</html
