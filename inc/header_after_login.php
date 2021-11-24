<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="vi">
    <title>Fitfood VN</title>
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
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
                        <a class="active nav-link" href="index.php">
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
                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <img alt="admin avartar" src="https://1.bp.blogspot.com/-TuCsF01fE2M/XroLo8YnPeI/AAAAAAAAlhk/szLN8QjJ918lHUB848AdNqfe36VuN0gtQCLcBGAsYHQ/s1600/hinh-nen-de-thuong-mau-hong-pink-anime-girl.png" width="50px" height="50px">
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">item1</a></li>
                  <li><a class="dropdown-item" href="#">item2</a></li>
                  <li><a class="dropdown-item" href="#">item3</a></li>
                </ul>
                </ul>
            </li>

            </div>
        </div>

    </nav>