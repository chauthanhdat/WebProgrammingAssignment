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
            $food_name="SWEETIE";
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
                <img src="https://fitfood.vn/img/326x206/images/fit-web-combo-sweetie-new-15985103893515.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-dark">FITFOOD JUICE SWEETIE </h3>
                <div class="d-flex mb-3">
                    <h4 class="text-dark me-3">GIÁ:</h4>
                    <h4 class="text-danger"><?php  echo number_format($_SESSION['food_arr_price']['SWEETIE']);?> VND</h4>
                </div>
                <div class="content-food mb-1">
                    <p>5 Chai/Tuần</p>
                    <p>Nếu bạn yêu thích sự tươi mát và vị ngọt tự nhiên từ trái cây, hãy chọn Set FITFOOD JUICE SWEETIE</p>
                    <p>Set nước FITFOOD JUICE sẽ được giao kèm phần ăn mỗi buổi sáng các ngày trong tuần.</p>
                    <ul>COMBO SWEETIE bao gồm 05 chai sau: </ul>
                    <li>Minty Melon: Dưa hấu, lá bạc hà, chanh vàng. Giúp bù nước, đẹp da, 
                    cải thiện thị giác, tăng khả năng tiêu hóa.</li>
                    <li>Celery ananas: carrot, thơm, cần tây. Giảm hàm lượng cholesterol 
                    cao trong cơ thể, giảm viêm, bổ mắt, ngăn ngừa ung thư, hỗ trợ hệ 
                    tiêu hoá, giảm chứng cao huyết áp.</li>
                    <li>Passion Lemongrass: sả, dưa leo, chanh dây. Tốt cho hệ tiêu hoá, 
                    ngăn ngừa ung thư, cung cấp chất chống oxi hoá cho cơ thể, ngừa bệnh 
                    hô hấp, bảo vệ tim mạch.</li>
                    <li>Green Detox: Dưa leo, bạc hà, cải bó xôi, táo đỏ, thơm. Giúp kháng 
                    viêm, giải độc gan, tăng sức khỏe răng miệng, chống oxy hóa, giàu chất 
                    xơ hỗ trợ ăn kiêng.</li>
                    <li>Pinky Chia: ổi hồng, thơm, hạt chia. Tăng cường hệ miễn dịch, tốt 
                    cho tim mạch,  hỗ trợ hệ tiêu hoá, giảm chứng cao huyết áp, thải độc cơ thể.</li>
                    <p> <i>*** Các sản phẩm của FITFOOD JUICE được làm từ công nghệ ép 
                    lạnh cao cấp, giúp giữ nguyên hương vị và đảm bảo dinh dưỡng. Đảm bảo 
                    nguyên chất 100% và cam kết không đường.</i></p>
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