<?php

include "config.php";
include "connect.php";

	$id=$_GET["id"];
	$sql="DELETE FROM book WHERE id=$id";
	$mysqli->exec($sql);
	print ("is removed");
	print ("<a href=list.php> List </a>");
?>
