<?php

$authorName = $_POST['author'];

$query=mysqli_connect("mysql.eecs.ku.edu", "gartaviamunoz", 'P@$$word123', "gartaviamunoz");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
  
$result = mysqli_query($query,"SELECT * FROM Posts WHERE author_id = '$authorName'");
echo "<h1> Posts: <h1>";

echo "<table border='1'>
<tr>
<th>" . $authorName . "</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['content'] . "</td>";
echo "</tr>";
}
echo "</table>";

$query->close();

?>
