<?php

include('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $album_name = $_POST['albumName'];
  
  $album_image = $_FILES['albumImage']['name'];
  $tmp_file = $_FILES['albumImage']['tmp_name'];
  $folder = "../assets/images/album-images/" . $album_image;

  move_uploaded_file($tmp_file, $folder);

  $userID = $_SESSION['userId'];

  try {
    $sql = "INSERT INTO album (user_id,album_name,album_cover) VALUES ('$userID','$album_name','$album_image')";
    mysqli_query($conn, $sql);
    header("Location:../album-gallery.php");
  } catch (Exception $e) {
    die("Error : <br />" . $e->getMessage());
  }
}

include("../album-view.php");