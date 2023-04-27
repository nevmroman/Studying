<?php

include "connect.php";
  
  $id=$_GET["id"];
  $stmt = $mysqli->query("SELECT * FROM book where id=$id");

  while ($newArray=$stmt->fetch()){
  $id=$newArray['id'];
  $name=$newArray['author'];
  $title=$newArray['title'];
    print ("<FORM METHOD=get  ACTION='update.php'>");
        print("<INPUT TYPE='hidden' NAME='id' value='$id'>");
        print("Title: <INPUT TYPE='text' NAME='title' value='$title'>");
        print ("<br>Author: <INPUT TYPE='text' NAME='author' value='$name' > ");
        print ("<br> <INPUT TYPE='submit' VALUE='Update'>");
        print   ("<INPUT TYPE='reset' VALUE='Reset'>");
    print ("</FORM>");
  }
?>
