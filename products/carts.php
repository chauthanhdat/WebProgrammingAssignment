<?php 
    include 'productheader.php';
?>



  <div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card" >
        <div class="card-header">
            <h2>THÔNG TIN ĐƠN HÀNG</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead id='list-cart-title'>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 320px;">Tên sản phẩm &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Đơn giá</th>
                    <th class="text-center py-3 px-4" style="width: 150px;">Số lượng</th>
                    <th class="text-right py-3 px-4" style="width: 150px;">Thành tiền</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th> 
                  </tr>
                </thead>
                <tbody>
        
                  <tr>
                    <td class="p-4 ">
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
                    <td class="align-middle p-4 " ><input id='product-1' type="number" class="form-control text-center" min="1" value="1" onchange="change_value('product-1');" ></td>
                    <td class="text-right font-weight-semibold align-middle p-4 text-danger" >600,000 VND</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger btn btn-danger" title="" data-original-title="Remove">Remove</a></td>
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
                    <td class="align-middle p-4"><input id='product-2' type="number" class="form-control text-center" min="1" value="1" onchange="change_value('product-2');" ></td>
                    <td class="text-right font-weight-semibold align-middle p-4 text-danger" id="hehe">600,000 VND</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger btn btn-danger" title="" data-original-title="Remove">Remove</a></td>
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
                    <td class="align-middle p-4"><input id='product-3'  type="number" class="form-control text-center" min="1" value="1" onchange="change_value('product-3');" ></td>
                    <td class="text-right font-weight-semibold align-middle p-4 text-danger">600,000 VND</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger btn btn-danger" title="" data-original-title="Remove">Remove</a></td>
                  </tr>
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Mã giảm giá</label>
                <input type="text" placeholder="Nhập mã giảm giá ..." class="form-control">
              </div>

              <div class="d-flex">
                <div class="text-right mt-4 me-5">
                  <label class="text-muted font-weight-normal m-0">Khuyến mại</label>
                  <div class="text-large text-success"><strong>0 VND</strong></div>
                </div>

                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Thanh toán</label>
                  <div class="text-large text-danger" id="total-price-cart"><strong>1,800,000 VND</strong></div>
                </div>
              </div>
            </div>
        
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-lg btn-warning md-btn-flat mt-2 me-3" onclick="backtoshopping()">Quay lại Shopping</button>
              <button type="button" class="btn btn-lg btn-success mt-2">Xác nhận đơn hàng</button>
            </div>
            
        
          </div>
      </div>
  </div>



  <div class="footer bg-dark">
    <div class="container-fluid ">
        <a href="index.php" class="mb-4 d-block">
            <img src="./../images/product/logo-fitfood.png" alt="" border="0" />
        </a>
        <div class="widget-footer mb-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h4>Công ty TNHH Fitfood</h4>
                    <p>
                        <strong>Địa chỉ</strong> 33 Đường 14, KDC Bình Hưng, Ấp 2, Huyện Bình Chánh, TPHCM<br />
                        <strong>Điện thoại</strong> (+84) 932 788 120 [hotline] - (+84) 938 074 120 [sms]<br />
                        <strong>Email</strong> info@fitfood.vn. For business inquiries:
                        business@fitfood.vn<br />
                        <strong>MST</strong> 0313272749 do Sở kế hoạch và đầu tư TPHCM cấp ngày 26/05/2015
                    </p>
                </div>
                <div class="col-md-3 mb-3">
                    <h4>Điều khoản chung</h4>
                    <ul>
                        <li><a href="#">Chính Sách Quy Định Chung</a></li>
                        <li><a href="#">Quy Định Hình Thức Thanh Toán</a></li>
                        <li><a href="#">Chính Sách Vận Chuyển Giao Hàng</a></li>
                        <li><a href="#">Chính Sách Bảo Mật Thông Tin</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h4>Follow us</h4>
                    <div class="social mb-3">
                        <a href="#" target="_blank">
                            <img src="../images/product/ic-fb.png" alt="" border="0" />
                        </a>
                        <a href="#" target="_blank">
                            <img src="../images/product/ic-instagram.png" alt="" border="0" />
                        </a>
                        <a href="#" target="_blank">
                            <img src="../images/product/ic-youtube.png" alt="" border="0" />
                        </a>
                    </div>
                    <div>
                        <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=34289">
                            <img src="../images/product/logo-bocongthuong.png" alt="" border="0" width="120px" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright mb-0">© Copyright Fitfood.</p>
    </div>
</div>

<style>
          @media only screen and (max-width: 766px) {
            body{
                background-color: lightblue;
            }
            #list-cart-title tr th{
                display: none;
            }

        }
</style>

  <script>
 
 function cal_price_by_id(id){
        let value=document.getElementById(id).value;
        if(value<0){
            document.getElementById(id).value=-1*value;
            value=value*(-1);
        }else if(value==0){
          document.getElementById(id).value=1;
          value=1;
        }
        let dongia=document.getElementById(id).parentNode.previousElementSibling.innerHTML;
        dongia = dongia.replace(/[^\d\.\-]/g, "");  //loạt bỏ ,
        let _dongia = parseFloat(dongia);
        let thanhtien=value*_dongia;
        return thanhtien;

    }

    function total_price_change(id){
        let price_change = cal_price_by_id(id);
        id=id.toString();
        let id_prefix=id.slice(0,id.length-1);
        //console.log(price_change);
        let numOfTR=document.getElementsByTagName('tr').length;
        let sum =price_change;
        for (let i = 1; i < numOfTR; i++) {
          let id_temp = id_prefix+i;
          id_temp=id_temp.toString();
          if(id_temp!=id){
            let sum_temp=cal_price_by_id(id_temp);
            sum=sum+sum_temp;
          }
          
        }
        document.getElementById('total-price-cart').innerHTML ="<strong>" + sum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " VND </strong>";

     }



    function backtoshopping(){
      window.location.href = '../index.php';
    }
   

    function change_value(e){
      let a=e;
      //document.getElementById('temppp').innerHTML =e;
      //console.log(typeof e);
      myfunction(a); 
      total_price_change(a);
    }


     function myfunction(e){
        let value=document.getElementById(e).value;
        if(value<0){
            document.getElementById(e).value=-1*value;
            value=value*(-1);
        }
        else if(value==0){
          document.getElementById(e).value=1;
          value=1;
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
        
      //  function toArray(arraylike) {
      //       var array= new Array(arraylike.length);
      //       for (var i= 0, n= arraylike.length; i<n; i++)
      //           array[i]= arraylike[i];
      //       return array;
      //   }

     }





    //  function check_login(){
        
    //     if (login_js==0){ //chưa dăng nhpa65
    //         alert('bạn cần phải đăng nhập trước');
    //         return false;
    //     }
    //     else{
    //         return true;
    //     }
    // }


  </script>

<script src="./../js/jquery-3.6.0.min.js"></script>
<script src="./../js/bootstrap.bundle.min.js"></script>
<script src="./../js/jquery.bxslider.js"></script>
<script src="./../js/jquery.cookie.js"></script>
<script src="./../js/main.js"></script>



    
</body>
</html>