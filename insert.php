<?php
include "connect.php";

	$title=$_GET["title"];
	$author=$_GET["author"];

	$sql="INSERT INTO book (title, author) VALUES ('".$title."','".$author."')";
	$mysqli->exec($sql);
	print ("Stored");
	print ("<a href=list.php> List </a>");

	$mysqli=null;
?>
