<?php

include('../config/db.php');

$album_name = $_POST['albumName'];
$album_image = $_POST['albumImage'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  try{
    $sql = "INSERT INTO album (user_id,album_name,album_image) VALUES('1','$album_name','$album_image')";
  // dd($conn);
  mysqli_query($conn,$sql);
  // if( mysqli_query($conn,$sql)){
  //   echo 'upload data successfully';
  // }
  // else{
  //  echo'Failed to upload image';
  // }

  //header('Location:../album_gallery.php');
  }
  catch(Exception $e){
    die("Error : <br />".$e->getMessage());
  }
}

include("../album_view.php");
