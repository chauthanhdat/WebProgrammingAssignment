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
    <title>login-form</title>
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

    <?php
  // thông tin ket nối db
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
   //tạo kết nối
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection){
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    //trở lên 

    

    $sql_query = "SELECT * FROM users";
    $query_result = mysqli_query($connection, $sql_query);
    
    while ($row = mysqli_fetch_assoc($query_result)) 
    {
       if ($row['admin']!=1)
        echo "<tr>
        <td>{$row['ur_name']}</td>
        <td>{$row['ur_account']}</td>
        <td>{$row['ur_email']}</td>
        <td>{$row['ur_phone']}</td>
        <td><button type='button' class='btn btn-outline-dark'><i class='bi bi-trash-fill'></i> Delete</button></td>
        <td><button type='button' class='btn btn-outline-dark'><i class='bi bi-arrow-clockwise'></i> Reser password</button></td>
      </tr>";

    }






    mysqli_close($connection);
?>



      <!-- <tr>
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
      </tr> -->
    </tbody>
  </table>
  <!-- <div class=""></div> -->
  <button type="button" class="btn btn-outline-primary" ><a href="add_more_user.php" ><i class="bi bi-plus-lg"></i>ADD NEW ACCOUNT</a></button>
</div>




                <!--End content -->
            </div>
        </div>
    </div>








<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>