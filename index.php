<?php require("functions.php") ?>
<?php initializeDatabase() ?>
<?php require("router.php") ?>
<?php require("head.php") ?>

<?php include("header.php") ?>
<main class="site-content">
  <?php getRoute($route); ?>

  <!-- <section class="display-comments">
    <div class="inner-column">
      <?php // include("./templates/modules/display-comments.php") 
      ?>
    </div>
  </section> -->
</main>
<?php include("footer.php") ?>