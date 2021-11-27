

<?php 
    include 'productheader.php';
?>

<div class="top-inner">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="https://fitfood.vn/img/326x206/images/fitpack-chickenbox-16374709302476.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-dark">BOX ỨC GÀ THƠM NGON FIT3</h3>
                <div class="d-flex mb-3">
                    <h4 class="text-dark me-3">GIÁ:</h4>
                    <h4 class="text-danger"><?php  echo number_format($_SESSION['food_arr_price']['CHICKEN BOX']);?> VND</h4>
                </div>
                <div class="content-food mb-1">
                    <p>1000 Gram/Hộp</p>
                    <p>Hộp bao gồm hơn 15 sản phẩm best sellers của Fitpack. Các sản phẩm đều đảm bảo độ mềm mọng, 
                    không gây ngán với đa dạng hương vị. Lượng Calories được đính kèm trên từng nhãn sản phẩm giúp 
                    bạn nắm rõ thông tin sản phẩm.</p>
                    <p>- 02 túi Burger gà teriyaki (gồm 04 nhân bánh)</p>
                    <p>- 04 Vỏ bánh burger nguyên cám</p>
                    <p>- 06 Ức gà ăn liền 150g mix 6 vị</p>
                    <p>- 03 túi Ức gà áp chảo nguyên vị 100g</p>
                    <p> <i>*Đặc biệt: TẶNG kèm 01 chén chấm men sứ Nhật Bản siêu xinh</i></p>
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