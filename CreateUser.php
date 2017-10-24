<?php

$userName = $_POST['username'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "gartaviamunoz", 'P@$$word123', "gartaviamunoz");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('$userName')";

if($userName == NULL || $userName == "")
{
  printf("ERROR: Name was left blank");
}
else if($mysqli->query($query)){
  printf("Data added succesfully");
}
else {
  printf("ERROR: User id already exists!");
}

/* close connection */
$mysqli->close();

?>
