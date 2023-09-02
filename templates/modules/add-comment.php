<?php
//after form is submitted make the variables empty.
$name = "";
$comment = "";
$date = "";

//checks if the form is submitted.
if (isset($_POST["submit-button"])) {

  if(isset($_POST['submit-the-form'])) {
    echo 'form submitted!';
    $name = "";
    $comment = "";
    $date = "";
  }

  if (isset($_POST["name"]) && !isset($_POST['submit-the-form'])) {
    $name = htmlspecialchars(trim($_POST["name"]));
  }
  if (isset($_POST["comment"]) && !isset($_POST['submit-the-form'])) {
    $comment = htmlspecialchars(trim($_POST["comment"]));
  }

  //Check if the name and comment fields are filled in.
  if(!isset($_POST['submit-the-form'])) {
    if (!empty($name) && !empty($comment)) {
      $date = $_POST["date"];
      $expireDate = $_POST["expire-date"];
      $prettyDate = $_POST["pretty-date"];
      $newComment = [
        "name" => $name,
        "comment" => $comment,
        "date" => $date,
        "expireDate" => $expireDate,
        "prettyDate" => $prettyDate
      ];
      //$name and $comment have values, so add them to the json.
      addComment($newComment);
  }



    //redirect page to homepage to prevent resubmition.
    header('Location: ?page=home');
  } elseif (empty($name) && !isset($_POST['submit-the-form'])) {
    echo "enter name";
  } elseif (empty($comment) && !isset($_POST['submit-the-form'])) {
    echo "enter comment";
  }
}
?>

<?php include("./templates/components/form.php"); ?>
