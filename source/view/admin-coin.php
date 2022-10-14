<?php
    session_start();
    include_once "frame/DialogMess.php";
    if (!isset($_SESSION["mail"]) || !isset($_SESSION["Logged"]) || !$_SESSION["Logged"] == true) {
        header("Location: ../home.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Quản lý mã thẻ</title>
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
    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
</head>

<body>
<!-- Header -->
<?php include "frame/admin-header.php";?>
<!-- / End Header -->

<section class="bg-success background-leaf py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-9 text-white">
                <h1>QUẢN LÝ MÃ THẺ</h1>
                <p>
                    Quản trị viên có thể xem được danh sách các mã thẻ đang có và trạng thái của các thẻ, cùng với các thông tin liên quan.
                    Đồng thời, quản trị viên có quyền tạo thêm nhiều mã thẻ khác.
                    Khi tạo mã thẻ, quản trị viên cần nhập các thông tin như: số lượng mã thẻ cần tạo, mệnh giá của các mã thẻ này.
                    Mệnh giá các mức giá từ 50,000 đến 500,000 VND.
                    Mã thẻ khi được tạo sẽ có số sê-ri là một dãy số ngẫu nhiên có chiều dài khoảng 10-16 ký tự.
                </p>
            </div>
            <div class="col-md-3 img-coin">
                <img src="../images/add-coin.jpg" alt="Add coin">
            </div>
        </div>
    </div>
</section>
<!-- Close Banner -->

<!-- Section Form -->
<section class="section live-background">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="bg-white rounded text-center p-5 shadow-down">
                    <h1 class="h1">TẠO MÃ THẺ</h1>

                    <form action="../controller/CreateCard.php" class="row" id="" method="POST">
                        <!--Số seri-->
                        <div class="col-12">
                            <div class="form-group">
                                <input name="count" type="number" min="1" class="form-control" id="" title="Nhập số lượng cần tạo" placeholder="Số lượng" required>
                                <div>
                                    <span class="text-danger small"><?= isset($_SESSION["EmptyCount"]) ? $_SESSION["EmptyCount"] : ""; ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="value" id="" class="form-control">
                                    <option value="0">--- Chọn mệnh giá ---</option>
                                    <option value="10">10.000 VND</option>
                                    <option value="20">20.000 VND</option>
                                    <option value="50">50.000 VND</option>
                                    <option value="100">100.000 VND</option>
                                    <option value="200">200.000 VND</option>
                                    <option value="500">500.000 VND</option>
                                </select>
                                <div>
                                    <span class="text-danger small"><?= isset($_SESSION["ChooseValue"]) ? $_SESSION["ChooseValue"] : ""; ?></span>
                                </div>
                            </div>
                        </div>
                        <!--Button nạp-->
                        <div class="col-lg-6 col-10 mx-auto">
                            <button type="submit" class="btn btn-success w-100" id="">TẠO MỚI</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Section Form -->

<!--Danh sách mã thẻ-->
<section class="section background-table py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 mx-auto">
                <h2 class="h1">Danh sách mã thẻ</h2>
            </div>
            <table class="table table-hover table-coin">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mệnh giá</th>
                    <th scope="col">Số seri</th>
                    <th scope="col">Trạng thái</th>
                </tr>
                </thead>
                <?php include "../controller/ShowCard.php"?>
            </table>
        </div>
    </div>
</section>
<!--/ End History-->
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

<!-- End Script -->
</body>

</html>
<?= include_once "frame/ShowDialog.php"?>