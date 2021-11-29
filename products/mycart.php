 <?php 
  //  include 'productheader.php';
?> 


<?php
session_start();
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="vi">
    <title>Fitfood VN</title>
    <link href="./../fonts/Montserrat.css" rel="stylesheet">
    <link rel="icon" href="./../images/product/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="./../css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../css/style.css">
    <style>
        @media only screen and (max-width: 767.98px) { 
            .bill-header{
                display: none;
            }
         }

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="index.php"><img src="./../images/product/logo-fitfood.png" alt="" /></a>


            <div class="collapse navbar-collapse " id="main-navigation">
                <ul class="nav navbar-nav mr-auto ml-xl-auto order-2 order-xl-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./carts.php">
                            Đặt hàng
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../news.php">
                            Tin tức
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../FAQs.php">
                            FAQs
                        </a>
                    </li>
                </ul>
                <?php 


           
if(isset($_SESSION['Login'])&&($_SESSION['Login'] == true)){
    echo "<ul class='nav navbar-nav navbar-sub flex-row order-1 order-xl-0 '>
    <li class='user-nav d-flex'>
        <a href='https://fitfood.vn/profile/account'>
            <div class='avatar' style='background-image:url();'></div>
        </a>

        <div class='dropdown'>
            <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
               <img src='https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg' width='40' height='40' class='rounded-circle'>
            </a>

            <ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                <li><a class='dropdown-item' href='#'>Action</a></li>
                <li><a class='dropdown-item' href='#'>Another action</a></li>
                <li><hr class='dropdown-divider'></li>
                <li><form method='post' action='../index.php'>
                 <input type='submit' name='Logout'     value='Đăng xuất'/>
                </form>
                </li>
            </ul>
        </div>
    </li>
</ul>";
}else{

    echo "<ul class='nav navbar-nav navbar-sub order-1 order-xl-0 '>                
    <li class='nav-item'><a id='btn-register' class='nav-link' href='./register.php'>Đăng ký</a></li>
    <li class='nav-item '><a id='btn-login' class='nav-link' href='./login.php'>Đăng nhập</a></li>
    </ul>";
}
    ?>
            </div>
        </div>

    </nav>


    <div class="container top-inner">

        <div class="bill-header row text-center" style="border-bottom:1px solid black">
            <h5 class="text-danger col-md-6">Tên sản phẩm</h5>
            <h5 class="col-md-2 text-dark">Dơn giá</h5>
            <h5 class="col-md-1 text-dark">số lượng</h5>
            <h5 class="col-md-3 text-dark">Thành tiền</h5>
        </div>
        <div class="row">   
            <div class="col-md-3">
                <img src="https://fitfood.vn/img/500x315/images/fitpack-chickenbox-16374709302476.jpg" alt="" >
            </div> 
            <div class="text-dark col-md-3">combo uc gà</div>
            <h6 class="col-md-6 ">100000</h6>
        
            
            
        </div>

    </div>



<?php 
    include 'productfooter.php';
?>