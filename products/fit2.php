

<?php 
    include 'productheader.php';
?>

<div class="top-inner">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="https://fitfood.vn/img/326x206/images/fit2-15815881455314.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-dark">GÓI FIT2</h3>
                <div class="d-flex mb-3">
                    <h4 class="text-dark me-3">GIÁ:</h4>
                    <h4 class="text-danger"><?php  echo number_format($_SESSION['food_arr_price']['GOI FIT 2']);?> VND</h4>
                </div>
                <div class="content-food mb-1">
                    <p>Gói 2 bữa SÁNG - TỐI</p>
                    <p>- Sử dụng thực đơn 2 bữa SÁNG - TỐI tại trang fitfood.vn/menu.</p>
                    <p>- Giao 02 phần ăn tận nơi mỗi ngày, từ thứ 2 đến thứ 6.</p>
                    <p>- Calories dao động từ 1000 - 1100 Kcal mỗi ngày</p>
                    <p>- Kèm tinh bột phức, ít đường, đảm bảo ko bột ngọt, nhiều rau củ và chất đạm</p>
                    <p> <i> * Thích hợp cho dân văn phòng thường dành thời gian Ăn Trưa cùng bạn bè đồng nghiệp</i></p>
                </div>
                <form action="" method="post" id='add-to-cart' name="add-to-cart"></form>
                <button type="submit" class="btn btn-danger" form="add-to-cart" value="Submit">Thêm vào giỏ hàng</button>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'productfooter.php';
?>