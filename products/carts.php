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
                    <td class="text-right font-weight-semibold align-middle p-4 text-success"  >600,000</td>
                    <td class="align-middle p-4" id="haha"><input id='product-1' type="number" class="form-control text-center" min="1" value="1" onchange="myfunction('product-1')" ></td>
                    <td class="text-right font-weight-semibold align-middle p-4 text-danger" >600,000 VND</td>
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
                    <td class="text-right font-weight-semibold align-middle p-4 text-success">600,000</td>
                    <td class="align-middle p-4"><input id='product-2' type="number" class="form-control text-center" min="1" value="1" onchange="myfunction('product-2');count_sum('product-2');"  ></td>
                    <td class="text-right font-weight-semibold align-middle p-4 text-danger" id="hehe">600,000 VND</td>
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
                    <td class="text-right font-weight-semibold align-middle p-4 text-success" >600,000</td>
                    <td class="align-middle p-4"><input id='product-3'  type="number" class="form-control text-center" min="1" value="1" onchange="myfunction('product-3')" ></td>
                    <td class="text-right font-weight-semibold align-middle p-4 text-danger">600,000 VND</td>
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
    <p id="temp"></p>

  <script>
 

     function myfunction(e){
        let value=document.getElementById(e).value;
        if(value<0){
            document.getElementById(e).value=-1*value;
            value=value*(-1);
        }
        
        //let x=document.getElementById(e).parentNode.nextElementSibling.id;
        let dongia=document.getElementById(e).parentNode.previousElementSibling.innerHTML;
        dongia = dongia.replace(/[^\d\.\-]/g, ""); // You might also include + if you want them to be able to type it
        var num = parseFloat(dongia);
        let thanhtien=value*num;
        document.getElementById(e).parentNode.nextElementSibling.innerHTML=thanhtien.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " VND";
        //document.getElementById('temp').innerHTML=num;
            // document.getElementById('temp').innerHTML=num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

       // let dongia=inp.previousSibling.innerHTML

       // let dongia=parseFloat(dongia);
        
       function toArray(arraylike) {
            var array= new Array(arraylike.length);
            for (var i= 0, n= arraylike.length; i<n; i++)
                array[i]= arraylike[i];
            return array;
        }

     }
  </script>

    
</body>
</html>