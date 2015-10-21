
<html lang="en">
  <head>
	<title>log in</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  </head>
  
  <body>
  	<div class="container">
  <h2 >LOG IN</h2>
  <form class="form-horizontal " ACTION=process_form.php role="form" method=POST>
    <div class="form-group ">
      <label class="control-label col-sm-2" for="realname">Username:</label>
      <div class="col-sm-5 ">
        <input type="text" class="form-control" id="realname" name="realname" placeholder="Enter username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mypassword">Password:</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" name="mypassword" placeholder="Enter paasword">
      </div>
    </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
  </body>
</html>


