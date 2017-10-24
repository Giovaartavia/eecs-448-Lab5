<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "gartaviamunoz", 'P@$$word123', "gartaviamunoz");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if (empty($_POST['checkboxOption'])){
  echo("No value was selected so no action was performed.");
}
else{
  echo "<h2> The following entries were deleted: <h2>";
  echo "<table border='1'>";
  echo "<tr> <td> <b>Author</b> </td><td> <b>Post</b> </td>";
  foreach($_POST['checkboxOption'] as $selected){

    $variables = "SELECT author_id, content FROM Posts WHERE post_id = '$selected'"; //Used to print to the user what was deleted

    $result = $mysqli->query($variables);
    $row = $result->fetch_assoc();

    $query = "DELETE FROM Posts WHERE post_id= '$selected'"; //Deletes using the id
    if($mysqli->query($query)){
      echo "<tr>";
      echo "<td>" . $row['author_id'] . "</td><td>" . $row['content'] . "</td>";
    }
  }
}
echo "</table>";
$mysqli->close();
?>
