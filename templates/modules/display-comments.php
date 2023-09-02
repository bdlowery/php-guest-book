<?php
//Store current time so it can be compared with the expiry time in the json.
$time = new DateTimeImmutable();

$timezone = $time->setTimezone(new DateTimeZone('America/New_York'));
$currentTime = $timezone->format('Y-m-d H:i:s');

//Get access to all of the comments
$comments = array_reverse(getComments()["items"]);
?>
<ol class="comments-list">
  <?php foreach ($comments as $id => $comment) { ?>
    <li class="comment-group">
      <div class="comment-details">
        <span class="name"><?= $comment["name"]; ?></span>
        <span class="posted quiet-voice"><?= $comment["prettyDate"] ?></span>
      </div>
      <ul>
        <li> <span class="comment"><?= $comment["comment"] ?></span>
          <?php if ($comment["expireDate"] > $currentTime) { ?>
            <ul class="comment-edit">
              <li class="edit-details">
                <a href="?page=delete&id=<?= $id ?>" class="delete">Delete</a>
                <a href="?page=edit&id=<?= $id ?>" class="edit">Edit</a>
              </li>
            </ul>
          <?php } ?>

        </li>
      </ul>
    </li>
  <?php } ?>
</ol>