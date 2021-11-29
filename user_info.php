<?php 
session_start();

?>

<?php 
    if(!isset($_SESSION['Login'])||($_SESSION['UserAdmin']==false)){
      header('Location: warning.php');
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <title>User info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
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
                <div class="container mt-3">
                <h2 class="title">Thông tin khách hàng</h2>
                <!-- <form class="form-horizontal" role="form">
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
                          </div> -->
                <ul>Link tham khảo display data from data base:</ul>
                <li>https://tryphp.w3schools.com/showphpfile.php?filename=demo_db_select_oo_table</li>
                <li>https://www.w3schools.com/php/php_mysql_select.asp</li>
                <li>https://stackoverflow.com/questions/17902483/show-values-from-a-mysql-database-table-inside-a-html-table-on-a-webpage</li>
                <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone number</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Chicken1</td>
        <td>User1</td>
        <td>user1@example.com</td>
        <td>0123456789</td>
        <td><button type="button" class="btn btn-outline-dark"><i class="bi bi-trash-fill"></i> Delete</button></td>
        <td><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-clockwise"></i> Reser password</button></td>
      </tr>
      <tr>
        <td>Chicken1</td>
        <td>User1</td>
        <td>user1@example.com</td>
        <td>0123456789</td>
        <td><button type="button" class="btn btn-outline-dark"><i class="bi bi-trash-fill"></i> Delete</button></td>
        <td><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-clockwise"></i> Reser password</button></td>
      </tr>
      <tr>
        <td>Chicken1</td>
        <td>User1</td>
        <td>user1@example.com</td>
        <td>0123456789</td>
        <td><button type="button" class="btn btn-outline-dark"><i class="bi bi-trash-fill"></i> Delete</button></td>
        <td><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-clockwise"></i> Reser password</button></td>
      </tr>
    </tbody>
  </table>
  <!-- <div class=""></div> -->
<<<<<<< HEAD
  <button type="button" class="btn btn-outline-primary" ><i class="bi bi-plus-lg"></i>ADD NEW ACCOUNT</button>
=======
  <button type="button" class="btn btn-outline-danger" ><i class="bi bi-plus-lg"></i>ADD NEW ACCOUNT</button>
>>>>>>> e27b1378e94af0ba86b659f42641a65e72a8ac91
</div>




                <!--End content -->
            </div>
        </div>
    </div>








<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>