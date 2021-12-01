<?php 
    session_start();
?>


<?php 
    
    if(isset($_POST['submit'])){
        $dbservername = "localhost";
        $dbusername = "root";
        $dbname = "fitfooddb";
        $connection = mysqli_connect($dbservername, $dbusername, "", $dbname);

        if (!$connection) {
            echo "kết nối với csdl thất bại: " . mysqli_connect_error();
            exit;
        }
    
        // if (isset($_POST['submit']))
        // {
            $name=$_POST['name'];
            $username=$_POST['username'];
            $pass=$_POST['pass'];
            $mail=$_POST['mail'];
            $phone=$_POST['phone'];
        // };
        
        // $sql_query = "INSERT INTO `users`( `ur_name`, `ur_account`, `ur_pass`, `ur_phone`) 
        // VALUES ('$nametInput','$accountInput','$passInput','$phoneInput');";


        $add_user="INSERT INTO `users` (`ur_name`, `ur_account`, `ur_pass`, ur_email,`ur_phone`)
        VALUES ('$name','$username','$pass','$mail','$phone')";
        echo $add_user;
        $result=mysqli_query($connection,$add_user);    
        unset($_POST['submit']);
        mysqli_close($connection);
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
<form method="POST">
          <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>
          <div class="mb-3">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
          </div>
          <div class="mb-3 mt-3">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
          </div>
          <div class="mb-3 mt-3">
            <label for="mail">Email:</label>
            <input type="text" class="form-control" id="mail" placeholder="Enter email" name="mail">
          </div>
          <div class="mb-3 mt-3">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>



        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>