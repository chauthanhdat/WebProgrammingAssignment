<?php
session_start();

?>

<?php
if (!isset($_SESSION['Login']) || ($_SESSION['UserAdmin'] == false)) {
  header('Location: warning.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>adminPage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="lang" content="vi">
    <link rel="icon" href="/images/product/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="fonts/Montserrat.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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

        <div class="container">
          <h1 class="title">Edit Profile</h1>
          <hr>
          <div class="row">
            <!-- left column -->
            <div class="col-md-3">
              <div class="text-center">
                <img src="https://i.pinimg.com/originals/08/3c/f7/083cf7ceb6fc8d817aba967bd8ce3b8e.png" class="avatar img-circle img-thumbnail" alt="avatar" width="315px" height="315px">
                <h6>Upload a different photo...</h6>

                <input type="file" class="form-control">
              </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
              <div class="alert alert-dismissible show bg-danger text-white" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
              </div>
              <h3>Personal info</h3>

              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-lg-3 control-label">First name:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="text" value="First name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Last name:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="text" value="Last name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Phone number:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="number" value="0123456789">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Email:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="text" value="email@gmail.com">
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>