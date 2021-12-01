<?php 
session_start();

?>

<?php 
    if(!isset($_SESSION['Login'])||($_SESSION['UserAdmin']==false)){
      header('Location: warning.php');
    }
?>


<?php 
  // delete user
  if(isset($_POST['delete_user_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $user_id_delete=$_POST['delete_user_acc'];
    
    
    $sql_query ="DELETE FROM `users` WHERE `ur_id` = $user_id_delete;";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['delete_user_bt']);
    mysqli_close($connection);

  }

  //reset pass thanh 4321;
  if(isset($_POST['resest_pass_bt'])){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }
    $user_id_reset_pass=$_POST['resest_pass'];
    
    
    $sql_query ="UPDATE `users` SET `ur_pass`='4321' WHERE `ur_id`= $user_id_reset_pass;";
    //echo "<h1>$sql_query </h1>";
    $query_result = mysqli_query($connection, $sql_query);

    unset($_POST['resest_pass_bt']);
    mysqli_close($connection);

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

          $dbservername = "localhost";
          $dbusername = "root";
          $dbname = "fitfooddb";
          //tạo kết nối
          $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
          if (!$connection){
              echo "kết nối với csdl thất bại: " . mysqli_connect_error();
              exit;
          }

          $sql_query = "SELECT * FROM users";
          $query_result = mysqli_query($connection, $sql_query);
          if(mysqli_num_rows($query_result)>0){

                while ($row=mysqli_fetch_assoc($query_result)) {
                  if($row['admin']!=1){
                    echo "<tr>
                    <td>{$row['ur_name']}</td>
                    <td>{$row['ur_account']}</td>
                    <td>{$row['ur_email']}</td>
                    <td>{$row['ur_phone']}</td>
                    <td>
                      <form action='' method='post'  name='delete_user' id='delete_user'>
                        <input type='hidden' id='delete_user_acc".$row['ur_id']."' name='delete_user_acc' value='" .$row['ur_id'] . "'>                    
                        <button type='submit' name='delete_user_bt' class='btn btn-outline-danger'><i class='bi bi-trash-fill'></i> Delete</button>
                      </form>
                    </td>
                    <td>
                      <form action='' method='post'  name='resest_pass' id='resest_pass'>
                        <input type='hidden' id='resest_pass".$row['ur_id']."' name='resest_pass' value='" .$row['ur_id'] . "'>      
                        <button type='submit' name='resest_pass_bt' class='btn btn-outline-dark'><i class='bi bi-arrow-clockwise'></i> Reser password</button>
                      </form>
                    </td>
                  </tr>";
                  }
                }
          }

          mysqli_close($connection);

      ?>



    </tbody>
  </table>
  <!-- <div class=""></div> -->
  <form  >
    <button type="submit" class="btn btn-outline-danger" ><i class="bi bi-plus-lg"></i><a href="add_more_user.php">ADD NEW ACCOUNT</a></button>
  </form>
</div>

                <!--End content -->
            </div>
        </div>
    </div>








<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
