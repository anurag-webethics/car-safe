<?php
$title = 'Images';
include('./config/db.php');
include('./controller/helper.php');
$albumImages = getAlbumImages($conn, $_GET['album_id']);
?>

<?php include('./partials/header.php') ?>

<?php include('./partials/hero_banner.php') ?>

<!-- Album  -->

<div class="container py-5">
    <div class="text-end pb-3">
        <a href="./controller/images.php?album_id=<?php echo $_GET['album_id']; ?>" class="link-light link-offset-2 link-underline-opacity-0">
            <button type="button" id="file-input-label" for="file-input" class="btn btn-primary text-end rounded-0 px-4 py-2">
                Add Images
            </button>
        </a>
    </div>

    <div class="row g-5">
        <?php while ($row = mysqli_fetch_row($albumImages)) {  ?>
            <div class="col-sm-6 mb-3  col-md-6 col-lg-4 mb-sm-0 ">
                <div class="card border-0">
                    <img src="<?php echo './assets/images/album-images/' . $row[0] ?>" alt="...">
                </div>
            </div>
        <?php } ?>

    </div>

</div>

<!-- Album -->


<?php include('./partials/footer.php') ?>