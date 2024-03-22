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

function getUserProfileImg($conn)
{
  try {
    $userId = $_SESSION['userId'];
    $query = "SELECT * FROM images WHERE user_id = '$userId' AND profile_img != 'NULL'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
  } catch (\Exception $e) {
    echo die('Error:' . $e->getMessage());
  }

  mysqli_close($conn);
}
