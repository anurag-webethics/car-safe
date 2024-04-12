<?php
function getUserDetails($conn)
{
  try {
    $userId = $_SESSION['userId'];
    $query = "SELECT * FROM users WHERE id = '$userId'";

    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
  } catch (\Exception $e) {
    echo die('Error:' . $e->getMessage());
  }

  mysqli_close($conn);
}

function getAlbum($conn)
{
  try {
    $userId = $_SESSION['userId'];
    $query = "SELECT * FROM album WHERE user_id = '$userId'";
    $result = mysqli_query($conn, $query);
    return $result;
  } catch (\Exception $e) {
    echo die('Error:' . $e->getMessage());
  }

  mysqli_close($conn);
}


function getAlbumImages($conn, $albumId)
{
  try {
    $query = "SELECT id,images FROM images WHERE album_id = '$albumId' ORDER BY id DESC";

    $result = mysqli_query($conn, $query);
    return $result;
  } catch (\Exception $e) {
    echo die('Error:' . $e->getMessage());
  }

  mysqli_close($conn);
}
