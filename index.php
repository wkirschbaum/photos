<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/photos.css">
    <link href="/css/lightbox.min.css" rel="stylesheet">
  </head>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data" class="dropzone">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>

    <hr />

    <?php
      $dirname = "photos/";
      $images = glob($dirname."*.{gif,png,jpg,jpeg}", GLOB_BRACE);
      foreach($images as $image) {
        include("_photo.php");
      }
    ?>
    <script src="/js/lightbox-plus-jquery.min.js"></script>
    <script src="/js/dropzone.js"></script>
    <script>
      lightbox.option({
        'resizeDuration': 100,
        'wrapAround': true,
        'fitImagesInViewport': true,
      })
    </script>
  </body>
</html>
