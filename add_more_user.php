<?php
  session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <title>Add more user</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>


<div class="container top-inner">


  <div class="col-md-8 col-lg-6 mx-auto px-2 ">
    <p id="accexistmessage"></p>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="registerForm" method="post" onsubmit="return registervalidation()">
      <div class="mb-3 mt-3">
        <label for="username">Họ và tên người dùng:</label>
        <input type="text" class="form-control" id="username" placeholder="Nhập họ và tên..." name="username" value="<?php if (isset($_POST['username'])) {
                                                                                                                        echo htmlentities($_POST['username']);
                                                                                                                      } ?>">
      </div>
      <p class="small text-danger" id="namewrongmessage"></p>


      <div class="mb-3 mt-3">
        <label for="useraccount">Tài khoản:</label>
        <input type="text" class="form-control" id="useraccount" placeholder="Nhập tài khoản..." name="useraccount" value="<?php if (isset($_POST['useraccount'])) {
                                                                                                                              echo htmlentities($_POST['useraccount']);
                                                                                                                            } ?>">
      </div>
      <p class="small text-danger" id="accwrongmessage"></p>
      <div class="mb-3">
        <label for="pwd">Mật khẩu:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu..." name="pswd" value="<?php if (isset($_POST['pswd'])) {
                                                                                                                  echo htmlentities($_POST['pswd']);
                                                                                                                } ?>">
      </div>
      <p class="small text-danger" id="passwrongmessage"></p>
      
      <p class="small text-danger" id="repasswrongmessage"></p>

      <div class="mb-3 mt-3">
        <label for="email">Thư điện tử:</label>
        <input type="email" class="form-control" id="email" placeholder="Nhập Thư điện tử..." name="email" value="<?php if (isset($_POST['email'])) {
                                                                                                                    echo htmlentities($_POST['email']);
                                                                                                                  } ?>">
      </div>

      <div class="mb-3 mt-3">
        <label for="Phone_number">Sổ điện thoại:</label>
        <input type="tel" class="form-control" id="phone_number" placeholder="Nhập số điện thoại" name="phone_number" value="<?php if (isset($_POST['phone_number'])) {
                                                                                                                                echo htmlentities($_POST['phone_number']);
                                                                                                                              } ?>">
      </div>
      <p class="small text-danger" id="phonewrongmessage"></p>

      <button type="submit" class="btn btn-danger" name="submit"><a href="user_info.php">Add new user</a></button>



    </form>
  </div>


  <?php
  if (isset($_POST['submit'])) {
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";

    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
      echo "kết nối với csdl thất bại: " . mysqli_connect_error();
      exit;
    }
    $accountInput = mysqli_real_escape_string($connection, $_POST['useraccount']);
    //$accountInput=($_POST["useraccount"]);
    $sql_query = "SELECT `ur_id`, `ur_name`, `ur_account`, `ur_pass`, `ur_email`, `admin`, `ur_img`, `ur_phone` FROM `users` WHERE ur_account=('$accountInput') ;";
    $query_result = mysqli_query($connection, $sql_query);
    $numrow = mysqli_num_rows($query_result);
    if (mysqli_num_rows($query_result) > 0) { //tài khoản đã tồn tại
      echo "<script>document.getElementById('accwrongmessage').innerHTML='* Tài khoản này đã tồn tại rồi!';</script>";
    } else {  // tài khoảng này có thể đăng ký

      $nametInput = mysqli_real_escape_string($connection, $_POST['username']);
      $accountInput = mysqli_real_escape_string($connection, $_POST['useraccount']);
      $passInput = mysqli_real_escape_string($connection, $_POST['pswd']);
      $phoneInput = mysqli_real_escape_string($connection, $_POST['phone_number']);
      if (!empty($_POST['email'])) {  //tạo query
        echo "<h1>{$_POST['email']}</h1>";
        $emailInput = mysqli_real_escape_string($connection, $_POST['email']);
        $sql_query = "INSERT INTO `users`( `ur_name`, `ur_account`, `ur_pass`, `ur_email`, `ur_phone`) 
                VALUES ('$nametInput','$accountInput','$passInput','$emailInput','$phoneInput');";
      } else {
        $sql_query = "INSERT INTO `users`( `ur_name`, `ur_account`, `ur_pass`, `ur_phone`) 
                VALUES ('$nametInput','$accountInput','$passInput','$phoneInput');";
      }

      if (mysqli_query($connection, $sql_query)) {
        //mysqli_close($connection);       
        unset($_POST['submit']);
        unset($_POST);
        echo "<script type='text/javascript'>
          window.location.href = './login.php';
        </script>";
        //$_SESSION['register']=true;
        //header('Location: login.php');
        //header('Location: login.php');

      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        mysqli_close($connection);
        unset($_POST);
        exit(0);
      }
    }

    mysqli_close($connection);
  }
  ?>


  <script src="./js/register.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</body>
</div>

