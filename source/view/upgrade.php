<?php
    session_start();
    if (!isset($_SESSION["mail"]) || !isset($_SESSION["Logged"]) || !$_SESSION["Logged"] == true) {
        header("Location: ../home.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Nâng cấp</title>
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
    <?php include "./frame/header.php";?>
    <!-- / End Header -->

    <section class="bg-success size-bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-12 text-white">
                    <h1>TÀI KHOẢN NHÀ PHÁT TRIỂN</h1>
                    <p>
                        Để nâng cấp tài khoản nhà phát triển, trước tiên bạn cần đăng kí thêm thông tin cá nhân bao gồm:
                        Số điện thoại, ảnh căn cước công dân mặt trước và sau.
                        Đồng thời, số dư tối thiểu trong tài khoản T&M Store Apps là 500.000 VND</br>
                        Ấn để bắt đầu nạp tiền vào tài khoản của bạn.
                    </p>
                    <a class="btn text-light btn-outline-warning" href="coin.php">NẠP NGAY</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->
    <!-- Section Form -->
    <section class="section background-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="bg-white rounded text-center p-5 shadow-down">
                        <h3 class="mb-80">ĐĂNG KÍ THÔNG TIN NHÀ PHÁT TRIỂN</h3>
                        <form action="../controller/UpgradeAccess.php" class="row" id="" method="POST" enctype="multipart/form-data">
                            <!--Số điện thoại-->
                            <div class="col-12">
                                <div class="form-group">
                                    <input name="phone" type="number" class="form-control" id="" title="Nhập số điện thoại" placeholder="Số điện thoại" required>
                                </div>
                            </div>
                            <!--Số tiền-->
                            <div class="col-12">
                                <div class="form-group">
                                <select name="fee" id="" class="form-control" required>
                                    <option value="notchoose">--- Số tiền tối thiểu 500.000 VND ---</option>
                                    <option value="500">500.000 VND</option>
                                </select>
                                </div>
                            </div>
                            <!--Ảnh xác thực mặt trước-->
                            <div class="col-12">
                                <div class="form-group">
                                    <input id="" type="file" class="form-control" name="idCardFace" title="Đính kèm ảnh CCCD mặt trước" required>
                                </div>
                            </div>
                            <!--Ảnh xác thực mặt sau-->
                            <div class="col-12">
                                <div class="form-group">
                                    <input id="" type="file" class="form-control" name="idCardBack" title="Đính kèm ảnh CCCD mặt sau" required>
                                </div>
                            </div>
                            <!--Button đăng kí-->
                            <div class="col-lg-6 col-10 mx-auto">
                                <button type="submit" class="btn btn-success w-100" id="" onclick="">ĐĂNG KÝ THÔNG TIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Section Form -->

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