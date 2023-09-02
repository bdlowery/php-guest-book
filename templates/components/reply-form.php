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