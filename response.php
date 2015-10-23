<?php
require 'admincheck.php';
?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
             var lat=place.geometry.location.lat();
             var lng=place.geometry.location.lng();
             document.cookie="cityLat="+lat;
             document.cookie="cityLng="+lng;
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 

</script>
<HTML>
  <head>
	<title>response</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="text-right">
      <a href="logout.php" class="btn btn-danger">Log Out</a>
      </div>
	
  <form class="form-horizontal " ACTION=add.php role="form" method=POST enctype="multipart/form-data">
    <div class="form-group ">
      <label class="control-label col-sm-2" >id:</label>
      <div class="col-sm-5 ">
        <input type="text" class="form-control" name="id" required>
      </div>
    </div>
    <div class="form-group ">
    <label class="control-label col-sm-2" >name:</label>
      <div class="col-sm-5 ">
        <input type="text" class="form-control" name="name" required>
      </div>
    </div>
    <div class="form-group ">
    <label class="control-label col-sm-2" >phone:</label>
      <div class="col-sm-5 ">
        <input type="text" class="form-control" name="phone">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" >Gender:</label>
    <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
    <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" >email:</label>
      <div class="col-sm-5 ">
        <input type="email" class="form-control" name="email">
      </div>
    </div>
    <div class="form-group ">
    <label class="control-label col-sm-2" >location:</label>
      <div class="col-sm-5 ">
        <input id="searchTextField" type="text" class="form-control" name="loc">
      </div>
    </div>
    <div class="form-group ">
    <label class="control-label col-sm-2" >Select image to upload:</label>
      <div class="col-sm-5 ">
        <input  type="file" class="form-control" name="imageUpload">
      </div>
    </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
    <div class="text-center">
      <a href="trainers.php" class="btn btn-success">VIEW!</a>
      </div>
  </body>
</html>