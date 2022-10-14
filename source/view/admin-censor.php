<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Kiểm duyệt</title>
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
<?php include "frame/admin-header.php";?>
<!-- / End Header -->
<h1 class="h1 text-center text-success mt-5">QUẢN LÝ DANH SÁCH KIỂM DUYỆT ỨNG DỤNG</h1>

<!-- Start Section Content -->
<section class="bg-light">
    <div class="container pb-5">
        <!--Ứng dụng chờ 1-->
        <div class="row">
            <div class="col-lg-3 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="../images/game_01.jpg" alt="CARD GAME" id="">
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="h4">EAGLES AWESOME</h4>
                        <!--Start Số tiền-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Trạng thái:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="h3 font-italic text-warning py-2">Đang chờ duyệt</p>                            </li>
                        </ul>
                        <!--/End Số tiền-->
                        <!--Start Ngày đăng tải-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Nhà đăng tải:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>11/05/21</strong></p>
                            </li>
                        </ul>
                        <!--/End Ngày đăng tải-->
                        <!--Start Thể loại-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Thể loại:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>Trò chơi</strong></p>
                            </li>
                        </ul>
                        <!--/End Thể loại-->
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mt-5">
                <div class="form-group">
                    <h5 class="">Kiểm duyệt<i class="far fa-edit h6 text-success ml-3"></i></h5>
                    <select class="form-control" name="" id="">
                        <option value="">--- Chọn ---</option>
                        <option value="">Chấp nhận</option>
                        <option value="">Từ chối</option>
                    </select>
                </div>
            </div>
        </div>
        <!--/End Ứng dụng chờ 1-->

        <!--Ứng dụng chờ 2-->
        <div class="row">
            <div class="col-lg-3 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="../images/game_02.jpg" alt="CARD GAME" id="">
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="h4">EAGLES AWESOME</h4>
                        <!--Start Số tiền-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Trạng thái:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="h3 font-italic text-success py-2">Đã duyệt</p>
                            </li>
                        </ul>
                        <!--/End Số tiền-->
                        <!--Start Ngày đăng tải-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Nhà đăng tải:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>11/05/21</strong></p>
                            </li>
                        </ul>
                        <!--/End Ngày đăng tải-->
                        <!--Start Thể loại-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Thể loại:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>Trò chơi</strong></p>
                            </li>
                        </ul>
                        <!--/End Thể loại-->
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mt-5">
                <div class="form-group">
                    <h5 class="">Kiểm duyệt<i class="far fa-edit h6 text-success ml-3"></i></h5>
                    <select class="form-control" name="" id="">
                        <option value="">--- Chọn ---</option>
                        <option value="">Chấp nhận</option>
                        <option value="">Từ chối</option>
                    </select>
                </div>
            </div>
        </div>
        <!--/End Ứng dụng chờ 2-->

        <!--Ứng dụng chờ 3-->
        <div class="row">
            <div class="col-lg-3 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="../images/game_03.jpg" alt="CARD GAME" id="">
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="h4">EAGLES AWESOME</h4>
                        <!--Start Số tiền-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Trạng thái:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="h3 font-italic text-danger py-2">Bị từ chối</p>
                            </li>
                        </ul>
                        <!--/End Số tiền-->
                        <!--Start Ngày đăng tải-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Nhà đăng tải:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>11/05/21</strong></p>
                            </li>
                        </ul>
                        <!--/End Ngày đăng tải-->
                        <!--Start Thể loại-->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Thể loại:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>Trò chơi</strong></p>
                            </li>
                        </ul>
                        <!--/End Thể loại-->
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mt-5">
                <div class="form-group">
                    <h5 class="">Kiểm duyệt<i class="far fa-edit h6 text-success ml-3"></i></h5>
                    <select class="form-control" name="" id="">
                        <option value="">--- Chọn ---</option>
                        <option value="">Chấp nhận</option>
                        <option value="">Từ chối</option>
                    </select>
                </div>
            </div>
        </div>
        <!--/End Ứng dụng chờ 3-->
    </div>
</section>
<!-- / End Section Content -->


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