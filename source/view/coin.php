<?php
    session_start();
    if (!isset($_SESSION["mail"]) || !isset($_SESSION["Logged"]) || !$_SESSION["Logged"] == true) {
        header("Location: ../home.php");
        exit();
    }

    include "../controller/ConnectData.php";
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
    <?php include "../controller/CheckRoleAccess.php";?>
    <!-- / End Header -->

    <section class="bg-success background-leaf py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-9 text-white">
                    <h1>NẠP TIỀN VÀO TÀI KHOẢN</h1>
                    <p>
                        Mỗi tài khoản người dùng sẽ có một số dư tiền ảo, tiền ảo này được dùng để mua các ứng dụng trên trang
                        web hoặc nâng cấp tài khoản nhà phát triển. Để nạp tiền bạn cần nhập số sê-ri hợp lệ của thẻ cào.
                        Chúng tôi đảm bảo việc thông tin cá nhân mà bạn cung cấp sẽ được bảo mật. Khi nhập số sê-ri thành công,
                        hệ thống sẽ hiển thị số tiền ảo tương ứng. Bên cạnh đó bạn cần có trách nhiệm nhập số sê-ri chính xác.
                        Đơn vị mã thẻ được tính là Việt Nam đồng.
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
                        <h1 class="h1">NẠP TIỀN VÀO TÀI KHOẢN</h1>

                        <form action="../controller/AddMoney.php" class="row" id="" method="POST">
                            <!--Số seri-->
                            <div class="col-12">
                                <div class="form-group">
                                    <input name="seri" type="text" class="form-control" id="" title="Nhập số seri" placeholder="Số seri" required>
                                    <div>
                                        <span class="text-danger small"><?= isset($_SESSION["CardSelled"]) ? $_SESSION["CardSelled"] : ""; ?></span>
                                        <span class="text-danger small"><?= isset($_SESSION["WrongSeri"]) ? $_SESSION["WrongSeri"] : ""; ?></span>
                                        <span class="text-danger small"><?= isset($_SESSION["SeriEmpty"]) ? $_SESSION["SeriEmpty"] : ""; ?></span>
                                    </div>
                                </div>
                            </div>
                            <!--Button nạp-->
                            <div class="col-lg-6 col-10 mx-auto">
                                <button type="submit" class="btn btn-success w-100" id="" onclick="">NẠP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Section Form -->

    <!-- Start Liên hệ -->
    <section class="container py-5 ">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 m-auto">
                    <h2 class="h1">Liên hệ</h2>
                    <p>
                        Liên hệ với chúng tôi nếu việc nhập số sê-ri và nạp tiền của bạn bị lỗi
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="h-60 py-3 services-icon-wap shadow background-bee">
                        <div class="h1 text-success text-center"><i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none text-center" href="mailto:ctrls.hangocmy@gmail.com" target="_blank"><h2 class="h5 mt-4 text-success">Email</h2></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="h-60 py-3 services-icon-wap shadow background-bee">
                        <div class="h1 text-success text-center"><i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none text-center" href="tel:0888-745-255" target="_blank"><h2 class="h5 mt-4 text-success">Hotline</h2></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="h-60 py-3 services-icon-wap shadow background-bee">
                        <div class="h1 text-success text-center"><i class="fas fa-map-marker-alt fa-fw"></i>
                            <a class="text-decoration-none text-center" target="_blank"
                            href="https://www.google.com/maps/place/19+%C4%90.Nguy%E1%BB%85n+H%E1%BB%AFu+Th%E1%BB%8D,+T%C3%A2n+H%C6%B0ng,+Qu%E1%BA%ADn+7,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7328159,106.6965832,15.96z/data=!4m13!1m7!3m6!1s0x31752fbd7d343a57:0xb5ca26918dff0578!2zMTkgxJAuTmd1eeG7hW4gSOG7r3UgVGjhu40sIFTDom4gSMawbmcsIFF14bqtbiA3LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!3b1!8m2!3d10.7326689!4d106.6997696!3m4!1s0x31752fbd7d343a57:0xb5ca26918dff0578!8m2!3d10.7326689!4d106.6997696?hl=vi-VN">
                            <h2 class="h5 mt-4 text-success">Địa chỉ</h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / End Liên hệ -->

    <!--History-->
    <section class="section background-table py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 mx-auto">
                    <h2 class="h1">Lịch sử nạp của bạn</h2>
                </div>
                <table class="table table-hover table-coin">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Số Seri</th>
                        <th scope="col">Ngày nạp</th>
                        <th scope="col">Mệnh giá</th>
                      </tr>
                    </thead>
                    <tbody>
<!--                      <tr>-->
<!--                        <th scope="row">1</th>-->
<!--                        <td>0214578961</td>-->
<!--                        <td>01/05/2021</td>-->
<!--                        <td>500.00 VND</td>-->
<!--                      </tr>-->
                        <?= include "../controller/HistoryCard.php";?>
                    </tbody>
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