<?php
session_start();
?>

<?php

    if(isset($_POST['Logout'])){
        // remove cookie
        // if(isset($_COOKIE[session_name()])){
        //     setcookie(session_name(),'',time() - 3600, '/');
        // }

        // unset data in $_SESSION
        //$_SESSION[] = array();

        // destroy the session
        //session_destroy();
        unset($_POST['Logout']);
        //header('Location: index.php');
        unset($_POST);
        unset($_SESSION['Id']);
        unset($_SESSION['UserAccount']);
        unset($_SESSION['UserName']);
        unset($_SESSION['UserEmail']);
        unset($_SESSION['UserAdmin']);
        unset($_SESSION['UserImage']);
        unset($_SESSION['UserPhone']);
        unset($_SESSION['Login']);
    }


include './inc/header.php';
//ahfiashd jflasdj flasj alkdj sklfjal
?>

<?php 
    //connect get data
    //if(!isset($_SESSION['food_arr_price'])){
        $dbservername = "localhost";
        $dbusername = "root";
        $dbname = "fitfooddb";
        $loginsuccess = false;
        $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
        if (!$connection) {
            echo "kết nối với csdl thất bại: " . mysqli_connect_error();
            exit;
        }

        $sql_query="SELECT food_name,food_price FROM food";
        $query_result = mysqli_query($connection, $sql_query);

        $_SESSION['food_arr_price']=array();
        if(mysqli_num_rows($query_result)>0){
            while ($row = mysqli_fetch_assoc($query_result)) {
                $_SESSION['food_arr_price'][$row['food_name']]=$row['food_price'];
            }
            mysqli_free_result($query_result);
        }


        mysqli_close($connection);
    //}
    

?>

<?php 
  function autoChangeFoodLing(){
    $rannum=rand(1,4);
    $rannum=$rannum%4;
    if($rannum==1){
      echo "./products/fit1.php";
    }
    else if($rannum==2){
      echo "./products/fit2.php";
    }
    else if($rannum==3){
      echo "./products/fit3.php";
    }
    else{
      echo "./products/fitfull.php";
    }
  }
?>

<div class="main" role="main">

    <!-- main slider -->
    <div id="main-banner" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#main-banner" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#main-banner" data-bs-slide-to="1"></li>
            <li data-bs-target="#main-banner" data-bs-slide-to="2"></li>
            <li data-bs-target="#main-banner" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/product/1920x800/slider-1-1.jpg" alt="First slide" class="img-responsive">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="title title-center">
                            <small>Kế hoạch bữa ăn hàng tuần cho </small> một lối sống lành mạnh
                        </h1>
                        <a href="<?php autoChangeFoodLing()?>" class="btn btn-danger">Đặt Ngay</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/product/1920x800/slider-1-2.jpg" alt="Second slide" class="img-responsive">
                <div class="container">
                    <div class="carousel-caption ">
                        <h1 class="title title-center">
                            Trải nghiệm bữa ăn sạch <small>tươi ngon giàu dinh dưỡng</small>
                        </h1>
                        <a href="<?php autoChangeFoodLing()?>" class="btn btn-danger">Đặt Ngay</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide " src="images/product/1920x800/slider-1-3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption ">
                        <h1 class="title title-center">
                            <small>Nhà cung cấp bữa ăn sạch</small>lớn nhất Sài Gòn
                        </h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="fourth-slide" src="images/product/1920x800/slider-1-4.jpg" alt="Fourth slide">
                <div class="container">
                    <div class="carousel-caption ">
                        <h1 class="title title-center">
                            Giải pháp Eat Clean <small>giao tận nơi</small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main about -->
    <section class="main-about">
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-md-7 order-last order-md-first">
                    <img src="images/product/img-about-mobile.png" alt="" class="img-fluid" />
                </div>
                <div class="col-md-5 col-lg-4 text-white">
                    <h2 class="title pb-4 mb-4">About</h2>
                    <p>Fitfood VN cung cấp các phần ăn lành mạnh hàng tuần giúp bạn duy trì một lối sống khỏe.
                        Chúng
                        tôi tập trung vào chế độ ăn cân bằng được thiết kế chuyên biệt để hỗ trợ bạn kiểm soát
                        cân
                        nặng một cách hiệu quả nhất.
                    </p>
                    Nếu bạn đang tìm kiếm những bữa ăn ngon và tốt cho sức khỏe được chuẩn bị sẵn ở Saigon thì
                    Fitfood là một lựa chọn tối ưu. Thực đơn đa dạng với hơn 100 món của chúng tôi có thể giúp
                    bạn
                    thưởng thức mà không ngán trong hơn 1 tháng.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- how it work -->
    <section class="how-it-work">
        <div class="container-fluid">
            <h2 class="title title-center pb-4 mb-5">Cách đặt hàng</h2>
            <div class="row">
                <div class="offset-xl-1 col-xl-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="item">
                                <i class="fal fa-ballot-check"></i>
                                <h5>Chọn Gói Ăn</h5>
                                <p>Chọn gói ăn phù hợp với nhu cầu của bạn và điền đầy đủ thông tin giao hàng
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="item">
                                <i class="fal fa-mitten"></i>
                                <h5>Fitfood nấu</h5>
                                <p>Chúng tôi lựa chọn những nguyên liệu tốt nhất và nấu trong bếp công nghiệp
                                    hiện
                                    đại</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="item">
                                <i class="fal fa-shipping-fast"></i>
                                <h5>Giao hàng</h5>
                                <p>Đội ngũ giao hàng của Fitfood sẽ giao tận nơi các phần ăn cho bạn mỗi ngày
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="item">
                                <i class="fal fa-utensils"></i>
                                <h5>Thưởng thức</h5>
                                <p>Không cần suy nghĩ, shopping hay nấu nướng dầu mỡ, chỉ cần hâm và thưởng
                                    thức!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured product -->
    <section class="featured-product bg-danger">
        <div class="container-fluid">
            <h2 class="title title-center pb-4 mb-4 text-white">Sản phẩm tiêu biểu</h2>
            <p class="des mb-5 text-center text-white">Fitfood cung cấp nhiều gói ăn và thực phẩm dùng kèm đa dạng phù hợp với mọi nhu
                cầu của bạn</p>
            <div class="products">
                <ul class="bxslider">
                    <li>
                        <a href="./products/fitfull.php" class="link">
                            <div class="card">                            
                                <img src="images/product/500x315/full.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">Gói FULL
                                        <span> <?php  echo number_format($_SESSION['food_arr_price']['GOI FIT FULL']);?> đ</span>
                                    </h5>
                                    <p class="card-text">Gói SÁNG - TRƯA - TỐI. Ăn cả ngày phù hợp cho người bận
                                        rộn
                                    </p>
                                </div>                            
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="./products/fit3.php" class="link">
                               <div class="card">
                                <img src="images/product/500x315/fit3.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">Gói FIT 3
                                        <span><?php  echo number_format($_SESSION['food_arr_price']['GOI FIT 3']);?> đ</span>
                                    </h5>
                                    <p class="card-text">Gói TRƯA - TỐI. *Best Seller, Thích hợp cho dân văn
                                        phòng
                                    </p>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="./products/fit1.php"  class="link">
                            
                            <div class="card">
                                <img src="images/product/500x315/fit1.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">Gói FIT 1
                                        <span><?php  echo number_format($_SESSION['food_arr_price']['GOI FIT 1']);?> đ</span>
                                    </h5>
                                    <p class="card-text">Gói SÁNG - TRƯA. Dành thời gian dùng bữa tối cùng gia
                                        đình
                                    </p>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="./products/fit2.php" class="link">
                            
                            <div class="card">
                                <img src="images/product/500x315/fit2.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">Gói FIT 2
                                        <span><?php  echo number_format($_SESSION['food_arr_price']['GOI FIT 2']);?> đ</span>
                                    </h5>
                                    <p class="card-text">Gói SÁNG - TỐi. Ăn trưa cùng bạn bè đồng nghiệp văn
                                        phòng
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="https://fitfood.vn/product/meat-s" class="link">

                            <div class="card">
                                <img src="images/product/500x315/meat-s.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">Gói MEAT-S
                                        <span><?php  echo number_format($_SESSION['food_arr_price']['GOI MEAT-S']);?>đ</span>
                                    </h5>
                                    <p class="card-text">Gói MEAT thêm phần ăn sáng thường. Tập luyện cường độ
                                        nặng
                                    </p>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="https://fitfood.vn/product/meat" class="link">

                            <div class="card">
                                <img src="images/product/500x315/meat.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">Gói MEAT
                                        <span><?php  echo number_format($_SESSION['food_arr_price']['GOI MEAT']);?> đ</span>
                                    </h5>
                                    <p class="card-text">Gói TRƯA - TỐI. Dành cho dân Gym. Gấp đôi đạm và rau
                                        củ.
                                    </p>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="https://fitfood.vn/product/veg" class="link">

                            <div class="card">
                                <img src="images/product/500x315/veg.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">Gói CHAY
                                        <span><?php  echo number_format($_SESSION['food_arr_price']['GOI CHAY']);?> đ</span>
                                    </h5>
                                    <p class="card-text">Gói CHAY menu riêng 2 bữa. Nấu theo phong cách Âu</p>

                                </div>
                            </div>
                        </a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </section>
    <!-- environmental friendly -->
    <section class="environmental">
        <div class="container">
            <h2 class="title title-center pb-4 mb-5">Chung tay bảo vệ Môi trường</h2>
            <div class="row">
                <div class="col-md-4 item">
                    <img src="images/product/346x248/tui ni long.jfif" alt="" border="0" class="img-fluid" />
                    <p class="text-center">Nhà cung cấp duy nhất sử dung túi Nylon sinh học tự hủy thân thiện với môi trường</p>
                </div>
                <div class="col-md-4 item">
                    <img src="images/product/346x248/hop nhua.jfif" alt="" border="0" class="img-fluid" />
                    <p class="text-center">Rửa sạch lại hộp nhựa đen để nhận hoàn tiền 10,000 cho mỗi 10 hộp</p>
                </div>
                <div class="col-md-4 item">
                    <img src="images/product/346x248/muong dia.jfif" alt="" border="0" class="img-fluid" />
                    <p class="text-center">Fitfood chỉ cung cấp 01 bộ muỗng nĩa mỗi ngày để giảm thiểu rác thải nhựa</p>
                </div>
            </div>
        </div>
    </section>
    <!-- partners -->
    <section class="partners">
        <div class="container">
            <h2 class="title title-center pb-4 mb-4">Đối tác</h2>
            <p class="text-center">Chúng tôi hợp tác với các nhà cung cấp hàng đầu để đảm bảo chất lượng trải
                nghiệm
                tốt nhất</p>
            <div class="text-center">
                <div class="row">
                    <div class="col-2">
                        <img src="images/product/300x0/logo-star-kombucha.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-H&H.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-megamarket.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-payoo.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-nakayama.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-jafpa.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-vineco.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-fitness.png" alt="" border="0" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="images/product/300x0/logo-cch.png" alt="" border="0" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include './inc/footer.php'
?>