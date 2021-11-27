

<?php 
    include 'productheader.php';
?>

<div class="top-inner">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="https://fitfood.vn/img/326x206/images/fit-snacks-500x315-9-15826438436664.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-dark"> SỮA HẠT BEAUTY</h3>
                <div class="d-flex mb-3">
                    <h4 class="text-dark me-3">GIÁ:</h4>
                    <h4 class="text-danger"><?php  echo number_format($_SESSION['food_arr_price']['BEAUTY']);?>VND</h4>
                </div>
                <div class="content-food mb-1">
                    <p>5 Chai/Tuần</p>
                    <p>Nếu bạn mong muốn cải thiện vóc dáng từ sữa hạt dinh dưỡng, hãy chọn Set sữa HẠT BEAUTY</p>
                    <ul>Set sữa hạt sẽ được giao kèm phần ăn mỗi ngày, Combo BEAUTY bao gồm 05 chai sau: </ul>
                    <li>Sữa HẠT SEN: Hạt sen, bắp, khoai lang. Giúp giảm cân, ngăn ngừa cholesterol quá cao, 
                        kháng viêm, giúp dễ ngủ. </li>
                    <li>Sữa CỐM: Cốm, sữa dừa, hạt sen. Giàu chất xơ, tăng chiều cao và hạn chế cao huyết áp.</li>
                    <li>Sữa QUINOA: quinoa, đậu phộng, mè rang. Giúp đẹp da và tóc, chống viêm nhiễm.</li>
                    <li>Sữa HẠT ĐIỀU: Hạt điều, cacao. Tốt cho tim mạch, giúp kiểm soát cân nặng và kiểm soát lượng đường huyết.</li>
                    <li>Sữa ÓC CHÓ: óc chó, hạt điều, khoai tím. Hạn chế tiểu đường, giảm nguy cơ ung thư, hỗ trợ giảm cân. </li>
                    <p> <b>Sữa của Hạt là sữa xay mịn, không lọc bã để giữ nguyên chất dinh dưỡng như ăn nguyên hạt</b></p>
                    <p><b>Sữa của Hạt luôn đảm bảo 3 KHÔNG: KHÔNG Sữa bò - KHÔNG Chất Bảo Quản - KHÔNG Phụ gia </b></p>
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