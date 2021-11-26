<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No exit page</title>
    <link rel="icon" href="/images/product/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="fonts/Montserrat.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>



<!-- Jumbotron -->
<div class="container-fuild bg-white " id="warning">
<div
  class="bg-image p-5 text-center shadow-1-strong rounded mb-5 bg-white"
  style="background-image: url('./images/user_avatar/warningPage.jpg');height: 100vh;
        background-repeat: no-repeat;
        background-position: center; 
  "
>
  <h2 class="mt-0 title title-center">Trang này không tồn tại</h2>
    <a href="./index.php" class="btn btn-outline-danger btn-sm" role="button" >Quay lại</a>
  
</div>
</div>


    
<?php 
    include './inc/footer.php'
?>