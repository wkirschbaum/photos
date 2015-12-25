<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Spike Photos</title>
    <link rel="stylesheet" type="text/css" href="/css/photos.css">
    <link href="/css/lightbox.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
      $dirname = "photos/";
      $images = glob($dirname."*.{gif,png,jpg,jpeg}", GLOB_BRACE);
      foreach($images as $image) {
        include("_photo.php");
      }
    ?>
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/jquery.lazyload.js"></script>
    <script src="/js/lightbox.min.js"></script>
    <script>
      lightbox.option({
        'resizeDuration': 100,
        'wrapAround': true,
        'fitImagesInViewport': true,
      });

      $("img.lazy").lazyload();
    </script>
  </body>
</html>
