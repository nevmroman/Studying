<?php
//connection to DB
include "config.php";

try{
	$mysqli=new PDO("mysql:host=$adress;dbname=book", $user,  $pass);

	$mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
