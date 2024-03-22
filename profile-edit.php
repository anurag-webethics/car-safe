<?php
$title = 'Edit Profile';
include('../partials/header.php');
include('../partials/hero_banner.php');
?>

<!-- profile-form  -->

<div class="container border rounded-4 my-5 px-3 profile-form">

    <div class="profile-form-bg">
        <img src="../assets/images/profile-form-images/gallery.png" alt="">
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="d-flex profile-edit justify-content-between align-items-center flex-wrap py-5">
            <div class="d-flex profile-name gap-4 align-items-center flex-wrap ">
                <div class=" profile-form-img text-center">
                    <img src="../assets/images/profile-images/<?php echo $userProfileImg['profile_img']; ?>" alt="" width="100%" class="rounded-circle">
                </div>
                <div class="">
                    <h5 class="text-dark fw-bold"><?php echo $userDetail['fname'] . $userDetail['lname']; ?></h5>
                    <p><?php echo $userDetail['email'] ?></p>
                </div>
            </div>
            <div>
                <input type="file" name='profileImg' id="file-input" />
                <label class="btn btn-primary px-4 py-2 fw-bold" id="file-input-label" for="file-input">
                    Edit
                </label>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fs-6 fw-semibold">FIRST Name</label>
                    <input type="text" class="form-control bg-body-tertiary py-3 ps-3 fs-6" name="firstName" id="exampleInputEmail1" placeholder="Your first name" value='<?php echo $userDetail['fname']; ?>'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fs-6 fw-semibold">LAST Name</label>
                    <input type="text" name="lastName" class="form-control bg-body-tertiary py-3 ps-3 fs-6" id="exampleInputEmail11" placeholder="Your last name" value='<?php echo $userDetail['lname']; ?>'>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fs-6 fw-semibold">Country</label>
                    <select class="form-select fs-5 bg-body-tertiary py-3 ps-3 fs-6" aria-label="Default select example" name="country">
                        <?php foreach ($countryArr as $countryOpt) { ?>
                            <option value='<?= $countryOpt ?>' <?php echo ($userDetail['country'] == $countryOpt) ? "selected" : '' ?>><?= $countryOpt ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">

                    <label for="exampleInputEmail1" class="form-label fs-6 fw-semibold">Gender</label>
                    <div class="form-control bg-body-tertiary d-flex gap-2 py-3 ps-3 ">
                        <?php foreach ($genderType as $key => $userGender) { ?>
                            <input class="form-check-input" type="radio" <?php if ($userDetail['gender'] == $userGender) echo "checked"; ?> name="gender" value="<?php echo $userGender ?>" id="<?php echo "flexRadioDefault" . $key ?>">
                            <label class="form-check-label text-secondary fw-bold fs-6" for="<?php echo "flexRadioDefault" . $key ?>">
                                <?php echo $userGender ?>
                            </label>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fs-6 fw-semibold">Hobbies</label>
                <div class="form-contro d-flex  flex-md-row flex-column gap-4 form-control bg-body-tertiary py-3 ps-3 fs-6">
                    <?php foreach ($hobbiesType as $key => $userHobbies) {
                        $userDetailHobbies = explode(',', $userDetail['hobbies'])
                    ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" <?php if (in_array($userHobbies, $userDetailHobbies)) echo 'checked'; ?> name="hobbies[]" value='<?php echo $userHobbies ?>' id="<?php echo 'flexCheckDefault' . $key ?>">
                            <label class="form-check-label text-secondary fw-bold" for="<?php echo 'flexCheckDefault' . $key ?>">
                                <?php echo $userHobbies; ?>
                            </label>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>


        <div class="py-5 email-heading">
            <h5 class="text-dark fw-bold ">My email Address</h5>
            <div class="d-flex profile-name gap-3 align-items-center flex-wrap pt-3">
                <div class="rounded-circle bg-info-subtle profile-email text-center">
                    <img src="../images/profile-form-images/sms.png" alt="">
                </div>
                <div class="">
                    <p class="text-dark fs-5"><?php echo $userDetail['email'] ?></p>
                    <p class="text-secondary">1 month ago</p>
                </div>
            </div>
            <button type="button" class="btn bg-info-subtle text-primary px-4 py-2">+Add Email Address</button>
        </div>
        <button type="submit" name="update" class="btn btn-primary border-0 mb-4 fw-semibold rounded-0 btn-box">Update</button>
    </form>
</div>

<!-- profile-form -->

<?php include('../partials/footer.php'); ?>