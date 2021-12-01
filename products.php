<?php 
session_start();

?>

<?php 
if(isset($_POST['change_price_fit1_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $price=$_POST['fit_price'];
    
    
    $sql_query ="UPDATE `food` SET `food_price`=$price WHERE `food_name`= 'GOI FIT 1';";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['change_price_fit1_bt']);
    mysqli_close($connection);

  }



  if(isset($_POST['change_price_fit2_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $price=$_POST['fit_price'];
    
    
    $sql_query ="UPDATE `food` SET `food_price`=$price WHERE `food_name`= 'GOI FIT 2';";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['change_price_fit2_bt']);
    mysqli_close($connection);

  }

  

  if(isset($_POST['change_price_fitfull_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $price=$_POST['fit_price'];
    
    
    $sql_query ="UPDATE `food` SET `food_price`=$price WHERE `food_name`= 'GOI FIT FULL';";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['change_price_fitfull_bt']);
    mysqli_close($connection);

  }



  if(isset($_POST['change_price_meat_s_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $price=$_POST['fit_price'];
    
    
    $sql_query ="UPDATE `food` SET `food_price`=$price WHERE `food_name`= 'GOI MEAT-S';";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['change_price_meat_s_bt']);
    mysqli_close($connection);

  }


  if(isset($_POST['change_price_meat_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $price=$_POST['fit_price'];
    
    
    $sql_query ="UPDATE `food` SET `food_price`=$price WHERE `food_name`= 'GOI MEAT';";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['change_price_meat_bt']);
    mysqli_close($connection);

  }



  if(isset($_POST['change_price_veg_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $price=$_POST['fit_price'];
    
    
    $sql_query ="UPDATE `food` SET `food_price`=$price WHERE `food_name`= 'GOI CHAY';";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['change_price_veg_bt']);
    mysqli_close($connection);

  }






?>
<!doctype html>
<html lang="en">
  <head>
  <title>adminPage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="lang" content="vi">
    <link rel="icon" href="/images/product/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="fonts/Montserrat.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
<?php
    include './inc/header_admin.php'
    ?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
            include './inc/sidebar_admin.php'
            ?>
            <div class="col-9 py-5 px-5">
                <!--Place content here-->
                <h2 class="title">
                    Có thể quản lí các sản phẩm trên website
                </h2>
                <ul>

                <li >
                    <img src="images/product/500x315/fit1.jpg" >
                    <form action="" method="post" id="change_price_fit1"> </form>
                        <input type="text" form="change_price_fit1" placeholder="nhap gia" name="fit_price">
                        <button type="submit" name="change_price_fit1_bt" form="change_price_fit1" class="btn btn-outline-dark ">đổi giá fit1</button>
                   
                </li>

                <li>
                    <img src="images/product/500x315/fit2.jpg" >
                    <form action="" method="post" id="change_price_fit2"> </form>
                        <input type="text" form="change_price_fit2" placeholder="nhap gia" name="fit_price">
                        <button type="submit" name="change_price_fit2_bt" form="change_price_fit2" class="btn btn-outline-dark ">đổi giá fit2</button>
                </li>

                <li>
                    <img src="images/product/500x315/full.jpg" >
                    <form action="" method="post" id="change_price_fitfull"> </form>
                        <input type="text" form="change_price_fitfull" placeholder="nhap gia" name="fit_price">
                        <button type="submit" name="change_price_fitfull_bt" form="change_price_fitfull" class="btn btn-outline-dark ">đổi giá fitfull</button>
                </li>

                <li>
                    <img src="images/product/500x315/meat-s.jpg" >
                    <form action="" method="post" id="change_price_meat_s"> </form>
                        <input type="text" form="change_price_meat_s" placeholder="nhap gia" name="fit_price">
                        <button type="submit" name="change_price_meat_s_bt" form="change_price_meat_s" class="btn btn-outline-dark ">đổi giá meat-s</button>
                </li>

                <li>
                    <img src="images/product/500x315/meat.jpg" >
                    <form action="" method="post" id="change_price_meat"> </form>
                        <input type="text" form="change_price_meat" placeholder="nhap gia" name="fit_price">
                        <button type="submit" name="change_price_meat_bt" form="change_price_meat" class="btn btn-outline-dark ">đổi giá meat</button>
                </li>

                <li>
                    <img src="images/product/500x315/veg.jpg" >
                    <form action="" method="post" id="change_price_veg"> </form>
                        <input type="text" form="change_price_veg" placeholder="nhap gia" name="fit_price">
                        <button type="submit" name="change_price_veg_bt" form="change_price_veg" class="btn btn-outline-dark ">đổi giá goi chay</button>
                </li>
                <li>...</li>
                </ul>







                <!--End content -->
            </div>
        </div>
    </div>








<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
