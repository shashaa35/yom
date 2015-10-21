<?php 
		session_start();
		$name=$_SESSION['name'];
		$pass=$_SESSION['pass'];
		$myfile="password.txt";
		$fh=fopen($myfile,'r');
		$data=fgets($fh);
		fclose($fh);
		$text=explode(":",$data);

		if($pass===$text[1] && $name===$text[0]  )
			echo "<b><h1 class='text-center'>Welcome Shashank</b>";
		else
			{
				echo "You dont have this access" ;
				header ("Location: /password_test");
			}
	?>