
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
             
            //$_SESSION['cityLat']=place.geometry.location.lat();
            //$_SESSION['cityLng']=place.geometry.location.lng();
             var lat=place.geometry.location.lat();
             var lng=place.geometry.location.lng();
             document.cookie="cityLat="+lat;
             document.cookie="cityLng="+lng;
          //  document.getElementById('cityLat').value = place.geometry.location.lat();
          //  document.getElementById('cityLng').value = place.geometry.location.lng();
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 

</script>

<HTML>
  <head>
	<title>response</title>
  <head>
  <body>
	<FORM ACTION=add.php METHOD=POST>
	   id:      <INPUT TYPE=TEXT NAME="id" required><BR>
     name:    <INPUT TYPE=TEXT NAME="name" required><BR>
	   phone:   <INPUT TYPE=TEXT NAME="phone" required><BR>
	   gender:  <input type="radio" name="gender" value="male" checked>Male
              <input type="radio" name="gender" value="female">Female<br>
	   email:   <input type=EMAIL name="email" ><br>
     location:<input id="searchTextField" type=TEXT name ="loc"  />
   	   
       <P><INPUT TYPE=SUBMIT VALUE="submit">
     </FORM>

		<form action=trainers.php>
		<input type='submit' value='view'>
		</form>
    <form action=logout.php>
    <input type='submit' value='logout'>
    </form>
  </body>
</html>


