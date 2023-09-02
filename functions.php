<?php
function getRoute($route)
{
  include("./templates/pages/$route.php");
}

//if the database is empty, fill it with something.
function initializeDatabase()
{
  if (!file_get_contents('comments.json')) {
    $comments["items"] = [];
    $json = json_encode($comments);
    file_put_contents("comments.json", $json);
  }
}

//retrieve comments from the json file
//getComments()["stuff"] to access the items within the associative array
function getComments()
{
  $json = file_get_contents("comments.json");
  $jsonToAssociativeArray = json_decode($json, true);
  return $jsonToAssociativeArray;
}

function encodeComments($data)
{

  $json = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents("comments.json", $json);
}

//add comments to the json file
function addComment($comment)
{
  //generate a unique id for each comment.
  $bytes = random_bytes(5);
  $id = bin2hex($bytes);

  //decode json, and store the associative array in a variable.
  $comments = getComments();

  //$comment contains an associative array with name and comment keys.
  //insert them inside of a unique id.

  $comments["items"][$id] = $comment;
  encodeComments($comments);
}

function deleteComment($idToDelete)
{
  //get the associative array
  $comments = getComments();

  //remove the $id from the array.
  unset($comments["items"][$idToDelete]);

  //turn the associative array back into json.
  encodeComments($comments);
}

function editComment($idToEdit, $editedComment)
{
  //returns an associatve array of the json
  $comments = getComments();

  $comments["items"][$idToEdit] = $editedComment;
  encodeComments($comments);
}

function replyToComment($idToReply, $replyMessage)
{
  $comments = getComments();
  $comments["items"][$idToReply]["reply"] = $replyMessage;
  encodeComments($comments);
}

function redditColors()
{
  $colors = [
    "#D8BFD8", "#A0522D", "#483D8B", "#66CDAA", "#DEB887", "#FFE4E1", "#2E8B57", "#7B68EE", "#90EE90", "#228B22", "#FF7F50", "#EE82EE", "#A52A2A", "#4B0082", "#000000", "#AFEEEE", "#D3D3D3", "#9370DB", "#7FFFD4", "#7CFC00", "#40E0D0", "#FF6347", "#FFE4B5", "#20B2AA", "#FFF0F5", "#FF8C00", "#800000", "#98FB98", "#F08080", "#FFDAB9"
  ];

  $i = 1;
  foreach ($colors as $color) {
    echo "body[data-theme='new-reddit'] .comment-group:nth-of-type(" . count($colors) . "n+" . $i . ")::before { background-color: " . $color . "}";
    $i++;
  }
}

function smashingMagAvatars()
{
  for ($z = 1; $z < 15; $z++) {
    echo "body[data-theme='smashing-magazine'] .comment-group:nth-of-type(" . 15 . "n+" . $z . ")::before { background-image: url('https://www.smashingmagazine.com/images/userpics/avatarSM-" . $z . ".png'); }";
  }
}
