<?php
    session_start();
    if (isset($_SESSION["mail"]) && isset($_SESSION["Logged"]) && $_SESSION["Logged"] == true) {
        header("Location: ../home.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Đăng kí</title>
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

<body class="background-login">
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-5 m-auto form-login" method="post" role="form" action="../controller/RegisterAccess.php">
                <h1 class="text-center">ĐĂNG KÍ</h1>
                <!-- Họ tên input -->
                <div class="mb-4">
                    <label class="form-label" for="mail-register">Họ tên</label>
                    <input name="fullname" type="text" id="mail-register" class="form-control" placeholder="Nhập họ tên của bạn"/>
                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["RegisNameEmpty"]) ? $_SESSION["RegisNameEmpty"] : ""; ?></span>
                    </div>
                </div>
                <!--Ngày sinh-->
                <div class="mb-4">
                    <label class="form-label" for="birth">Ngày sinh</label>
                    <input name="birthday" type="date" id="birth" class="form-control" placeholder="Nhập ngày tháng năm sinh"/>
                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["RegisBirthEmpty"]) ? $_SESSION["RegisBirthEmpty"] : ""; ?></span>
                    </div>
                </div>
                <!--Giới tính-->
                <div class="mb-4">
                    <label class="form-label" for="gender">Giới tính</label>

                    <div class="form-group">
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="notchoose">--- Chọn giới tính ---</option>
                            <option value="male">Nam</option>
                            <option value="female">Nữ</option>
                        </select>
                    </div>

                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["RegisGenderEmpty"]) ? $_SESSION["RegisGenderEmpty"] : ""; ?></span>
                    </div>
                </div>
                <!-- Email input -->
                <div class=" mb-4">
                    <label class="form-label" for="mail-register">Địa chỉ email</label>
                    <input name="mail" type="email" id="mail-register" class="form-control" placeholder="Nhập địa chỉ mail"/>
                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["RegisMailEmpty"]) ? $_SESSION["RegisMailEmpty"] : ""; ?></span>
                        <span class="text-danger small"><?= isset($_SESSION["RegisMailExist"]) ? $_SESSION["RegisMailExist"] : ""; ?></span>
                    </div>
                </div>
                <!-- Password input -->
                <div class="mb-4">
                    <label class="form-label" for="pass-register">Mật khẩu</label>
                    <input name="password" type="password" id="pass-register" class="form-control" placeholder="Nhập mật khẩu"/>
                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["RegisPassEmpty"]) ? $_SESSION["RegisPassEmpty"] : ""; ?></span>
                        <span class="text-danger small"><?= isset($_SESSION["RegisLengthPass"]) ? $_SESSION["RegisLengthPass"] : ""; ?></span>
                    </div>
                </div>
                <!-- Password input -->
                <div class="mb-4">
                    <label class="form-label" for="pass2-register">Xác nhận mật khẩu</label>
                    <input name="password2" type="password" id="pass2-register" class="form-control" placeholder="Nhập lại mật khẩu"/>
                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["RegisPass2Empty"]) ? $_SESSION["RegisPass2Empty"] : ""; ?></span>
                        <span class="text-danger small"><?= isset($_SESSION["RegisPass2NotSame"]) ? $_SESSION["RegisPass2NotSame"] : ""; ?></span>
                    </div>
                </div>
                <!-- Submit button -->
                </br>
                <button type="submit" class="btn btn-success btn-color btn-block mb-4 ">ĐĂNG KÍ</button>
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Hoặc đăng nhập với:</p>
                    <button type="button" class="btn btn-success btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

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