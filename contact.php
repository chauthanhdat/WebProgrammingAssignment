<!doctype html>
<html lang="en">
  <head>
    <title>login-form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
            <div class="col py-3">
                <!--Place content here-->
                

<div class="container mt-3">
                <h2>Sửa những thông tin trên footer</h2>
                <form class="form-horizontal" role="form">
                          <div class="form-group">
                          <label class="col-lg-3 control-label">Địa chỉ:</label>
                            <div class="col-lg-12">
                              <input class="form-control" type="text" value=" 33 Đường 14, KDC Bình Hưng, Ấp 2, Huyện Bình Chánh, TPHCM">
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="col-lg-3 control-label">Điện thoại:</label>  
                            <div class="col-lg-12">
                              <input class="form-control" type="text" value="(+84) 932 788 120 [hotline] - (+84) 938 074 120 [sms]">
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="col-lg-3 control-label">Email:</label>  
                            <div class="col-lg-12">
                              <input class="form-control" type="text" value="Email info@fitfood.vn. For business inquiries: business@fitfood.vn">
                            </div>
                          </div>
                          
</div>

<!--End content -->
</div>
        </div>
    </div>








<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>