<?php
$date = $comment["date"];
$expireDate = $comment["expireDate"];
$prettyDate = $comment["prettyDate"];

if (isset($_POST["edit-button"])) {

  if (isset($_POST["name"])) {
    $newName = htmlspecialchars(trim($_POST["name"]));
  }
  if (isset($_POST["comment"])) {
    $newComment = htmlspecialchars(trim($_POST["comment"]));
  }

  if (!empty($newName) && !empty($newComment)) {
    $editedComment = [
      "name" => $newName,
      "comment" => $newComment,
      "date" => $date,
      "expireDate" => $expireDate,
      "prettyDate" => $prettyDate
    ];
  }

  editComment($id, $editedComment);
}
?>
<form method="POST">

  <div class="field">
    <label for="name">Name</label>
    <input name="name" type="text" value="<?= $comment["name"] ?>">
  </div>

  <div class="field">
    <label for="comment">Comment</label>
    <textarea name="comment" rows="8" cols="50"><?= $comment["comment"] ?></textarea>
  </div>

  <button name="edit-button" type="submit">update</button>
</form>