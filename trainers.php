<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script type='text/javascript'>
<?php
<<<<<<< HEAD
     //include 'admincheck.php';
      //require_once 'admincheck.php';
     require_once __DIR__ . '/db_connect.php';
     
=======
     require_once __DIR__ . '/db_connect.php';
>>>>>>> 310dfecae8c3d125b98fae5f97a5a686a84d68cb
     $db = new DB_CONNECT();
     $result1 = mysql_query("SELECT id,lat,lng FROM coach") or die(mysql_error());
     $latitude=array();
     $longitude=array();
     $id=array();
     
     while( $row1 = mysql_fetch_array($result1)){
        array_push($latitude, $row1['lat']);
        array_push($longitude,$row1['lng']);
        array_push($id,$row1['id']);
     }
<<<<<<< HEAD
    $lat = json_encode($latitude);
=======
     $lat = json_encode($latitude);
>>>>>>> 310dfecae8c3d125b98fae5f97a5a686a84d68cb
    $lng = json_encode($longitude);
    $id=json_encode($id);
echo "var latitudes = ". $lat . ";\n";
echo "var longitudes = ". $lng. ";\n";
echo "var ids = ". $id. ";\n";
?>
</script>

<script >
var myCenter=new google.maps.LatLng(latitudes[2],longitudes[2]);
function initialize()
{

var mapProp = {
  center:myCenter,
<<<<<<< HEAD
  zoom:10,
=======
  zoom:6,
>>>>>>> 310dfecae8c3d125b98fae5f97a5a686a84d68cb
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var len=latitudes.length;
while(len>=0)
{
var marker=new google.maps.Marker({
  position:new google.maps.LatLng(latitudes[len],longitudes[len]),
  label:ids[len],
  });
marker.setMap(map);
len--;
}
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<<<<<<< HEAD
<div id="googleMap" style="width:1000px;height:500px;"></div>
<form action=logout.php>
    <input type='submit' value='logout'>
    </form>
=======
<div id="googleMap" style="width:500px;height:380px;"></div>

>>>>>>> 310dfecae8c3d125b98fae5f97a5a686a84d68cb
</body>
</html>
