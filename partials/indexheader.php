<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/album.css">
  <link rel="shortcut icon" href="./assets/images/Group 46.png" type="image/x-icon">

</head>

<body>

  <nav class="navbar navbar-expand-lg nav bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><img src="./assets/images/logo.png" class="nav-logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-primary menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 justify-content-center  mb-lg-0">
          <li class="nav-item fs-5 fw-medium">
            <a class="nav-link text-light" href="./index.php">Home</a>
          </li>
          <li class="nav-item fs-5 fw-medium">
            <a class="nav-link text-light" href="#">About Us</a>
          </li>
        </ul>
        <div class="button-group d-flex gap-2">

          <?php if (empty($_SESSION['email'])) { ?>
            <a href="./auth/login.php" class="link-light link-offset-2 link-underline-opacity-0"><button type="button" class="btn rounded-0 text-white login nav-btn">Login</button></a>
            <a href="./auth/registration.php" class="link-light link-offset-2 link-underline-opacity-0"><button type="button" class="btn rounded-0 text-white sign nav-btn">Signup</button></a>
          <?php } ?>

          <?php if (!empty($_SESSION['email'])) { ?>
            <a href="../profile_view.php" class="link-light link-offset-2 link-underline-opacity-0"><button type="button" class="btn rounded-0 text-white profile nav-btn"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Profile</button></a>
            <a href="./auth/logout.php" class="link-light link-offset-2 link-underline-opacity-0"><button type="button" class="btn rounded-0 text-white login nav-btn">Logout</button></a>
          <?php } ?>

        </div>
      </div>

    </div>
  </nav>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    if(window.location.href == 'http://car.check.in/' || window.location.href == 'http://car.check.in/index.php' ){
     let nav =  document.querySelector('nav');
      nav.classList.remove('bg-dark');
    }
  </script>

</body>

</html>