<?php
//Store current time so it can be compared with the expiry time in the json.
$time = new DateTimeImmutable();
$currentTime = $time->format('Y-m-d H:i:s');
?>
<ol class="comments-list">
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
              <span class="delete"><a href="?page=delete&id=<?= $id ?>">Delete</a></span>
              <span class="edit"><a href="?page=edit&id=<?= $id ?>">Edit</a></span>
            </li>
          <?php } ?>
          </ul>
      </li>
    </ul>
  </li>
</ol>