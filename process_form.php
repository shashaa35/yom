<html>
  <head>
	<title>process_form</title>
  <head>
  <body>
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
		{	echo "<b><h1>Welcome Shashank</b>";
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

<form action=response.php>
    <input type="submit" name="add" value="press to add new details!!"/>
</form>
<form action=trainers.php>
    <input type="submit" name="view" value="press to view the trainers!!"/>
</form>    

<form action=logout.php>
    <input type='submit' value='logout'>
    </form>

  </body>
</html>