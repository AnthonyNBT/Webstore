<?php
    session_start();
    include_once "frame/DialogMess.php";

    include "../controller/ProductAccess.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Chi tiết</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <!--Custom-->
    <link rel="stylesheet" href="../style.css">
    <!--Bootstrap - jQuery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <!--Slick-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!--Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">

</head>

<body>
    <!-- Header -->
    <?php include "./frame/header.php";?>
    <!-- / End Header -->

    <!-- Start Section Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">

                <!--Start Content App-->
                <?php include "./frame/store-detail-content.php"?>
                <!--/ End Content App-->

                <!--Start Rating & Comment-->
                <div class="col-lg-12 mt-5 d-none" id="ratingComment">
                    <div class="card">
                        <div class="card-body">
                            <!--Đánh giá của bạn-->
                            <?php include "./frame/store-detail-rating.php"?>
                            <!--/End Đánh giá của bạn-->
                        </div>
                    </div>
                </div>
                <!--/ End Rate & Comments-->

                <!--Start View Rate + Comments-->
                <?php include "./frame/store-detail-viewrate.php" ?>
                <!--/ End View Rate + Comments-->

            </div>
        </div>
    </section>
    <!-- / End Section Content -->

    <!-- Start Related App-->
    <?php include "./frame/store-detail-related.php"?>
    <!-- / End Related App -->

    <!-- Start Footer -->
    <?php include "./frame/footer.php";?>
    <!-- End Footer -->

    <!--Start Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.map"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="../main.js"></script>

</body>

</html>
<?= include_once "frame/ShowDialog.php"?>