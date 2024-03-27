<?php
session_start();
$email_check = '';
if (isset($_SESSION['email_check'])) {
  $email_check = 'Email already exists';
  unset($_SESSION['email_check']);
}

$title = 'Registration Page';

include('../partials/header.php') 
?>

<body>


  <!-- sign-up  -->
  <div class="container login-form">

    <div class="row  justify-content-center g-1 gap-2">

      <div class="col col-sm-12 col-lg-7 form-img">
        <img src="../assets/images/Registration/Group 1597882533 (1).png" class="img-fluid" alt="..." height="90%" width="90%">
      </div>

      <div class="col col-sm-12 col-lg-4 form">

        <form action="../auth/registration.php" method="post">

          <div class="d-flex justify-content-center align-items-center flex-column">

            <h3 class=" fs-2 fw-bold">Signup to your account</h3>

            <div class="mb-3">
              <label for="fname" class="form-label pt-4 text-secondary fw-bold fs-6">First
                Name</label>

              <div class="login-input border d-flex p-2 align-items-center">
                <img src="../assets/images/Registration/Vector.png" class=" login-logo mx-1" alt="" height="21" width="25">
                <input type="text" name="fname" class="form-control d-block fs-5  rounded-0  input border border-0" id="firstName" value="<?php echo $fname ?>" placeholder="Johan">
              </div>
              <span class="error text-danger"><?php echo $fnameErr ?></span>
            </div>

            <div class="mb-3">
              <label for="lname" class="form-label  text-secondary fw-bold fs-6">Last
                Name</label>

              <div class="login-input border d-flex p-2 align-items-center">
                <img src="../assets/images/Registration/Vector.png" class=" login-logo mx-1" alt="" height="21" width="25">
                <input type="text" class="form-control d-block fs-5  rounded-0  input border border-0" id="lastName" name="lname" placeholder="Deo" value="<?php echo $lname ?>">
              </div>
              <span class="error text-danger"><?php echo $lnameErr ?></span>

            </div>

            <div class="mb-3">
              <label for="email" class="form-label text-secondary fw-bold fs-6">E-mail</label>
              <div class="login-input border d-flex p-2 align-items-center">
                <img src="../assets/images/login/Suche.png" class=" login-logo mx-1" alt="" height="21" width="25">
                <input type="text" class="form-control d-block fs-5  rounded-0  input border border-0" id="exampleInputEmail13" name="email" placeholder="example.com" value="<?php echo $email ?>">
              </div>
              <span class="error text-danger"><?php echo $emailErr; ?></span>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label text-secondary fw-bold fs-6">Password</label>
              <div class="login-input border d-flex p-2 align-items-center">
                <img src="../assets/images/login/Suche (1).png" class=" login-logo mx-1" alt="" height="14" width="26">
                <input type="password" class="form-control d-block fs-5 rounded-0  input border border-0" name="password" placeholder="Enter passwords" value="<?php echo $password ?>">
                <img src="../assets/images/login/Suche (2).png" class="ms-auto ps-2" alt="">
              </div>
              <span class="error text-danger"><?php echo  $passwordErr; ?></span>
            </div>
            <div class="mb-3">
              <label for="country" class="form-label  text-secondary fw-bold fs-6">Country</label>

              <div class="login-input border d-flex p-2 align-items-center">
                <img src="../assets/images/Registration/Vector (1).png" class=" login-logo mx-1" alt="" height="21" width="25">
                <select class="form-select border-0 fs-5" aria-label="Default select example" name="country">
                  <option value="">Select your country</option>
                  <?php foreach ($countryArr as $countryOpt) { ?>
                    <option value='<?= $countryOpt ?>' <?php echo ($_POST['country'] == $countryOpt) ? "selected" : '' ?>><?= $countryOpt ?></option>
                  <?php } ?>
                </select>
              </div>
              <span class="error text-danger"><?php echo  $countryErr; ?></span>
            </div>

            <div class="mb-1">
              <label for="gender" class="form-label  text-secondary fw-bold fs-6">Gender</label>

              <div class="login-input d-flex gap-2">
                <input class="form-check-input" type="radio" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> name="gender" value="male" id="flexRadioDefault1">
                <label class="form-check-label text-secondary fw-bold fs-6" for="flexRadioDefault1">
                  Male
                </label>
                <input class="form-check-input ms-2" type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female" id="flexRadioDefault12">
                <label class="form-check-label text-secondary fw-bold fs-6" for="flexRadioDefault1">
                  Female
                </label>
              </div>
              <span class="error text-danger"><?php echo  $genderErr; ?></span>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label  text-secondary fw-bold fs-6">Hobbies</label>
              <div class="login-input d-flex gap-4">
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" <?php echo isset($_POST['hobbies']) && in_array("Listening to music", $_POST['hobbies']) ? "checked" : '' ?> value="Listening to music" id="flexCheckDefault1">
                    <label class="form-check-label text-secondary fw-bold" for="flexCheckDefault">
                      Listening to music
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" <?php echo isset($_POST['hobbies']) && in_array("Dancing", $_POST['hobbies']) ? "checked" : '' ?> value="Dancing" id="flexCheckDefault2">
                    <label class="form-check-label text-secondary fw-bold" for="flexCheckDefault">
                      Dancing
                    </label>
                  </div>
                </div>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" <?php echo isset($_POST['hobbies']) && in_array("Watching to movies", $_POST['hobbies']) ? "checked" : '' ?> value="Watching to movies" id="flexCheckDefault3">
                    <label class="form-check-label text-secondary fw-bold" for="flexCheckDefault">
                      Watching to movies
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" value="Singing" id="flexCheckDefault4" <?php echo isset($_POST['hobbies']) && in_array("Singing", $_POST['hobbies']) ? "checked" : '' ?>>
                    <label class="form-check-label text-secondary fw-bold" for="flexCheckDefault">
                      Singing
                    </label>
                  </div>
                </div>
              </div><br>
              <span class="error text-danger"><?php echo  $hobbiesErr ?></span>
            </div>


            <div class="mb-3 form-check pt-3 pb-3">
              <input type="checkbox" class="form-check-input rounded-1 p-2 border border-2 border-secondary" id="exampleCheck18">
              <label class="form-check-label text-secondary fw-bold fs-6 lh-base ps-1 pt-1" for="exampleCheck1">I have
                read the <a href="./forms/login.html" class="link-dark link-offset-2 link-underline-opacity-50 link-underline-secondary">Terms
                  & Conditions</a>
              </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary rounded-0 btn-lg login-form-btn rounded-1 form-btn fw-bold border-0">Sign
              Up</button>
            <button type="button" class="btn text-black fw-bold fs-5 btn-outline-secondary rounded-1 mt-3 btn-lg form-btn">
              <img src="../assets/images/login/icons8-google-48.png" alt="" height="28">
              Continue
              with Google
            </button>
            <div class="pt-3 ">
              <p class="text-black fw-bold fs-5">Don't have an account yet? <a href="/auth/login.php" class="link-primary link-offset-2 fw-bold link-underline-opacity-0">Sign In</a></p>
            </div>
          </div>

        </form>

      </div>

    </div>

  </div>


  <!-- sign-up  -->

  <?php include('../partials/footer.php') ?>

  <!-- <script>
    function prevent() {
      window.history.forward()
    };
    setTimeout(prevent, 0);
    window.onunload = function() {
      null
    };
  </script> -->

</body>