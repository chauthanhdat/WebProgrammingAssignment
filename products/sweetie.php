<?php 
    include 'productheader.php';
?>

<div class="top-inner">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="https://fitfood.vn/img/326x206/images/fit-web-combo-sweetie-new-15985103893515.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-dark">FITFOOD JUICE SWEETIE </h3>
                <div class="d-flex mb-3">
                    <h4 class="text-dark me-3">GIÁ:</h4>
                    <h4 class="text-danger"><?php  echo number_format($_SESSION['food_arr_price']['SWEETIE']);?> VND</h4>
                </div>
                <div class="content-food mb-1">
                    <p>5 Chai/Tuần</p>
                    <p>Nếu bạn yêu thích sự tươi mát và vị ngọt tự nhiên từ trái cây, hãy chọn Set FITFOOD JUICE SWEETIE</p>
                    <p>Set nước FITFOOD JUICE sẽ được giao kèm phần ăn mỗi buổi sáng các ngày trong tuần.</p>
                    <ul>COMBO SWEETIE bao gồm 05 chai sau: </ul>
                    <li>Minty Melon: Dưa hấu, lá bạc hà, chanh vàng. Giúp bù nước, đẹp da, 
                    cải thiện thị giác, tăng khả năng tiêu hóa.</li>
                    <li>Celery ananas: carrot, thơm, cần tây. Giảm hàm lượng cholesterol 
                    cao trong cơ thể, giảm viêm, bổ mắt, ngăn ngừa ung thư, hỗ trợ hệ 
                    tiêu hoá, giảm chứng cao huyết áp.</li>
                    <li>Passion Lemongrass: sả, dưa leo, chanh dây. Tốt cho hệ tiêu hoá, 
                    ngăn ngừa ung thư, cung cấp chất chống oxi hoá cho cơ thể, ngừa bệnh 
                    hô hấp, bảo vệ tim mạch.</li>
                    <li>Green Detox: Dưa leo, bạc hà, cải bó xôi, táo đỏ, thơm. Giúp kháng 
                    viêm, giải độc gan, tăng sức khỏe răng miệng, chống oxy hóa, giàu chất 
                    xơ hỗ trợ ăn kiêng.</li>
                    <li>Pinky Chia: ổi hồng, thơm, hạt chia. Tăng cường hệ miễn dịch, tốt 
                    cho tim mạch,  hỗ trợ hệ tiêu hoá, giảm chứng cao huyết áp, thải độc cơ thể.</li>
                    <p> <i>*** Các sản phẩm của FITFOOD JUICE được làm từ công nghệ ép 
                    lạnh cao cấp, giúp giữ nguyên hương vị và đảm bảo dinh dưỡng. Đảm bảo 
                    nguyên chất 100% và cam kết không đường.</i></p>
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