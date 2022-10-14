<?php
    session_start();
    include "../controller/ConnectData.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Cửa hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <!--Custom-->
    <link rel="stylesheet" href="../style.css">
    <!--Bootstrap - jQuery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
    <?php include "../controller/CheckRoleAccess.php";?>
    <!-- / End Header -->

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <!-- Start Sidebar Left-->
            <div class="col-lg-3 ">
                <h1 class="h2 pb-4">Thể loại</h1>
                <ul class="list-unstyled store-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Ứng dụng
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="store-app.php">Tất cả ứng dụng</a></li>
                            <li><a class="text-decoration-none" href="app-game.php">Trò chơi</a></li>
                            <li><a class="text-decoration-none" href="app-tool.php">Công cụ</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Phim ảnh
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="store-movie.php">Tất cả phim ảnh</a></li>
                            <li><a class="text-decoration-none" href="movie-action.php">Hành động</a></li>
                            <li><a class="text-decoration-none" href="movie-cartoon.php">Hoạt hình</a></li>
                            <li><a class="text-decoration-none" href="movie-comedy.php">Hài kịch</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sách
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="store-book.php">Tất cả sách</a></li>
                            <li><a class="text-decoration-none" href="book-ebook.php">Sách điện tử</a></li>
                            <li><a class="text-decoration-none" href="book-audio.php">Sách nói</a></li>
                            <li><a class="text-decoration-none" href="book-child.php">Sách dành cho trẻ em</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/ End Sidebar Left-->

            <!-- Start Content-->
            <div class="col-lg-9">
                <!-- Start Navigation Top Center-->
                <div class="row ">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item" id="allProduct">
                                <a id="allProduct" class="h3 text-dark text-decoration-none mr-3" href="javascript:void(0)">Tất cả</a>
                            </li>
                            <li class="list-inline-item">
                                <a id="popuProduct" class="h3 text-dark text-decoration-none mr-3" href="javascript:void(0)">Phổ biến</a>
                            </li>
                            <li class="list-inline-item">
                                <a id="newProduct" class="h3 text-dark text-decoration-none" href="javascript:void(0)">Mới phát hành</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
<!--                            <form>-->
                                <input type="text" class="form-control" placeholder="Tìm kiếm" name="search" size="1000">
<!--                            </form>-->
                        </div>
                    </div>
                </div>
                <!-- / End Navigation Top Center-->

                <!--Start Frame App-->
                <div class="row" id="frameProduct">
                </div>
                <!--/ End Frame App-->

                <!-- Start Paging-->
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
                <!--/ End Paging-->
            </div>
            <!-- / End Content-->
        </div>
    </div>
    <!-- End Content -->

    <!-- Start Footer -->
    <?php include "./frame/footer.php";?>
    <!-- End Footer -->

    <!--Start Script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <script src="../main.js"></script>

</body>

</html>