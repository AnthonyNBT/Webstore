<?php
    session_start();

    include_once "frame/DialogMess.php";

    if (!isset($_SESSION["mail"]) || !isset($_SESSION["Logged"]) || !$_SESSION["Logged"] == true) {
        header("Location: ../home.php");
        exit();
    }

    include "../controller/ConnectData.php";
    $result = QueryUserSelect($_SESSION["mail"]);
    $row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Tài khoản NPT</title>
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
<?php include "./frame/dev-header.php";?>
<!-- / End Header -->
<div class="container background-two account-container">
    <div class="row flex-lg-nowrap">
        <div class="col-12 col-lg-auto mb-3 account-col">
            <div class="card p-xl-3 border-success">
                <div class="e-navlist e-navlist--active-bg">
                    <ul class="nav d-md-block">
                        <li class="nav-item"><a class="nav-link px-2 active font-weight-bold"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Quản lý</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-success" href="coin.php"><i class="fa fa-fw fa-th mr-1"></i><span>Nạp tiền</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-success" href="dev-manager.php"><i class="fa fa-fw fa-cog mr-1"></i><span>Danh sách ứng dụng</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-success" href="dev-list.php"><i class="fa fa-fw fa-cog mr-1"></i><span>Đơn hàng của ứng dụng</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card border-success">

                        <!--Start Frame 1-->
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <!--Start Head-->
                                    <div class="col-12 col-sm-auto mb-3">
                                        <div class="mx-auto account-img">
                                            <div class="d-flex justify-content-center align-items-center rounded account-img-custom">
                                                <img src="../data/users/<?=$row["TOKEN"]?>/images/avatar.jpg" alt="Avatar">
                                            </div>
                                            <div class=" text-center d-flex justify-content-center align-items-center rounded">
                                                <i class="fa fa-fw fa-camera"></i>
                                                <input type="file" name="" title="Chọn một ảnh" accept="image/*" class="btn-choose-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-3 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?= $row["FULLNAME"] ?></h4>
                                            <p class="mb-0">@<?=strtolower(str_replace(" ","",$row["FULLNAME"]))?></p>
                                        </div>
                                        <div class="text-center text-sm-right">
                                            <span class="badge badge-secondary">Nhà phát triển</span>
                                            <div class="text-muted">
                                                <small class="text-warning font-italic"><?=$row["CASH"]?>000 VND</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Head-->
                                </div>
                                <ul class="nav nav-tabs pt-3">
                                    <li class="nav-item">
                                        <a class="active nav-link text-success font-weight-bolder">Thông tin tài khoản&nbsp;&nbsp;<i class="fas fa-user-edit" id="infoProfile"></i></a>
                                    </li>
                                </ul>
                                <!--Start Content-->
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <form action="../controller/ProfileAccess.php" class="form" novalidate="">
                                            <div class="row">
                                                <div class="col">
                                                    <!--Start Fullname-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Họ và tên</label>
                                                                <input class="form-control" type="text" name="name" placeholder="Tên nhà phát triển" value="<?=$row["FULLNAME"]?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Fullname-->
                                                    <!--Start Email-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input class="form-control" type="text" placeholder="<?=$row["EMAIL"]?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Email-->
                                                    <!--Start Birth-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Ngày sinh</label>
                                                                <input class="form-control" type="date" name="birth" value="<?= $row["BIRTH"] ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Birth-->
                                                    <!--Start Gender-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Giới tính</label>
                                                                <select class="form-control change-info" name="gender" required disabled>
                                                                    <option value="notchoose">--- Chọn giới tính ---</option>
                                                                    <option value="male" <?= $row["GENDER"] == "male" ? "selected" : "" ?> >Nam</option>
                                                                    <option value="female" <?= $row["GENDER"] == "female" ? "selected" : "" ?> >Nữ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Gender-->
                                                </div>
                                            </div>
                                            <!--Start Button Submit Change-->
                                            <div class="row">
                                                <div class="col d-flex justify-content-end">
                                                    <button class="btn btn-success" type="submit" id="">Lưu thay đổi</button>
                                                </div>
                                            </div>
                                            <!--/End Button Submit Change-->
                                        </form>
                                    </div>
                                </div>
                                <!--/ End Content-->
                            </div>
                        </div>
                        <!--/ End Frame 1-->

                        <!--Start Frame 2-->
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                </div>
                                <ul class="nav nav-tabs pt-3">
                                    <li class="nav-item">
                                        <a class="active nav-link text-success font-weight-bolder">Đổi mật khẩu&nbsp;&nbsp;<i class="fas fa-edit"  id="changePass"></i></a>
                                    </li>
                                </ul>
                                <!--Start Content-->
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <form action="../controller/ChangeAccess.php" class="form" novalidate="">
                                            <!--Start Mật khẩu cũ-->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Nhập mật khẩu cũ</label>
                                                        <input name="OldPass" class="form-control" type="password" placeholder="••••••" disabled>
                                                        <div>
                                                            <span class="text-danger small"><?= isset($_SESSION["OldPassEmpty"]) ? $_SESSION["OldPassEmpty"] : ""; ?></span>
                                                            <span class="text-danger small"><?= isset($_SESSION["WrongPassOld"]) ? $_SESSION["WrongPassOld"] : ""; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/End Mật khẩu cũ-->
                                            <!--Start Password mới-->
                                            <div class="row pt-3">
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Mật khẩu mới</label>
                                                                <input name="NewPass" class="form-control" type="password" placeholder="••••••" disabled>
                                                                <div>
                                                                    <span class="text-danger small"><?= isset($_SESSION["NewPassEmpty"]) ? $_SESSION["NewPassEmpty"] : ""; ?></span>
                                                                    <span class="text-danger small"><?= isset($_SESSION["LenNewPass"]) ? $_SESSION["LenNewPass"] : ""; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Nhập lại mật khẩu mới</label>
                                                                <input name="" class="form-control" type="password" placeholder="••••••" disabled>
                                                                <div>
                                                                    <span class="text-danger small"><?= isset($_SESSION["NewPassRepeatEmpty"]) ? $_SESSION["NewPassRepeatEmpty"] : ""; ?></span>
                                                                    <span class="text-danger small"><?= isset($_SESSION["NotSamePass"]) ? $_SESSION["NotSamePass"] : ""; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/End Password mới-->
                                            <!--Start Button Submit Change-->
                                            <div class="row">
                                                <div class="col d-flex justify-content-end" >
                                                    <button class="btn btn-success" type="submit" id="btn-Pass">Lưu mật khẩu</button>
                                                </div>
                                            </div>
                                            <!--/End Button Submit Change-->
                                        </form>
                                    </div>
                                </div>
                                <!--/ End Content-->
                            </div>
                        </div>
                        <!--/ End Frame-->
                    </div>

                </div>

                <!--Start Trợ giúp-->
                <div class="col-12 col-sm-3 mb-3">
                    <div class="card border-success">
                        <div class="card-body">
                            <h5 class="text-center font-weight-bold">Ứng dụng của bạn</h5>
                            <p class="card-text text-center">Lịch sử ứng dụng bạn đã tải và mua</p>
                            <a class="nav-link px-2 text-success text-center" href="history.php" target="_blank"><i class="fas fa-angle-double-up"></i></i><span>&nbsp;&nbsp;Xem ngay</span></a>
                        </div>
                    </div>
                </div>
                <!--/End Trợ giúp-->

            </div>
        </div>
    </div>
</div>
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