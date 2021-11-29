<?php 
session_start();

?>

// kiểm tra xem có phải là admin hay không
<?php 
    if(!isset($_SESSION['Login'])||($_SESSION['UserAdmin']==false)){
      header('Location: warning.php');
    }
?>

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
            <div class=" col-9 py-5 px-5">
                <!--Place content here-->
                <h2 class="title">Hiện thực các tính năng quản lí tài nguyên trang web</h2>
                <!--End content -->
            </div>
        </div>
    </div>








<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
