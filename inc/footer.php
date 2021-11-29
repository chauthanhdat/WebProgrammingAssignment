<?php

    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $loginsuccess = false;
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    
    $sql_query = "SELECT con_address, con_phone, con_email FROM contact_address";
    $query_result = mysqli_query($connection, $sql_query);
    
    
    while ($row = mysqli_fetch_assoc($query_result)) {
        $con_address=$row['con_address'];
        $con_phone=$row['con_phone'];
        $con_email=$row['con_email'];
    }
    mysqli_close($connection);
?>


<div class="footer bg-dark">
    <div class="container-fluid ">
        <a href="index.php" class="mb-4 d-block">
            <img src="images/product/logo-fitfood.png" alt="" border="0" />
        </a>
        <div class="widget-footer mb-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h4>Công ty TNHH Fitfood</h4>
                    <p>
                        <strong>Địa chỉ</strong> <?php echo $con_address ?> <br />
                        <strong>Điện thoại</strong><?php echo $con_phone ?><br />
                        <strong>Email</strong> <?php echo $con_email ?> <br />
                        <strong>MST</strong> 0313272749 do Sở kế hoạch và đầu tư TPHCM cấp ngày 26/05/2015
                    </p>
                </div>
                <div class="col-md-3 mb-3">
                    <h4>Điều khoản chung</h4>
                    <ul>
                        <li><a href="#">Chính Sách Quy Định Chung</a></li>
                        <li><a href="#">Quy Định Hình Thức Thanh Toán</a></li>
                        <li><a href="#">Chính Sách Vận Chuyển Giao Hàng</a></li>
                        <li><a href="#">Chính Sách Bảo Mật Thông Tin</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h4>Follow us</h4>
                    <div class="social mb-3">
                        <a href="#" target="_blank">
                            <img src="images/product/ic-fb.png" alt="" border="0" />
                        </a>
                        <a href="#" target="_blank">
                            <img src="images/product/ic-instagram.png" alt="" border="0" />
                        </a>
                        <a href="#" target="_blank">
                            <img src="images/product/ic-youtube.png" alt="" border="0" />
                        </a>
                    </div>
                    <div>
                        <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=34289">
                            <img src="images/product/logo-bocongthuong.png" alt="" border="0" width="120px" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright mb-0">© Copyright Fitfood.</p>
    </div>
</div>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/main.js"></script>

</body>

</html>