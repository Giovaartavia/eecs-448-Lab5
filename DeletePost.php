<?php

mysql_connect('mysql.eecs.ku.edu', 'gartaviamunoz', 'P@$$word123');
mysql_select_db('gartaviamunoz');

$sql = "SELECT * FROM Posts";
$result = mysql_query($sql);

echo "<h1> Delete Post: </h1>";
echo "<form action='DeletePost2.php' name='author' method = 'post'>";
echo "<table border='1'>";
echo "<tr> <td> <b> Delete? </b> </td><td> <b>Author</b> </td><td> <b>Post</b> </td>";
while ($row = mysql_fetch_array($result)) {
    echo "<tr><td><input type = 'checkbox' name = 'checkboxOption[]' option value='" . $row['post_id'] ."'>" . "</td><td>" .$row['author_id'] . "</td><td>" . $row['content'] . "</td>" . "</input>" . "<br>";
}

echo "</table>";
echo "<input type='submit'/>";

echo "</form>";

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//$mysqli->close();

?>
