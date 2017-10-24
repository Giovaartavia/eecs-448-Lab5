<?php

mysql_connect('mysql.eecs.ku.edu', 'gartaviamunoz', 'P@$$word123');
mysql_select_db('gartaviamunoz');

$sql = "SELECT DISTINCT author_id FROM Posts"; //Distinct used so that values are not repeated
$result = mysql_query($sql);
echo "<h1>View user posts: </h1>";

echo "<form action='ViewUserPosts2.php' name='author' method = 'post'>";
echo "<select name = 'author'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['author_id'] ."'>" . $row['author_id'] ."</option>";
}

echo "</select>";
echo "<br><br><input type='submit'>";
echo "</form>";

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>
