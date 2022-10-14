<?php
    session_start();
    include_once "frame/DialogMess.php";
    if (isset($_SESSION["mail"]) && isset($_SESSION["Logged"]) && $_SESSION["Logged"] == true) {
        header("Location: ../home.php");
        exit();
    }

    if (isset($_COOKIE["Mail"]) && isset($_COOKIE["Password"])) {
        $CooMail = $_COOKIE["Mail"];
        $CooPass = $_COOKIE["Password"];
    } else {
        $CooMail = "";
        $CooPass = "";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>T&M | Đăng nhập</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!--Fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

</head>

<body class="background-login">
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-4 m-auto form-login" method="post" role="form" action="../controller/LoginAccess.php">
                <!-- Email input -->
                <div class="mb-4">
                    <label class="form-label" for="mail-login">Email</label>
                    <input value="<?= $CooMail ?>" name="mail" type="email" id="mail-login" class="form-control" placeholder="Nhập địa chỉ email" />
                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["loginMailEmpty"]) ? $_SESSION["loginMailEmpty"] : ""; ?></span>
                    </div>
                </div>

                <!-- Password input -->
                <div class="mb-4">
                    <label class="form-label" for="pass-login">Password</label>
                    <input value="<?= $CooPass ?>" name="password" type="password" id="pass-login" class="form-control" placeholder="Nhập mật khẩu" />
                    <div>
                        <span class="text-danger small"><?= isset($_SESSION["loginPassEmpty"]) ? $_SESSION["loginPassEmpty"] : ""; ?></span>
                    </div>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input name="remember" class="form-check-input" type="checkbox" value="checked" id="check-remember" checked />
                            <label class="form-check-label" for="check-remember">Remember me</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Simple link -->
                        <a class="text-decoration-none" href="forgot.php">Quên mật khẩu?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-success btn-color btn-block mb-4">ĐĂNG NHẬP</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Chưa có tài khoản?<a class="text-decoration-none" href="register.php"> Đăng kí</a></p>
                    <p>hoặc đăng nhập với:</p>
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
<?= include_once "frame/ShowDialog.php"?>