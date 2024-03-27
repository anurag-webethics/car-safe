<?php
error_reporting(E_ALL);

include('../config/db.php');
include('../controller/helper.php');

$countryArr = ['India', 'U.S.A', 'China', 'Sri Lanka', 'Pakistan', 'South Korea'];
$genderType = ['male', 'female'];
$hobbiesType = ['Listening to music', 'Dancing', 'Watching to movies', 'Singing'];

$userDetail = getUserDetails($conn);
$userProfileImg = getUserProfileImg($conn);
$updateUserId = $_SESSION['userId'];

try {
  if (isset($_POST['update'])) {

    if (!empty($_FILES['profileImg']['name'])) {
      $fileName = $_FILES['profileImg']['name'];
      $tempName = $_FILES['profileImg']['tmp_name'];
      $folder = "../assets/images/profile-images/" . $fileName;
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
      $allowTypes = ['jpg', 'png', 'jpeg'];

      move_uploaded_file($tempName, $folder);
      $lastInsertId = 0;

      if (in_array($fileType, $allowTypes)) {

        if (empty($userProfileImg)) {
          $imageSql = "INSERT INTO users (profile_img) VALUES ('$fileName')";
          mysqli_query($conn, $imageSql);
          $lastInsertId = mysqli_insert_id($conn);
        } else {
          $lastInsertId = $userProfileImg['id'];
        }

        if ($lastInsertId) {
          $updateImageSql = "UPDATE users SET profile_img = '$fileName' WHERE id = '$lastInsertId'";

          mysqli_query($conn, $updateImageSql);
        }
      }
    }
  }
} catch (\Exception $e) {
  die("Error:" . $e->getMessage());
}



if (isset($_POST['update'])) {

  $updateFirstName = $_POST['firstName'];
  $updateLastName = $_POST['lastName'];
  $updateCountry = $_POST['country'];
  $updateGender = $_POST['gender'];
  $updateHobbies = implode(',', $_POST['hobbies']);

  $sql = "UPDATE users SET fname ='$updateFirstName', lname= '$updateLastName', country= '$updateCountry', gender = '$updateGender', hobbies = '$updateHobbies' WHERE id = '$updateUserId' ";

  if (mysqli_query($conn, $sql)) {
    header("Location:../profile_view.php");
  }

  mysqli_close($conn);
}

include('../profile-edit.php');
