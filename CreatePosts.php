<?php

$authorName = $_POST['username'];
$post = $_POST['post'];

$query=mysqli_connect("mysql.eecs.ku.edu", "gartaviamunoz", 'P@$$word123', "gartaviamunoz");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$result = "INSERT INTO Posts (content, author_id) VALUES ('$post', '$authorName')";
$check = mysqli_query($query,"SELECT user_id FROM Users");
$isNameInDB = false;

if($post == NULL || $post == "")
{
  printf("ERROR: Post was left blank");
}
else 
  {
    while($row = mysqli_fetch_array($check)){
      if ($row['user_id'] == $authorName){
        if ($query->query($result)){
          printf("Data added succesfully");
          $isNameInDB = true;
        }
      }
    }
    if(!$isNameInDB){
      printf("ERROR: User does not exist!");
    }
  }
/*else {
  printf("ERROR: User id already exists!");
}*/

/* close connection */
$query->close();

?>
