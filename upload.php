<?php
  $ds = DIRECTORY_SEPARATOR;
  $storeFolder = 'photos';

  if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
    $targetFile =  $targetPath. $_FILES['file']['name'];
    echo move_uploaded_file($tempFile, $targetFile);
  }
?>
