<?php
include "connect.php";

  $id=$_GET["id"];
  $title=$_GET["title"];
  $author=$_GET["author"];
  
  $sql=("UPDATE book SET title ='$title', author ='$author' WHERE id=$id");
  $res = $mysqli->query($sql);
  
    if ($res) 
    {
      print ("Updated ");
      print ("<a href=list.php> List </a>");  
    }
    else
    {
      print("Error ");
    }
?>
