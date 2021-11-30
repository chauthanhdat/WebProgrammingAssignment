<?php
include 'productheader.php';
?>

<?php  //chưa đăng nhập
if (!isset($_SESSION['Login']) || $_SESSION['Login'] == false) {
?>
  <div class=" container bg-white top-inner" id="warning">
    <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 bg-white" style="background-image: url('../images/user_avatar/warningPage.jpg');height: 100vh;
                background-repeat: no-repeat;
                background-position: center; 
          ">
      <h2 class="mt-0 title title-center">Hãy đăng nhập để tiến hành đặt hàng </h2>
      <a href="../login.php" class="btn btn-danger btn-sm " role="button">Đăng nhập nào!</a>
    </div>
  </div>



<?php } else {  //da dang nhap 
?>

  <!--kết nối đến DB kiểm tra giỏ hàng xem có rỗng hay không, nếu có thì sâu rỗng nếu không thì sâu ko rỗng-->
  <?php
  $dbservername = "localhost";
  $dbusername = "root";
  $dbname = "fitfooddb";
  $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
  if (!$connection) {
    echo "kết nối với csdl thất bại: " . mysqli_connect_error();
    exit;
  }

  $user_id = $_SESSION['Id'];
  $sql_query = "SELECT `cart_id`,`cart_price` FROM `cart` WHERE `cart_ur_id`= $user_id AND `cart_delivered`= 0;";
  //echo "<br><br><br><h1>$sql_query</h1>";
  $query_result = mysqli_query($connection, $sql_query);
  $num_of_cart_not_delivery = mysqli_num_rows($query_result);
  $cart_info = [];
  if ($num_of_cart_not_delivery > 0) {
    while ($row = mysqli_fetch_assoc($query_result)) {
      $cart_info['cart_id'] = $row['cart_id'];
      $cart_info['cart_price'] = $row['cart_price'];
    }
    $cart_info['cart_ur_id'] = $_SESSION['Id'];
  }

  // Close connection
  mysqli_close($connection);
  ?>


  <?php
  //khi submit form chinh so luong san phan
  if (isset($_POST['change_num_it'])) {
    $temp_cart_id = $_POST['cart-id-hd'];
    $temp_ur_id = $_SESSION['Id'];


    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
      echo "kết nối với csdl thất bại: " . mysqli_connect_error();
      exit;
    }
    $temp_num_row = sizeof($_SESSION['food_list']);
    //echo "<h1><br><br>$temp_num_row</h1>";
    //echo "<h1><br><br><br><br>$temp_cart_id</h1>";
    for ($i = 0; $i < $temp_num_row; $i++) {
      //echo "<h1><br><br><br><br>{$_SESSION['food_list'][1]}</h1>";
      $temp = $_SESSION['food_list'][$i];
      //  echo "<h1><br><br><br><br>$temp</h1>";
      // echo "<h1><br><br><br><br>$_POST[$temp]</h1>";
      $temp_num = $_POST[$temp];

      $sql_query = "UPDATE `cart_it` set `num`= $temp_num where crt_id= $temp_cart_id and fd_name ='$temp';";
      $query_result = mysqli_query($connection, $sql_query);
    }

    unset($_POST['change_num_it']);
    //unset($_POST['cart-id-hd']);

    mysqli_close($connection);
  }

  ?>


  <?php
  // xoa item trong cart
  if (isset($_POST['delete_it_bt'])) {
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
      echo "kết nối với csdl thất bại: " . mysqli_connect_error();
      exit;
    }
    $temp_cart_id = $_POST['delete_cart_id_it'];
    $temp_food_name = $_POST['delete_cart_name_it'];
    // echo "<h1><br><br>$temp_cart_id</h1>";
    // echo "<h1><<br>$temp_food_name</h1>";
    $sql_query = " DELETE FROM `cart_it` WHERE `crt_id` = $temp_cart_id and `fd_name`= '$temp_food_name';";
    // echo "<h1><<br>$sql_query</h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['delete_it_bt']);
    mysqli_close($connection);
  }
  ?>

  <?php
  function get_food_link($food_name)
  {
    if ($food_name == 'GOI FIT 1') {
      return './fit1.php';
    } else if ($food_name == 'GOI FIT 2') {
      return './fit2.php';
    } else if ($food_name == 'GOI FIT 3') {
      return './fit3.php';
    } else if ($food_name == 'GOI FIT FULL') {
      return './fitfull.php';
    } else if ($food_name == 'CHICKEN BOX') {
      return './boxchicken.php';
    } else if ($food_name == 'CHICKEN PACK') {
      return './packchicken.php';
    } else if ($food_name == 'BURGER') {
      return './burger.php';
    } else if ($food_name == 'SWEETIE') {
      return './sweetie.php';
    } else if ($food_name == 'GREENIE') {
      return './greenie.php';
    } else if ($food_name == 'KOMBUCHA') {
      return './kombucha.php';
    } else if ($food_name == 'HEALTHY') {
      return './healthy.php';
    } else if ($food_name == 'BEAUTY') {
      return './beauty.php';
    } else if ($food_name == 'BANH QUY') {
      return './banhquy.php';
    } else if ($food_name == 'TEMPEH') {
      return './tempeh.php';
    }
  }

  function get_img_link($food_name)
  {
    if ($food_name == 'GOI FIT 1') {
      return 'https://fitfood.vn/img/326x206/images/fit1-15815879666463.jpg';
    } else if ($food_name == 'GOI FIT 2') {
      return 'https://fitfood.vn/img/326x206/images/fit2-15815881455314.jpg';
    } else if ($food_name == 'GOI FIT 3') {
      return 'https://fitfood.vn/img/326x206/images/fit3-2-15831416118117.jpg';
    } else if ($food_name == 'GOI FIT FULL') {
      return 'https://fitfood.vn/img/326x206/images/full-15815879566674.jpg';
    } else if ($food_name == 'CHICKEN BOX') {
      return 'https://fitfood.vn/img/326x206/images/fitpack-chickenbox-16374709302476.jpg';
    } else if ($food_name == 'CHICKEN PACK') {
      return 'https://fitfood.vn/img/326x206/images/6chicken-16374707869418.jpg';
    } else if ($food_name == 'BURGER') {
      return 'https://fitfood.vn/img/326x206/images/burger-16374709014232.jpg';
    } else if ($food_name == 'SWEETIE') {
      return 'https://fitfood.vn/img/326x206/images/fit-web-combo-sweetie-new-15985103893515.jpg';
    } else if ($food_name == 'GREENIE') {
      return 'https://fitfood.vn/img/326x206/images/fit-web-combo-greenienew-15985103974998.jpg';
    } else if ($food_name == 'KOMBUCHA') {
      return 'https://fitfood.vn/img/326x206/images/fit-combo-500x315-16009329054581.jpg';
    } else if ($food_name == 'HEALTHY') {
      return 'https://fitfood.vn/img/326x206/images/fit-snacks-500x315-8-15777698599208.jpg';
    } else if ($food_name == 'BEAUTY') {
      return 'https://fitfood.vn/img/326x206/images/fit-snacks-500x315-9-15826438436664.jpg';
    } else if ($food_name == 'BANH QUY') {
      return 'https://fitfood.vn/img/326x206/images/fit-snacks-500x315-2-15777698786894.jpg';
    } else if ($food_name == 'TEMPEH') {
      return 'https://fitfood.vn/img/326x206/images/fit-snacks-500x315-5-1577769905295.jpg';
    } else if ($food_name == 'GOI MEAT-S') {
      return 'https://fitfood.vn/img/326x206/images/meat-s-15815882837148.jpg';
    } else if ($food_name == 'GOI MEAT') {
      return 'https://fitfood.vn/img/326x206/images/meat-15814245934955.jpg';
    } else if ($food_name == 'GOI CHAY') {
      return 'https://fitfood.vn/img/326x206/images/veg-15815881790216.jpg';
    }
  }
  ?>

  <?php if ($num_of_cart_not_delivery > 0) { ?>

    <!-- có dữ liệu  -->
    <div class="main">
      <section class="top-inner">
        <div class="container">
          <!-- Shopping cart table -->
          <div class="card">
            <div class="card-header text-dark">
              <h2>THÔNG TIN ĐƠN HÀNG</h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered m-0">
                  <thead id='list-cart-title'>
                    <tr>
                      <!-- Set columns width -->
                      <th class="text-center py-3 px-4" style="min-width: 320px;">Tên sản phẩm &amp; Details</th>
                      <th class="text-right py-3 px-4" style="width: 100px;">Đơn giá</th>
                      <th class="text-center py-3 px-4" style="width: 150px;">Số lượng</th>
                      <th class="text-right py-3 px-4" style="width: 150px;">Thành tiền</th>
                      <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php
                    $dbservername = "localhost";
                    $dbusername = "root";
                    $dbname = "fitfooddb";
                    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
                    if (!$connection) {
                      echo "kết nối với csdl thất bại: " . mysqli_connect_error();
                      exit;
                    }

                    $sql_query = "SELECT fd_id ,crt_id ,fd_name ,num,food_price,cart_price FROM cart_it,food,cart where crt_id = {$cart_info['cart_id']} and fd_id=food_id and crt_id=cart_id ;";
                    $query_result = mysqli_query($connection, $sql_query);
                    if (mysqli_num_rows($query_result) > 0) {
                      $i = 1;
                      $_SESSION['food_list'] = array();
                      echo "<form action='' method='post'  name='confirm_cart' id='confirm_cart'></form>";
                      while ($row = mysqli_fetch_assoc($query_result)) {
                        $price_cart = $row['cart_price'];
                        $_SESSION['food_list'][$i - 1] = $row['fd_name'];
                        echo "                          
                        <tr>
                          <td class='p-4 '>
                            <div class='media align-items-center mx-auto'>
                              <img src=' " . get_img_link($row['fd_name']) . "'  class='mx-auto d-block cart-img'   alt=''>
                              <div class='media-body'>
                                <a href='" . get_food_link($row['fd_name']) . "' class='d-block cart-title text-center'>" . $row['fd_name'] . "</a>
                                
                              </div>
                            </div>
                          </td>
                          <td class='text-right font-weight-semibold align-middle p-4 text-success'  >" . $row['food_price'] . "</td>
                          <td class='align-middle p-4 ' ><input name='" . $row['fd_name'] . "' form='confirm_cart' id='product-" . $i . "' type='number' class='form-control text-center' min='1' value='" . $row['num'] . "' onchange='change_value(\"product-" . $i . "\");' ></td>
                          <td class='text-right font-weight-semibold align-middle p-4 text-danger' >" . ($row['food_price'] * $row['num']) . "VND</td>
                          <td class='text-center align-middle px-0'>
                            <form action='' method='post'  name='delete_it' id='delete_it'>
                              <input type='hidden' id='delete-cart-id-hidden' name='delete_cart_id_it' value='" . $cart_info['cart_id'] . "'>
                              <input type='hidden' id='delete-cart-name-hidden' name='delete_cart_name_it' value='" . $row['fd_name'] . "'>
                              <button type='submit' class='btn btn-lg btn-danger'  name='delete_it_bt' >Xóa</button>
                            </form>
                          </td>
                        </tr>";
                        $i++;
                      }
                    }

                    mysqli_close($connection);
                    ?>



                  </tbody>
                </table>
              </div>


              <!-- / Shopping cart table -->
              <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">

                <div class="mt-4">
                  <label class="text-muted font-weight-normal">Mã giảm giá</label>
                  <input type="text" placeholder="Nhập mã giảm giá ..." class="form-control">
                </div>

                <div class="d-flex">
                  <div class="text-right mt-4 me-5">
                    <label class="text-muted font-weight-normal m-0">Khuyến mại</label>
                    <div class="text-large text-success"><strong>0 VND</strong></div>
                  </div>

                  <div class="text-right mt-4">
                    <label class="text-muted font-weight-normal m-0">Thanh toán</label>
                    <div class="text-large text-danger" id="total-price-cart"><strong><?php echo $price_cart; ?> VND </strong></div>
                  </div>
                </div>
              </div>

              <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-lg btn-dark md-btn-flat mt-2 me-3" onclick="backtoshopping()">Quay lại Shopping</button>
                <input type="hidden" form='confirm_cart' id="cart-id-hidden" name="cart-id-hd" value="<?php echo $cart_info['cart_id']; ?>">
                <button type="submit" form='confirm_cart' class="btn btn-lg btn-danger mt-2" name="change_num_it">Xác nhận đơn hàng</button>
              </div>


            </div>
          </div>
        </div>
      </section>
    </div>

  <?php } else { ?>
    <!-- ko dữ liệu có  -->
    <div class="top-inner"></div>
    <h1 class="title-center py-3">Chưa có dữ liệu</h1>
  <?php } ?>

<?php } //footer after this  
?>

<div class="footer bg-dark">
  <div class="container-fluid ">
    <a href="./../index.php" class="mb-4 d-block">
      <img src="./../images/product/logo-fitfood.png" alt="" border="0" />
    </a>
    <div class="widget-footer mb-4">
      <div class="row">
        <div class="col-md-6 mb-3">
          <h4>Công ty TNHH Fitfood</h4>
          <p>
            <strong>Địa chỉ</strong> 33 Đường 14, KDC Bình Hưng, Ấp 2, Huyện Bình Chánh, TPHCM<br />
            <strong>Điện thoại</strong> (+84) 932 788 120 [hotline] - (+84) 938 074 120 [sms]<br />
            <strong>Email</strong> info@fitfood.vn. For business inquiries:
            business@fitfood.vn<br />
            <strong>MST</strong> 0313272749 do Sở kế hoạch và đầu tư TPHCM cấp ngày 26/05/2015
          </p>
        </div>
        <div class="col-md-3 mb-3">
          <h4>Điều khoản chung</h4>
          <ul>
            <li><a href="./../article/term.php">Chính Sách Quy Định Chung</a></li>
            <li><a href="./../article/term.php">Quy Định Hình Thức Thanh Toán</a></li>
            <li><a href="./../article/term.php">Chính Sách Vận Chuyển Giao Hàng</a></li>
            <li><a href="./../article/term.php">Chính Sách Bảo Mật Thông Tin</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-3">
          <h4>Follow us</h4>
          <div class="social mb-3">
            <a href="#" target="_blank">
              <img src="../images/product/ic-fb.png" alt="" border="0" />
            </a>
            <a href="#" target="_blank">
              <img src="../images/product/ic-instagram.png" alt="" border="0" />
            </a>
            <a href="#" target="_blank">
              <img src="../images/product/ic-youtube.png" alt="" border="0" />
            </a>
          </div>
          <div>
            <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=34289">
              <img src="../images/product/logo-bocongthuong.png" alt="" border="0" width="120px" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <p class="copyright mb-0">© Copyright Fitfood.</p>
  </div>
</div>


<style>
  @media only screen and (max-width: 766px) {
    body {
      background-color: red;
    }

    #list-cart-title tr th {
      display: none;
    }

  }
</style>


<script>
  function cal_price_by_id(id) {
    let value = document.getElementById(id).value;
    if (value < 0) {
      document.getElementById(id).value = -1 * value;
      value = value * (-1);
    } else if (value == 0) {
      document.getElementById(id).value = 1;
      value = 1;
    }
    let dongia = document.getElementById(id).parentNode.previousElementSibling.innerHTML;
    dongia = dongia.replace(/[^\d\.\-]/g, ""); //loạt bỏ ,
    let _dongia = parseFloat(dongia);
    let thanhtien = value * _dongia;
    return thanhtien;

  }

  function total_price_change(id) {
    let price_change = cal_price_by_id(id);
    id = id.toString();
    let id_prefix = id.slice(0, id.length - 1);
    //console.log(price_change);
    let numOfTR = document.getElementsByTagName('tr').length;
    let sum = price_change;
    for (let i = 1; i < numOfTR; i++) {
      let id_temp = id_prefix + i;
      id_temp = id_temp.toString();
      if (id_temp != id) {
        let sum_temp = cal_price_by_id(id_temp);
        sum = sum + sum_temp;
      }

    }
    document.getElementById('total-price-cart').innerHTML = "<strong>" + sum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " VND </strong>";

  }



  function backtoshopping() {
    window.location.href = '../index.php';
  }


  function change_value(e) {
    let a = e;
    //document.getElementById('temppp').innerHTML =e;
    //console.log(typeof e);
    myfunction(a);
    total_price_change(a);
  }


  function myfunction(e) {
    let value = document.getElementById(e).value;
    if (value < 0) {
      document.getElementById(e).value = -1 * value;
      value = value * (-1);
    } else if (value == 0) {
      document.getElementById(e).value = 1;
      value = 1;
    }

    //let x=document.getElementById(e).parentNode.nextElementSibling.id;
    let dongia = document.getElementById(e).parentNode.previousElementSibling.innerHTML;
    dongia = dongia.replace(/[^\d\.\-]/g, ""); // You might also include + if you want them to be able to type it
    var num = parseFloat(dongia);
    let thanhtien = value * num;
    document.getElementById(e).parentNode.nextElementSibling.innerHTML = thanhtien.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " VND";
    //document.getElementById('temp').innerHTML=num;
    // document.getElementById('temp').innerHTML=num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    // let dongia=inp.previousSibling.innerHTML

    // let dongia=parseFloat(dongia);

    //  function toArray(arraylike) {
    //       var array= new Array(arraylike.length);
    //       for (var i= 0, n= arraylike.length; i<n; i++)
    //           array[i]= arraylike[i];
    //       return array;
    //   }

  }
  //  function check_login(){

  //     if (login_js==0){ //chưa dăng nhpa65
  //         alert('bạn cần phải đăng nhập trước');
  //         return false;
  //     }
  //     else{
  //         return true;
  //     }
  // }
</script>



<script src="./../js/jquery-3.6.0.min.js"></script>
<script src="./../js/bootstrap.bundle.min.js"></script>
<script src="./../js/jquery.bxslider.js"></script>
<script src="./../js/jquery.cookie.js"></script>
<script src="./../js/main.js"></script>




</body>

</html>