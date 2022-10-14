<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Danh sách ứng dụng</title>
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
<?php include "./frame/dev-header.php";?>
<!-- / End Header -->

<div class="container py-5">
    <div class="row">
        <div class="col-lg-3 ">
            <h1 class="h2 pb-4">Trạng thái</h1>
            <ul class="list-unstyled store-accordion">
                <li class="pb-3">
                    <a class="collased d-flex justify-content-between h3 text-decoration-none text-info" href="">
                        Bản nháp<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                </li>
                <li class="pb-3">
                    <a class="collased d-flex justify-content-between h3 text-decoration-none text-warning" href="">
                        Đang chờ duyệt<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                </li>
                <li class="pb-3">
                    <a class="collased d-flex justify-content-between h3 text-decoration-none text-success" href="">
                        Đã được duyệt<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                </li>
                <li class="pb-3">
                    <a class="collased d-flex justify-content-between h3 text-decoration-none" href="">
                        Đã gỡ<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                </li>
                <li class="pb-3">
                    <a class="collased d-flex justify-content-between h3 text-decoration-none text-danger" href="">
                        Bị từ chối<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!--/ End Sidebar Left-->

        <div class="col-lg-9">
            <!-- Start Section Content -->
            <section class="bg-light">
                <div class="container pb-5">
                    <!--Ứng dụng 1-->
                    <div class="row">
                        <div class="col-lg-3 mt-5">
                            <div class="card mb-3">
                                <img class="card-img img-fluid" src="../images/game_01.jpg" alt="CARD GAME" id="">
                            </div>
                        </div>
                        <div class="col-lg-9 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h4">EAGLES AWESOME</h4>
                                    <!--Start Số tiền-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Trạng thái:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="h3 font-italic text-success py-2">Đã được duyệt</p>                            </li>
                                    </ul>
                                    <!--/End Số tiền-->
                                    <!--Start Ngày đăng tải-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Nhà tải:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong>11/05/21</strong></p>
                                        </li>
                                    </ul>
                                    <!--/End Ngày đăng tải-->
                                    <!--Start Dung lượng-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Dung lượng:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong>12 MB</strong></p>
                                        </li>
                                    </ul>
                                    <!--/End Dung lượng-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/End Ứng dụng 1-->
                    <!--Ứng dụng 2-->
                    <div class="row">
                        <div class="col-lg-3 mt-5">
                            <div class="card mb-3">
                                <img class="card-img img-fluid" src="../images/game_09.jpg" alt="CARD GAME" id="">
                            </div>
                        </div>
                        <div class="col-lg-9 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h4">EAGLES AWESOME</h4>
                                    <!--Start Số tiền-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Trạng thái:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="h3 font-italic text-info py-2">Bản nháp</p>                            </li>
                                    </ul>
                                    <!--/End Số tiền-->
                                    <!--Start Ngày đăng tải-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Nhà tải:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong>11/05/21</strong></p>
                                        </li>
                                    </ul>
                                    <!--/End Ngày đăng tải-->
                                    <!--Start Dung lượng-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Dung lượng:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong>12 MB</strong></p>
                                        </li>
                                    </ul>
                                    <!--/End Dung lượng-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/End Ứng dụng 2-->
                </div>
            </section>
            <!-- / End Section Content -->
        </div>

    </div>
</div>


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