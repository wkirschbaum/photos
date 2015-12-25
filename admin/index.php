<?php include('../auth.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Happy Spike Photos</title>
    <link rel="stylesheet" type="text/css" href="/css/photos.css">
    <link href="/css/lightbox.min.css" rel="stylesheet">
    <link href="/css/dropzone.min.css" rel="stylesheet">
  </head>
  <body>
    <form class="dropzone" enctype="multipart/form-data" action="upload.php" method="POST"></form>

    <hr />

    <?php
      $dirname = "../photos/";
      $images = glob($dirname."*.{gif,png,jpg,jpeg}", GLOB_BRACE);
      foreach($images as $image) {
        include("../_photo.php");
      }
    ?>
    <script src="/js/lightbox-plus-jquery.min.js"></script>
    <script src="/js/dropzone.min.js"></script>
    <script>
      lightbox.option({
        'resizeDuration': 100,
        'wrapAround': true,
        'fitImagesInViewport': true,
      })
    </script>
  </body>
</html>
