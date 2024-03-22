<?php
$title = 'Album';
?>

<?php include('./partials/indexheader.php') ?>
<?php include('./partials/hero_banner.php') ?>

<!-- Album  -->

<div class="container py-5">
    <div class="text-end pb-3">
        <a href="./controller/album.php" class="link-light link-offset-2 link-underline-opacity-0">
            <button type="button" class="btn btn-primary text-end rounded-0 px-4 py-2">
                Add Album
            </button>
        </a>
    </div>

    <div class="container">
        <div class="row g-5">
            <div class="col-sm-6 mb-3  col-md-6 col-lg-4 mb-sm-0">
                <div class="card border-0">
                    <img src="../assets/images/album-images/Rectangle 516.png" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title pt-3 fw-bold"><?php echo $album_name; ?></h3>
                    </div>
                </div>
            </div>

            <!-- <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="../assets/images/album-images/Rectangle 516 (1).png" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title pt-3 fw-bold">Ego Trippin</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="../assets/images/album-images/Rectangle 516 (2).png" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title pt-3 fw-bold">Eliminator</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="../assets/images/album-images/Rectangle 623.png" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title pt-3 fw-bold">Nostalgia, Ultra</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="../assets/images/album-images/Rectangle 624.png" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title pt-3 fw-bold">Red River Rock</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="card border-0">
                    <img src="../assets/images/album-images/Rectangle 625.png" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title pt-3 fw-bold">Autobahn</h3>
                    </div>
                </div>
            </div> -->

        </div>
    </div>

</div>

<!-- Album  -->

<?php include('./partials/indexfooter.php') ?>