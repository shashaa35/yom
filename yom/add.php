<html>
  <head>
	<title>response check page</title>
  </head>
  <body> 
	<?php
	 require_once __DIR__ . '/db_connect.php';
    
    $db = new DB_CONNECT();
	
	$id		=$_POST['id'];
	$name   =$_POST['name'];
	$phone	=$_POST['phone'];
	$loc	=$_POST['loc'];
	$lat    =$_POST['cityLat'];
	$lng	=$_POST['cityLng']; 
	$email	=$_POST['email'];
	if(isset($_POST['gender'])){
		if($_POST['gender']=='male')
			$gender='male';
		else
			$gender='female';
	} 
$result = mysql_query("INSERT INTO coach VALUES('$id','$name', '$phone','$gender','$loc','$lat','$lng','$email')");

if($result)
{
	print "<h2>data has been added </h2>";
	print "<form action=response.php>
		<input type='submit' value='add more'>
		</form>";
	print "<form action=trainers.php>
		<input type='submit' value='view map'>
		</form>";
}
else
	print $loc."<h2>error</h2>";

?> 

  </body>
</html

 