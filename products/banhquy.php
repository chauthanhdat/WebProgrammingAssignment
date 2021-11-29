

<?php 
    include 'productheader.php';
?>




<?php 

    //them vao gio hang
    if(isset($_POST['submit'])){
        $dbservername = "localhost";
        $dbusername = "root";
        $dbname = "fitfooddb";
        $loginsuccess = false;
        $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
        if (!$connection) {
            echo "kết nối với csdl thất bại: " . mysqli_connect_error();
            exit;
        }
        //kiem tra co gio hang chua
        $ur_id=mysqli_real_escape_string($connection,$_SESSION['Id']);
        $sql_query="SELECT `cart_id`,`cart_ur_id` from `cart` where  cart_ur_id={$_SESSION['Id']} AND cart_delivered=0";
        $query_result = mysqli_query($connection, $sql_query);
        $numcart = mysqli_num_rows($query_result);
        $i=0;
        if($numcart<=0){    // chưa có giỏ hàng
            $sql_query = "INSERT INTO `cart`( `cart_ur_id`) VALUES ({$_SESSION['Id']});";
            mysqli_query($connection, $sql_query);
        }
        //mysqli_real_escape_string
          // có giỏ hàng hoac sau khi da tao xong gio hang lấy id cua gio hang
        $da_giao=0; //0 = don chua giao - 1 = da giao
        //$da_giao=mysqli_real_escape_string($connection,$da_giao);
        $sql_query="SELECT `cart_id`,`cart_ur_id` from `cart` where  cart_ur_id={$_SESSION['Id']} AND cart_delivered={$da_giao}";
        //echo "<h1><br><br><br>$sql_query</h1>";
        $query_result = mysqli_query($connection, $sql_query);
        $numcart = mysqli_num_rows($query_result);
        $cart_info=[];
        while($row=mysqli_fetch_assoc($query_result)){
            if($i==($numcart-1)){
                $cart_info['cart_id']=$row['cart_id'];
                //echo "<h1><br><br><br>{$cart_info['cart_id']}</h1>";
            }
        }

        //     //lay thong tin ve food roi them vao;
            $food_name="BANH QUY";
            $food_name = mysqli_real_escape_string($connection, $food_name);
            $sql_query_select="SELECT `food_id`,`food_name`,`food_price` from `food` where  `food_name`='$food_name';";
            
        //     //mysqli_free_result($query_result);
            $query_result = mysqli_query($connection,$sql_query_select);
            $food_info=[];
            if( mysqli_num_rows($query_result)>0){
                while($row=mysqli_fetch_assoc($query_result)){
                    $food_info['food_id']=$row['food_id'];
                    $food_info['food_name']=$row['food_name'];
                    $food_info['food_price']=$row['food_price'];
                }
           }
        //   echo "<h1><br><br><br><br>{$food_info['food_id']}<br>{$food_info['food_name']}<br>{$food_info['food_price']}<br></h1>";
        //     // lấy id gio hang rồi thêm vào
            $price= $food_info['food_price'];
            $food_id=$food_info['food_id'];
            $cart_id=$cart_info['cart_id'];
            $food_name=$food_info['food_name'];
            $sql_query_select="SELECT `fd_id`, `crt_id` from `cart_it` where `fd_id`=$food_id and `crt_id`=$cart_id;";
            $query_result = mysqli_query($connection,$sql_query_select);

            if(mysqli_num_rows($query_result)<=0){
                $sql_query_insert ="INSERT INTO `cart_it`(`fd_id`, `crt_id`, `fd_name`, `num`, `it_tool`) VALUES ($food_id,$cart_id,'$food_name',1,$price);";
                //echo "<h1><br><br><br><br>{$sql_query_insert}</h1>";
                $query_result = mysqli_query($connection, $sql_query_insert);
            }


    }
   
?>

<div class="top-inner">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="https://fitfood.vn/img/326x206/images/fit-snacks-500x315-2-15777698786894.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-dark">COOKIE LÀNH MẠNH </h3>
                <div class="d-flex mb-3">
                    <h4 class="text-dark me-3">GIÁ:</h4>
                    <h4 class="text-danger"><?php  echo number_format($_SESSION['food_arr_price']['BANH QUY']);?> VND</h4>
                </div>
                <div class="content-food mb-1">
                    <p>175 Gram/Hộp</p>
                    <p>Liên tục nằm trong <b> BEST SELLER </b> của Fitfood, 
                    công thức bánh healthy cookie độc quyền mang lại một hương vị Cookie ngọt thanh ko lẫn vào đâu được.</p>
                    <p>Thành phần: bột yến mạch, muối hồng, maple syrup, 
                    bơ Anchor, baking soda, trứng, hạt dinh dưỡng, vỏ trái cây tươi.</p>
                    <p>Healthy Cookie giúp bổ sung năng lượng và cung cấp chất xơ 
                    cần thiết như một bữa ăn phụ mà vẫn không gây tăng cân. Mỗi 
                    hộp gồm 5 bánh cookie dùng trong 5 ngày. Mỗi bánh cookie 
                    (35g) cung cấp 110 Kcal. Cookie Fitfood có thể dùng như 
                    bữa xế mỗi ngày để bổ sung năng lượng hoặc cho các bạn có nhu cầu giảm cân an toàn.</p>
                    <p>Bạn đừng so sánh Cookie của Fitfood với các loại khác trên 
                    thị trường vì Cookie Fitfood không pha trộn bột mì hoặc sử dụng 
                    các nguyên liệu kém chất lượng. Fitfood đảm bảo bạn sẽ có một 
                    trải nghiệm khác biệt khi dùng sản phẩm Cookie đặc biệt của chúng tôi.</p>
                    <p> <i></i></p>
                </div>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name='add-to-cart' name="add-to-cart" onsubmit="return check_login()">
                <button type="submit" class="btn btn-danger" name="submit" >Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'productfooter.php';
?>