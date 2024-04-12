<?php
$title = 'Profile';

include('./config/db.php');

include('./controller/helper.php');

$userDetail = getUserDetails($conn);

include('./partials/indexheader.php');

include('./partials/hero-banner.php');

// dd($userDetail);

?>

<!-- upload data  -->

<div class="container py-5">

    <div class="row row-cols-1 row-cols-md-3 g-4 flex-wrap detail-col">

        <div class="col-sm-6 col-md-12 col-lg-5 mb-3 mb-sm-0 detail-row">
            <div class="card bg-body-tertiary d-flex justify-content-center align-items-center py-5 h-100">
                <img src="./assets/images/<?php echo (isset($userDetail['profile_img'])) ? 'profile-images/'.$userDetail['profile_img'] : 'default.jpg'; ?>" alt="" class="rounded-circle" width="40%">
                <div class="card-body text-center">
                    <h2 class="text-dark fw-semibold"><?php echo $userDetail['fname'] . $userDetail['lname'] ?></h2>
                    <p class="fw-bold fs-5">Email- <?php echo $userDetail['email'] ?></p>
                    <p class=" fs-5">Phone- 259 875 69875</p>
                    <a href="./controller/edit-profile.php" class="link-light link-offset-2 link-underline-opacity-0">
                        <button type="button" class="btn btn-primary rounded-0 fs-5">Edit</button>
                    </a>
                </div>
            </div>
        </div>
    
        <div class="col-sm-6 col-md-12 col-lg-7 detail-row">
            <div class="card bg-body-tertiary p-5 h-100">
                <div class="row flex-wrap flex g-4">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 fs-5 lh-lg fw-semibold text-dark">First Name</div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-8 fs-5 lh-lg  fw-semibold text-dark"><?php echo $userDetail['fname'] ?></div>

                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 fs-5 lh-lg fw-semibold text-dark">Last Name</div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-8 fs-5 lh-lg  fw-semibold text-dark"><?php echo $userDetail['lname'] ?></div>

                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 fs-5 lh-lg fw-semibold text-dark">Gender</div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-8 fs-5 lh-lg  fw-semibold text-dark"><?php echo $userDetail['gender'] ?></div>

                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 fs-5 lh-lg fw-semibold text-dark">Country</div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-8 fs-5 lh-lg  fw-semibold text-dark"><?php echo $userDetail['country'] ?></div>

                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 fs-5 lh-lg fw-semibold text-dark">Hobbies</div>
                    <div class="col-6 col-sm-4 col-md-6 col-lg-8 fs-5 lh-lg  fw-semibold text-dark"><?php echo $userDetail['hobbies'] ?></div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- upload data  -->


<?php include('./partials/indexfooter.php') ?>