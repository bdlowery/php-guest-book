<?php
//retrieve value after &id=____
$id = $_GET["id"];

//open the database
//check to see if id in url matches id in database
$comments = getComments()["items"];
foreach ($comments as $commentId => $comment) {
  if ($id == $commentId) {
    deleteComment($id);
    header('Location: ?page=home');
  } else {
    header('Location: ?page=home');
  }
}
