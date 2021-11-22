<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="vi">
    <title>Fitfood VN</title>
    <link rel="icon" href="/images/product/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="fonts/Montserrat.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="index.php"><img src="images/product/logo-fitfood.png" alt="" /></a>


            <div class="collapse navbar-collapse " id="main-navigation">
                <ul class="nav navbar-nav mr-auto ml-xl-auto order-2 order-xl-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Đặt hàng
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="news.php">
                            Tin tức
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="FAQs.php">
                            FAQs
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-sub order-1 order-xl-0 ">
                    <!-- Chưa đăng nhập -->
                    <li class="nav-item"><a id="btn-register" class="nav-link" href="./register.php">Đăng ký</a></li>
                    <li class="nav-item "><a id="btn-login" class="nav-link" href="./login.php">Đăng nhập</a></li>
                </ul>
                <!-- Đã đăng nhập -->
                <ul class="nav navbar-nav navbar-sub flex-row order-1 order-xl-0 d-none">
                    <li class="user-nav d-flex">
                        <a href="https://fitfood.vn/profile/account">
                            <div class="avatar" style="background-image:url();"></div>
                        </a>
                        <div>
                            <br /><a href="https://fitfood.vn/logout">Thoát</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>