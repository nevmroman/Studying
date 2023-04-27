<?php

include "connect.php";

print ("<a href=form.html> Add new </a> <br>");

  try {
  $i=0;
  $stmt = $mysqli->prepare("SELECT id, author, title FROM book");
  $stmt->execute();
  
while ($row = $stmt->fetch()) {
    printf("%s, %s", $row["title"], $row["author"]);
	$id = $row["id"];
	print ("<a href=remove.php?id=$id> Remove</a>". ' ');
	print ("<a href=edit.php?id=$id>Edit</a>"."<br/>");
}
    $i++;
    if($i==3)
    {
      $i=0;
      echo ("<br>");
    }
  }
   catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  }
?>
