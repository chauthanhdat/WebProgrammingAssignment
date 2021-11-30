
<?php
session_start();

?>


<?php
if (!isset($_SESSION['Login']) || ($_SESSION['UserAdmin'] == false)) {
  header('Location: warning.php');
}
?>


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
    
    if(count($_POST)>0)
    {
      $sql_query="UPDATE contact_address SET `con_address`= '{$_POST['con_add'] }',con_phone= '{$_POST['con_phone_num']}',con_email= '{$_POST['con_mail']}' where 1; ";
      mysqli_query($connection,$sql_query);
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
      <div class="col-9 py-5 py-5">
        <!--Place content here-->
        <div class="container mt-3">
          <h2 class="title">Chỉnh sửa thông tin liên hệ</h2>
          
          <form action="contact.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-lg-3 control-label" for="con_add">Địa chỉ:</label>
              <div class="col-lg-12">
                <input name="con_add" id="con_add" class="form-control" type="text" value=<?php echo $con_address ?> >
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Điện thoại:</label>
              <div class="col-lg-12">
                <input name="con_phone_num" id="con_phone_num" class="form-control" type="text" value=<?php echo $con_phone ?> >
              </div>
            </div>
            <div class="form-group">
              <label  class="col-lg-3 control-label">Email:</label>
              <div class="col-lg-12">
                <input name="con_mail" id="con_mail" class="form-control" type="text" value=<?php echo $con_email ?> >
              </div>
            </div>
            <input type="submit" value="Lưu thông tin" class="btn btn-success">
          </form>
        </div>

        <!--End content -->
      </div>
    </div>
  </div>








  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>