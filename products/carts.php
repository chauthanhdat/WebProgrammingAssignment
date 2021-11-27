<?php 
    include 'productheader.php';
?>

<style> body{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);  
    margin-top: 80px;  
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}

</style>

<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card" >
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://fitfood.vn/img/326x206/images/fit1-15815879666463.jpg"  class="d-block ui-w-40 ui-bordered mr-4"   alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Fit 1</a>
                          <!-- <small>
                            <span class="text-muted">Color:</span>
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                            <span class="text-muted">Size: </span> EU 37 &nbsp;
                            <span class="text-muted">Ships from: </span> China
                          </small> -->
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">600.000</td>
                    <td class="align-middle p-4"><input type="number" class="form-control text-center" value="2"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">600.000xQuantity</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://fitfood.vn/img/326x206/images/fit2-15815881455314.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Fit 2</a>
                          <!-- <small>
                            <span class="text-muted">Color:</span>
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#000;"></span> &nbsp;
                            <span class="text-muted">Storage: </span> 32GB &nbsp;
                            <span class="text-muted">Warranty: </span> Standard - 1 year &nbsp;
                            <span class="text-muted">Ships from: </span> China
                          </small> -->
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">600.000</td>
                    <td class="align-middle p-4"><input type="number" class="form-control text-center" value="1"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">600.000xQuantity</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://fitfood.vn/img/326x206/images/fit3-2-15831416118117.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Fit 3</a>
                          <!-- <small>
                            <span class="text-muted">Ships from: </span> Germany
                          </small> -->
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">600.000</td>
                    <td class="align-middle p-4"><input type="number" class="form-control text-center" value="1"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">600.000xQuantity</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <!-- <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div> -->
              <!-- <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  <button class="text-muted font-weight-normal m-0">Discount</button>
                  
                </div> -->
                <div class="container mt-3">
                <ul class="pagination justify-content-end"> 
                  <li><button class="btn btn-outline-danger" ><b>Confirm</b></button></li>

                </div>
                <!-- <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>$1164.65</strong></div>
                </div> -->
              </div>
            </div>
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
              <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>
<?php 
    include 'productfooter.php';
?>