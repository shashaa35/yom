<?php

session_start();

$_SESSION['name']="admin";
$_SESSION['pass']="admin";

echo "session working";
?>