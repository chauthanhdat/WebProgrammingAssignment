<?php 
    include 'productheader.php';
?>

<div class="top-inner">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="https://fitfood.vn/img/326x206/images/fit-combo-500x315-16009329054581.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-dark">STAR KOMBUCHA </h3>
                <div class="d-flex mb-3">
                    <h4 class="text-dark me-3">GIÁ:</h4>
                    <h4 class="text-danger"><?php  echo number_format($_SESSION['food_arr_price']['KOMBUCHA']);?> VND</h4>
                </div>
                <div class="content-food mb-1">
                    <p>5 Chai/Tuần</p>
                    <p>Star Kombucha là thức uống lên men dành cho sức khỏe 
                        với 100% thành phần tự nhiên từ trà, men tự nhiên 
                        SCOBY, trái cây và thảo mộc tự nhiên giàu nguồn lợi 
                        khuẩn probiotics (chủng lactobacillus), axit hữu cơ, 
                        chất chống oxy hóa, vitamin B, polyphenols, EGCG, có 
                        tác dụng rất tốt đối với sức khỏe nhất là đối với hệ 
                        miễn dịch.</p>
                    <ul>Combo gồm 5 chai với 5 vị khác nhau được giao mỗi ngày kèm phần ăn hàng ngày của bạn.</ul>
                    <li>Dâu Tây</li>
                    <li>Cam Đào</li>
                    <li>Gừng Vàng </li>
                    <li>Ổi Hồng</li>
                    <li>Xoài Kiwi</li>
                    <p> <i>* Sản phẩm ngon hơn khi uống lạnh.</i></p>
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