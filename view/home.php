<?php
    session_start();
    include "../controller/ConnectData.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Team5 | Trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <!--Custom-->
    <link rel="stylesheet" href="../style.css">
    <!--Bootstrap - jQuery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Slick-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
    <!--Fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">

</head>

<body>
    <!-- Header -->
    <?php include "../controller/CheckRoleAccess.php";?>
    <!-- / End Header -->

    <!-- Start Banner Hero -->
    <div id="store-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#store-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#store-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#store-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="../images/home_banner_01.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Team5</b> Store Apps</h1>
                                <h3 class="h2">
                                    Formerly Android Market, is a digital distribution service operated and developed by
                                    Team 5.
                                </h3>
                                <p>
                                    Team5 Store Apps also serves as a digital media store, offering music, books, movies,
                                    and television programs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="../images/home_banner_02.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Use Family Library</h1>
                                <h3 class="h2">You can share purchased apps, games, movies, TV shows, and books</h3>
                                <p>
                                    With up to <strong>5 other family members</strong> once you set-up Google Play
                                    Family Library.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="../images/home_banner_03.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Parent Guide</h1>
                                <h3 class="h2">Find family-friendly content</h3>
                                <p>
                                    1. On your Android phone or tablet, open the Google Play StoreGoogle Play.<br>
                                    2. Tap Games, Movies & TV, or Books.<br>
                                    3. At the top, tap Family.<br>
                                    4. In the Books section, select Children's Books.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#store-carousel" role="button"
            data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#store-carousel" role="button"
            data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="container py-5 background-home">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Thể loại</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="../images/home_category_01.gif" class="rounded-circle img-fluid border"
                                 alt="gif_home_01"></a>
                <h5 class="text-center mt-3 mb-3">Ứng dụng</h5>
                <p class="text-center"><a class="btn btn-success" href="store-app.php">Đi đến cửa hàng</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="../images/home_category_02.gif" class="rounded-circle img-fluid border"
                                 alt="gif_home_02"></a>
                <h2 class="h5 text-center mt-3 mb-3">Phim ảnh</h2>
                <p class="text-center"><a class="btn btn-success" href="store-movie.php">Đi đến cửa hàng</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="../images/home_category_03.gif" class="rounded-circle img-fluid border"
                                 alt="gif_home_03"></a>
                <h2 class="h5 text-center mt-3 mb-3">Sách</h2>
                <p class="text-center"><a class="btn btn-success" href="store-book.php">Đi đến cửa hàng</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Danh sách ứng dụng phổ biến-->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Bảng xếp hạng</h1>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="top-free.php">
                            <img src="../images/home_go_01.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="top-free.php" class="h2 text-decoration-none text-dark">Ứng dụng miễn phí phổ biến nhất</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="top-paid.php">
                            <img src="../images/home_go_02.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="top-paid.php" class="h2 text-decoration-none text-dark">Ứng dụng trả phí phổ biến nhất</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="top-release.php">
                            <img src="../images/home_go_03.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="top-release.php" class="h2 text-decoration-none text-dark">Ứng dụng mới phát hành</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <!-- Start Footer -->
    <?php include "./frame/footer.php";?>
    <!-- End Footer -->

    <!--Start Script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="../main.js"></script>

    <!-- End Script -->
</body>

</html>