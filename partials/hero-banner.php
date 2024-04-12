<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .acitve {
            background-color: #005BEA;
        }
    </style>

</head>

<body>

    <!-- profile-home  -->
    <div class="profile-home">
        <img src="./assets/images/banner/Rectangle 619.png" alt="" height="100%" width="100%">
    </div>

    <!-- profile-home  -->

    <!-- logout buttons -->
    <div class="border-bottom">
        <div class="container ">
            <div class="py-4 d-flex logout justify-content-center gap-5">
                <p class="fs-5 text-secondary fw-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Molestie ultricies <br> pretium, enim id amet,
                    dapibus sit nullam. Vel, facilisi interdum morbi id. </p>
                <div class="profile-btn-group d-flex gap-3" role="group" aria-label="Basic example">
                   <?php if(!empty($_SESSION['email'])){ ?>
                    <button type="button" class="btn btn1 btn-primary border-0 fw-semibold rounded-0 btn-box" onclick="window.location.href = './profile-view.php'">
                        Profile
                    </button>
                    <?php } ?>
                    <button type="button" class="btn btn1 btn-light text-primary rounded-0 border-2 fw-bold border border-primary btn-box1" onclick="window.location.href = './album-gallery.php'">Album</button>
                    <?php if(!empty($_SESSION['email'])){ ?>
                   <button type="button" class="btn btn-light rounded-0 text-primary fw-bold border-2 border border-primary btn-box1" onclick="window.location.href = './auth/logout.php'">Logout</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        var btnContainer = document.getElementsByClassName("btn1");
        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btnContainer.length; i++) {
            btnContainer[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script> -->

</body>

</html>
<!-- logout buttons -->