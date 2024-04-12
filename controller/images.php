<?php

include('../config/db.php');

$error = '';

if (isset($_POST['upload'])) {
  if (empty($_POST['album_images'])) {
    $error = 'Please select the image';
  }
}

$user_Id = $_SESSION['userId'];
$album_id = $_GET['album_id'];

try {
  if (!empty($_FILES['album_image']['name'][0])) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $fileCount = count($_FILES['album_image']['name']);
      for ($i = 0; $i < $fileCount; $i++) {

        $imageName = $_FILES['album_image']['name'][$i] . time();
        $tempName = $_FILES['album_image']['tmp_name'][$i];
        $folder = '../assets/images/image-gallery/' . $imageName;
        move_uploaded_file($tempName, $folder);

        $sql = "INSERT INTO images (user_id,images,album_id) VALUES ('$user_Id', '$imageName' , '$album_id')";
        mysqli_query($conn, $sql);
        header("Location:../image-gallery.php?album_id=" . $album_id);
      }
    }
  }
} catch (\Exception $e) {
  die('Error : ' .  $e->getMessage());
}


include('../image-view.php');
