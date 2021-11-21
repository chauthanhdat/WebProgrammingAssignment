<?php 
  session_start();
?>


<?php if(isset($_POST['name'])){ echo htmlentities($_POST['name']);} ?>

<!doctype html>
<html lang="en">
<head>
    <title>register-form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="p-2 bg-dark text-white text-center">       
        <a href="index.php"><img alt="fitfood" src="https://fitfood.vn/images/logo-fitfood.png"></a>
    </div>

    <div class="container mt-3">

        <h2 class="text-center">Tạo tài khoản</h2>
        <p class="text-center small text-secondary">Nếu Bạn đã có tài khoản. Vui lòng <a class="text-success" href="./login.php"><strong>Đăng nhập</strong></a> để tiếp tục</p>
        <hr color="black" width="50%">
        <form  action="<?php echo $_SERVER["PHP_SELF"];?>"  name="registerForm" method="post" onsubmit="return registervalidation()">
          <div class="mb-3 mt-3">
            <label for="username">Họ và tên người dùng:</label>
            <input type="text" class="form-control" id="username" placeholder="Nhập họ và tên..." name="username" value="<?php if(isset($_POST['username'])){ echo htmlentities($_POST['username']);} ?>">
          </div>
          <p class="small text-danger" id="namewrongmessage"></p>


          <div class="mb-3 mt-3">
            <label for="useraccount">Tài khoản:</label>
            <input type="text" class="form-control" id="useraccount" placeholder="Nhập tài khoản..." name="useraccount" value="<?php if(isset($_POST['useraccount'])){ echo htmlentities($_POST['useraccount']);} ?>" >
          </div>
          <p class="small text-danger" id="accwrongmessage"></p>
          <div class="mb-3">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu..." name="pswd" value="<?php if(isset($_POST['pswd'])){ echo htmlentities($_POST['pswd']);} ?>" >
          </div>
          <p class="small text-danger" id="passwrongmessage"></p>
          <div class="mb-3">
            <label for="re_pwd">Xác nhận mật khẩu:</label>
            <input type="password" class="form-control" id="re_pwd" placeholder="Nhập lại mật khẩu..." name="re_pswd" value="<?php if(isset($_POST['re_pswd'])){ echo htmlentities($_POST['re_pswd']);} ?>" >
          </div>
          <p class="small text-danger" id="repasswrongmessage"></p>

          <div class="mb-3 mt-3">
            <label for="email">Thư điện tử:</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập Thư điện tử..." name="email" value="<?php if(isset($_POST['email'])){ echo htmlentities($_POST['email']);} ?>">
          </div>

          <div class="mb-3 mt-3">
            <label for="Phone_number">Sổ điện thoại:</label>
            <input type="tel" class="form-control" id="phone_number" placeholder="Nhập số điện thoại" name="phone_number" value="<?php if(isset($_POST['phone_number'])){ echo htmlentities($_POST['phone_number']);} ?>" >
          </div>
          <p class="small text-danger" id="phonewrongmessage"></p>
          <div class="clearfix">
            <button type="submit" class="btn btn-success float-right" name="submit" >Đăng ký nào!</button>
          </div>
          
          
        </form>
    </div>



      <script src="./js/register.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
