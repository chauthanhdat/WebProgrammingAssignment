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
                <h2>Thông tin khách hàng</h2>
                <form class="form-horizontal" role="form">
                          <div class="form-group">
                            
                            <div class="col-lg-12">
                              <input class="form-control" type="text" value="Tên:Nguyễn Văn A;username:chicken1;password:123456;phone number:0123456789;email:nguyenvana@gmail.com">
                            </div>
                          </div>
                          <div class="form-group">
                            
                            <div class="col-lg-12">
                              <input class="form-control" type="text" value="Tên:Nguyễn Văn B;username:chicken2;password:123456;phone number:0123456789;email:nguyenvanb@gmail.com">
                            </div>
                          </div>
                          <div class="form-group">
                            
                            <div class="col-lg-12">
                              <input class="form-control" type="text" value="Tên:Nguyễn Văn C;username:chicken3;password:123456;phone number:0123456789;email:nguyenvanc@gmail.com">
                            </div>
                          </div>
                          <div class="form-group">
                            
                            <div class="col-lg-12">
                              <input class="form-control" type="text" value="Tên:Nguyễn Văn D;username:chicken4;password:123456;phone number:0123456789;email:nguyenvand@gmail.com">
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