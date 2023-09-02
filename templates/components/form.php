<form method="POST">
  <?php
  $date = new DateTimeImmutable();

  $dateWithTimezone = $date->setTimezone(new DateTimeZone('America/New_York'));

  $expireDate = $dateWithTimezone->modify('+5 min');
  ?>

  <div class="field">
    <label for="name">Name</label>
    <input name="name" type="text" value="<?= $name; ?>">
  </div>

  <div class="field">
    <label for="comment">Comment</label>
    <textarea name="comment" rows="8" cols="50"><?= $comment; ?></textarea>
    <input type="hidden" value="<?= $dateWithTimezone->format('Y-m-d H:i:s'); ?>" name="date">
    <input type="hidden" value="<?= $dateWithTimezone->format('F j, Y, g:i a'); ?>" name="pretty-date">
    <input type="hidden" value="<?= $expireDate->format('Y-m-d H:i:s'); ?>" name="expire-date">
  </div>

  <div class="field submit-the-form">
    <label for="submit-the-form">Do you want to submit the form?</label>
    <input type="checkbox" name='submit-the-form'>
  </div>

  <button name="submit-button" type="submit">add comment</button>
</form>