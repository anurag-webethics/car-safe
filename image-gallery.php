<?php
error_reporting(E_ALL);
$title = 'Images';
include('./config/db.php');
include('./controller/helper.php');

$albumImages = getAlbumImages($conn, $_GET['album_id']);

$albumId = $UseralbumId['id'];
$album_id = $_GET['album_id'];
$userId  = $_SESSION['userId'];

include('./partials/indexheader.php');

include('./partials/hero-banner.php');

try {
    if (isset($_GET['image_id']) && isset($_GET['image_name'])) {
        $image_id = $_GET['image_id'];
        $image_name = $_GET['image_name'];
        $sql = "DELETE FROM images WHERE id = '$image_id'";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        unlink('./assets/images/image-gallery/' . $image_name);
        echo "<script>window.location.href='image-gallery.php?album_id=" . $album_id . "'</script>";
    }
} catch (\Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>

<!-- Album  -->

<div class="container py-5">
    <div class="text-end pb-3">
        <a href="./controller/images.php?album_id=<?php echo $_GET['album_id']; ?>" class="link-light link-offset-2 link-underline-opacity-0">
            <button type="button" id="file-input-label" for="file-input" class="btn btn-primary text-end rounded-0 px-4 py-2">
                Add Images
            </button>
        </a>
    </div>

    <div class="container">
        <div class="row g-5">
            <?php while ($row = mysqli_fetch_row($albumImages)) {  ?>
                <div class="col-sm-6 mb-3  col-md-6 col-lg-4 mb-sm-0 ">

                    <div class="card border-0">
                        <a href="./image-gallery.php?album_id=<?php echo $album_id; ?>&image_id=<?php echo $row[0]; ?>&image_name=<?php echo $row[1]; ?>" onclick="return confirm('Are you want to delete image ?')" type="submit" id="delete" class="btn-close cross-close" name="remove" aria-label="Close"></a>
                        <img src="<?php echo './assets/images/image-gallery/' . $row[1] ?>" alt="...">
                    </div>

                </div>
            <?php } ?>

        </div>
    </div>

</div>

<!-- Album -->


<?php include('./partials/indexfooter.php') ?>