<?php
$title = 'Album';

include('./config/db.php');
include('./controller/helper.php');

$userAlbum = getAlbum($conn);

include('./partials/indexheader.php');
include('./partials/hero-banner.php');
?>

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
            <?php while ($row = mysqli_fetch_assoc($userAlbum)) {  ?>
                <div class="col-sm-6 mb-3  col-md-6 col-lg-4 mb-sm-0">
                    <a href="./image_gallery.php?album_id=<?php echo $row['id']; ?>" class="link-light link-offset-2 link-underline-opacity-0">
                        <div class="card border-0">
                            <img src="<?= (!empty($row['album_cover'])) ? './assets/images/album-images/' . $row['album_cover'] : './assets/images/album-images/404.jpg' ?>" alt="...">

                            <div class="card-body text-center">
                                <h3 class="card-title pt-3 fw-bold"><?php echo $row['album_name']; ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php  } ?>

        </div>
    </div>

</div>

<!-- Album  -->

<?php include('./partials/indexfooter.php') ?>