<html>
  <head>
	<title>Password test, page 2</title>
  <head>


  <body> 
<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request

 */
	 require_once __DIR__ . '/db_connect.php';
     
session_start();

    if($_SESSION['name']==NULL)
        header('Location: index.php');
     $name1=$_SESSION['name'];
     $namec=$_COOKIE['name'];
     echo "hello $namec";
    $db = new DB_CONNECT();

    
$result = mysql_query("SELECT * FROM coach") or die(mysql_error());
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["products"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $product = array();
        $product["name"] = $row["name"];
        $product["age"] = $row["age"];
        $product["sex"] = $row["sex"];
        $product["desc"] = $row["desc"];
        $product["pic"] = $row["pic"];
 		$product["longitude"]=$row["longitude"];
 		$product["location"] =$row["location"];
 		
        // push single product into final response array
        array_push($response["products"], $product);
        
        //echo $row;
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} 
if($result)
	print "<h2>data has been FETCHED </h2>";
else
	print "<h2>error</h2>";

?> 

  </body>
</html

 




 <?php
     require_once __DIR__ . '/db_connect.php';
     $db = new DB_CONNECT();
     $result = mysql_query("SELECT lat,lng FROM coach") or die(mysql_error());
     $latitude=array();
     $longitude=array();
     
     while( $row1 = mysql_fetch_array($result)){
        array_push($latitude, $row1['lat']);
     }
     
     while( $row2 = mysql_fetch_array($result)){
        array_push($longitude, $row2['lng']);
     }
if($result)
        print "<h2>data has been FETCHED </h2>";
else
    print "<h2>error</h2>";

?>