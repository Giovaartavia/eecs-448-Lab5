<?php

$query=mysqli_connect("mysql.eecs.ku.edu", "gartaviamunoz", 'P@$$word123', "gartaviamunoz");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
  
$result = mysqli_query($query,"SELECT * FROM Users");
echo "<h1> Table of users: <h1>";

echo "<table border='1'>
<tr>
<th>User</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "</tr>";
}
echo "</table>";
/* close connection */
$query->close();

?>
