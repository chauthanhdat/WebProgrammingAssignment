<?php
session_start();
if (!isset($_SESSION['Login'])) {
    $_SESSION['Login'] = false;
}
// if(!isset($_SESSION['NumofLogin'])){
//     $_SESSION['NumofLogin']=0;
// }
// else{
//     $_SESSION['NumofLogin']+=1;
// }
// elseif(isset($_SESSION['Login'])&&(!$_SESSION['Login'])){
//     echo '<script>document.getElementById("passnotright").innerHTML="Sai Mật Khẩu";</script>';
// }

?>

<?php

if (isset($_POST['submit'])) {
    $dbservername = "localhost";
    $dbusername = "root";
    $dbname = "fitfooddb";
    $loginsuccess = false;
    $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);
    if (!$connection) {
        echo "kết nối với csdl thất bại: " . mysqli_connect_error();
        exit;
    }

    $sql_query = "SELECT ur_id,ur_name,ur_account,ur_pass,ur_email,ur_img,ur_phone,admin FROM users";
    $query_result = mysqli_query($connection, $sql_query);

    if (mysqli_num_rows($query_result) > 0) {     //ensure that $query_result have row
        $accountInput = $_POST['username'];
        $passInput = $_POST['userpassword'];
        while ($row = mysqli_fetch_assoc($query_result)) {
            if ($accountInput == $row['ur_account'] && $passInput == $row['ur_pass']) {
                $loginsuccess = true;
                $_SESSION['Id'] = $row['ur_id'];
                $_SESSION['UserAccount'] = $row['ur_account'];
                $_SESSION['UserName'] = $row['ur_name'];
                $_SESSION['UserEmail'] = $row['ur_email'];
                $_SESSION['UserAdmin'] = ($row['admin'] == 0) ? false : true;
                $_SESSION['UserImage'] = $row['ur_img'];
                $_SESSION['UserPhone'] = $row['ur_phone'];
                $_SESSION['Login'] = true;
                $loginsuccess = true;
                //unset($_SESSION['NumofLogin']);
                break;
            }
        }
    }

    // Close connection
    mysqli_close($connection);


    if (!$loginsuccess) { // tài khoản không tồn tại
        $_SESSION['Login'] = false;
        //echo "<script> alert('Thông tin đăng nhập không chính xác vui long nhập lại'); </script>";
        //sleep(10);
        // header("Location:login.php");
    }else if($_SESSION['UserAdmin']==true){
        header('Location: adminPage.php');
        unset($_POST);
    }
     else {
        header('Location: index.php');
        unset($_POST);
    }
}



?>

<?php
include './inc/header.php'
?>

<div class="container top-inner">
    <h2 class="title title-center text-dark">Đăng Nhập</h2>
    <p class="text-center small text-secondary">Nếu Bạn chưa có tài khoản. Vui lòng <a class="text-danger" href="./register.php"><strong>Đăng ký</strong></a> để tiếp tục</p>
    <div class="col-md-8 col-lg-6 mx-auto px-2 ">
        <p id="passnotright"></p>
        <?php if (!$_SESSION['Login'] && isset($_POST['username'])) {
            echo '<script>document.getElementById("passnotright").innerHTML="* Sai mật khẩu";</script>';
        } ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" onsubmit="return loginFrontmat()" name="loginForm">
            <div class="mb-3 mt-3">
                <label for="username" class="mb-2">Tài khoản:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php if (isset($_POST['username'])) {
                                                                                                                                echo htmlentities($_POST['username']);
                                                                                                                            } ?>">
            </div>
            <p class="small text-danger" id="accwrongmessage"></p>
            <div class="mb-3">
                <label for="pwd" class="mb-2">Mật khẩu:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="userpassword" value="<?php if (isset($_POST['userpassword'])) {
                                                                                                                                    echo htmlentities($_POST['userpassword']);
                                                                                                                                } ?>">
            </div>
            <p class="small text-danger" id="passwrongmessage"></p>

            <button type="submit" name="submit" class="btn btn-danger">Đăng nhập</button>
        </form>
    </div>
</div>

<script>
    function loginFrontmat() {
        let accformat = document.forms["loginForm"]["username"].value;
        let passformat = document.forms["loginForm"]["userpassword"].value;
        accformat = accformat.toString();
        if (accformat.length < 4) {
            document.getElementById("accwrongmessage").innerHTML = "* Tài khoản không hợp lệ";
            alert("Hello! I am an alert box!");
            return false;
        }

        for (let i = 0; i < accformat.length; i++) {
            if (!(/[a-zA-Z]/).test(accformat[i]) && !(accformat[i] >= '0' && accformat[i] <= '9')) {
                document.getElementById("accwrongmessage").innerHTML = "* Tài khoản chỉ được chứa số 0-9 và a-z và A-Z";
                return false;
            }
        }
        passformat = passformat.toString();
        if (passformat.length < 4) {
            document.getElementById("passwrongmessage").innerHTML = "* Mật khẩu chứa tối thiểu 4 ký tự";
            return false;
        }

        return true;
    }
</script>
<?php
include './inc/footer.php'
?>