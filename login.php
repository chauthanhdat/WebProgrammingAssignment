<?php 
    session_start();
    if(!isset($_SESSION['Login'])){
        $_SESSION['Login']=false;
    }
    if(!isset($_SESSION['NumofLogin'])){
        $_SESSION['NumofLogin']=0;
    }
    else{
        $_SESSION['NumofLogin']+=1;
    }
    // elseif(isset($_SESSION['Login'])&&(!$_SESSION['Login'])){
    //     echo '<script>document.getElementById("passnotright").innerHTML="Sai Mật Khẩu";</script>';
    // }

?>



<?php 
   
    if(isset($_POST['submit'])){
        $dbservername="localhost";
        $dbusername="root";
        $dbname="fitfooddb";
        $loginsuccess=false;
        $connection= mysqli_connect($dbservername,$dbusername,"",$dbname);
        if(!$connection){
            echo "kết nối với csdl thất bại: " . mysqli_connect_error();
            exit;
        }

        $sql_query ="SELECT ur_id,ur_name,ur_account,ur_pass,ur_email,ur_img,ur_phone,admin FROM users";
        $query_result=mysqli_query($connection, $sql_query);

        if (mysqli_num_rows($query_result) > 0) {     //ensure that $query_result have row
            $accountInput =$_POST['username'];
            $passInput=$_POST['userpassword'];
            while($row=mysqli_fetch_assoc($query_result)){
                if($accountInput==$row['ur_account']&&$passInput==$row['ur_pass']){
                    $loginsuccess=true;
                    $_SESSION['Id']=$row['ur_id'];
                    $_SESSION['UserAccount']=$row['ur_account'];
                    $_SESSION['UserName']=$row['ur_name'];
                    $_SESSION['UserEmail']=$row['ur_email'];
                    $_SESSION['UserAdmin']=($row['admin']==0)?false:true;
                    $_SESSION['UserImage']=$row['ur_img'];
                    $_SESSION['UserPhone']=$row['ur_phone'];
                    $_SESSION['Login']=true;
                    $loginsuccess=true;
                    unset($_SESSION['NumofLogin']);
                    break;

                }
            }
        }

         // Close connection
         mysqli_close($connection);
         unset($_POST);

        if(!$loginsuccess){ // tài khoản không tồn tại
            $_SESSION['Login']=false;
            //echo "<script> alert('Thông tin đăng nhập không chính xác vui long nhập lại'); </script>";
            //sleep(10);
            header("Location:login.php");
        }else{
            header('Location: index.html');
        }

        
        
    }



?>



<!doctype html>
<html lang="en">
<head>
    <title>Đăng Nhập-fitfood</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

      <div class="p-2 bg-dark text-white text-center">
        <!-- <h1>My First Bootstrap 5 Page</h1>
        <p>Resize this responsive page to see the effect!</p> -->
        <a href="index.php"><img alt="fitfood" src="https://fitfood.vn/images/logo-fitfood.png"></a>
        
       
      </div>
      <div class="container mt-3 col-md-8">
        <h2 class="text-center">Đăng Nhập</h2>
        <p class="text-center small text-secondary">Nếu Bạn chưa có tài khoản. Vui lòng <a class="text-danger" href="./register.php"><strong>Đăng ký</strong></a> để tiếp tục</p>
        <hr color="black" width="50%">
        <p id="passnotright"></p>
        <?php 
            if(isset($_SESSION['Login'])&&(!$_SESSION['Login'])&&($_SESSION['NumofLogin'])>0){
                echo '<script>document.getElementById("passnotright").innerHTML="Sai Mật Khẩu";</script>';
            }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" onsubmit="return loginFrontmat()" name="loginForm">
          <div class="mb-3 mt-3">
            <label for="username" class="mb-2">Tài khoản:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php if(isset($_POST['username'])){ echo htmlentities($_POST['username']);} ?>">
          </div>
            <p class="small text-danger" id="accwrongmessage"></p>
          <div class="mb-3">
            <label for="pwd" class="mb-2">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="userpassword" value="<?php if(isset($_POST['userpassword'])){ echo htmlentities($_POST['userpassword']);} ?>">
          </div>
          <p class="small text-danger" id="passwrongmessage"></p>

          <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
       function loginFrontmat(){
            let accformat= document.forms["loginForm"]["username"].value;
            let passformat= document.forms["loginForm"]["userpassword"].value;
            accformat =accformat.toString();
            if(accformat.length<4){
                document.getElementById("accwrongmessage").innerHTML="* Tài khoản không hợp lệ";
                alert("Hello! I am an alert box!");
                return false;
            }

            for (let i = 0; i < accformat.length; i++) {
                if( !(/[a-zA-Z]/).test(accformat[i])&&!(accformat[i] >= '0' && accformat[i] <= '9')){
                    document.getElementById("accwrongmessage").innerHTML="* Tài khoản chỉ được chứa số 0-9 và a-z và A-Z";
                    return false;
                }
            }
            passformat=passformat.toString();
            if(passformat.length<4){
                document.getElementById("passwrongmessage").innerHTML="* Mật khẩu chứa tối thiểu 4 ký tự";
                return false;
            }

            return true;
       }
    </script>






</body>
   
</html>
