<?php
    session_start();
    include "../controller/ConnectData.php";
    $result = QueryUserSelect($_SESSION["mail"]);
    $row = $result->fetch_assoc();
    $_SESSION["name"] = $row["FULLNAME"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Phát hành ứng dụng</title>
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
                                        <div class="mx-auto dev-img">
                                            <div class="d-flex justify-content-center align-items-center rounded dev-img-custom">
                                                <span class="account-img-title">180x180</span>
                                            </div>
                                            <div class=" text-center d-flex justify-content-center align-items-center rounded">
                                                <i class="fa fa-fw fa-camera"></i>
                                                <input type="file" name="" title="Chọn icon ứng dụng" accept="image/*" class="btn-choose-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-3 mb-sm-0">
                                            <div class="form-group">
                                                <label>Tên nhà phát triển</label>
                                                <input class="form-control" type="text" name="name" placeholder="" value="My Ngoc Ha" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Tải tập tin screenshot</label>
                                                <input class="form-control" type="file" name="name" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Head-->
                                </div>
                                <ul class="nav nav-tabs pt-3">
                                    <li class="nav-item">
                                        <a class="active nav-link text-success font-weight-bolder">Thông tin ứng dụng&nbsp;&nbsp;<i class="fas fa-user-edit" id="infoProfile"></i></a>
                                    </li>
                                </ul>
                                <!--Start Content-->
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <form class="form" novalidate="" action="../controller/DevUpAccess.php" method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <!--Start Mô tả ngắn-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Mô tả đoạn ngắn</label>
                                                                <textarea class="form-control mt-1" id="" name="shortdes" placeholder="Mô tả ngắn gọn ứng dụng" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Mô tả ngắn-->
                                                    <!--Start Mô tả chi tiết-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Mô tả chi tiết</label>
                                                                <textarea class="form-control mt-1" id="" name="describe" placeholder="Mô tả chi tiết ứng dụng" rows="6"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Mô tả chi tiết-->
                                                    <!--Start Loại ứng dụng-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Loại ứng dụng</label>
                                                                <select name="type" class="form-control mb-4" required>
                                                                    <optgroup label="Ứng dụng">
                                                                        <option value="game">Trò chơi</option>
                                                                        <option value="tool">Công cụ</option>
                                                                    </optgroup>
                                                                    <optgroup label="Phim ảnh">
                                                                        <option value="action">Hành động</option>
                                                                        <option value="cartoon">Hoạt hình</option>
                                                                        <option value="comedy">Hài kịch</option>
                                                                    </optgroup>
                                                                    <optgroup label="Sách">
                                                                        <option value="ebook">Sách điện tử</option>
                                                                        <option value="audio">Sách nói</option>
                                                                        <option value="child">Sách dành cho trẻ em</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Loại ứng dụng-->
                                                    <!--Start Tiền phí ứng dụng-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Phí ứng dụng</label>
                                                                <input name="fee" class="form-control mb-4" type="text" placeholder="Nhập tiền phí ứng dụng">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Tiền phí ứng dụng-->
                                                    <!--Start Mã nguồn ứng dụng-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Mã nguồn ứng dụng</label>
                                                                <input name="source" class="form-control mb-4" type="file" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Mã nguồn ứng dụng-->
                                                    <!--Start Trạng thái ứng dụng-->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group mb-4">
                                                                <label>Thiết lập trạng thái ứng dụng</label>
                                                                <select name="" class="form-control " required>
                                                                    <option value="">--- Chọn trạng thái ---</option>
                                                                    <option value="0">Lưu làm bản nháp</option>
                                                                    <option value="1">Phát hành và chờ kiểm duyệt</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/End Trạng thái ứng dụng-->
                                                </div>
                                            </div>
                                            <!--Start Button Submit Change-->
                                            <div class="row">
                                                <div class="col d-flex justify-content-end">
                                                    <button class="btn btn-success mt-5" type="submit" id="">Lưu thông tin ứng dụng</button>
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

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--Quản lý danh sách ứng dụng-->
<section class="section background-table py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 mx-auto">
                <h2 class="h1">Danh sách ứng dụng<a href=""><i class="far fa-edit h2 text-success mb-4 ml-3"></i></a></h2>
            </div>
            <table class="table table-hover table-coin">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên ứng dụng</th>
                    <th scope="col">Mô tả ngắn</th>
                    <th scope="col">Loại ứng dụng</th>
                    <th scope="col">Phí ứng dụng</th>
                    <th scope="col">Trạng thái ứng dụng</th>
                </tr>
                </thead>
                <tr>
                    <th scope="row">1</th>
                    <td>Candy Crush</td>
                    <td>Trò chơi lắp ráp</td>
                    <td>Trò chơi</td>
                    <td>10.000 VND</td>
                    <td>Bản nháp</td>
            </table>
        </div>
    </div>
</section>
<!--/ End Quản lý danh sách ứng dụng-->


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