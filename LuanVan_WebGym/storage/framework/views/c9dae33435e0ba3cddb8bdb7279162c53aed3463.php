
<?php $__env->startSection('content'); ?>
<script type="text/javascript" >
function F1(price)
{
        if ($("#tinh").val() != 'TP Hồ Chí Minh')  {
            var prices = Number(price) + Number(price)*(1/2);
        }else{
            var prices = Number(price);
        } 
                
        $("#priceShipping").html('');
        var price_string = prices.toLocaleString('en');
        $("#priceShipping").html(price_string);

        var product_price=$("#totalPriceinput_ex").val();
        var tax=$("#tax_ex").val()
        var totalPrice = prices + Number(product_price) + Number(tax)  ;
        
        $("#totalPriceinput").val(totalPrice); 
        var totalPrice='$ '+Number(totalPrice).toLocaleString('en');
         $("#totalPrice").html('');
        $("#totalPrice").html(totalPrice);

                //console.log(prices);
            
            

 }       
 
 function F()
{
        
$.ajax({
    url:"<?php echo e(route('apiTinh')); ?>",
    type:'json',
    method:'GET',
    success:function(s)
    {
        s= JSON.parse(s);
        listItem = s.LtsItem;
        
        $.each(listItem, function(k,v){
            tam= "<option value='"+ v.Title +"'>"+ v.Title +"</option>";
            $("#tinh").append(tam);

        });
    }
})
}   
window.onload =F;
</script>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Thông tin khách hàng</h3>
                        </div>
                        <form class="needs-validation" action="<?php echo e(route('inhoadon')); ?>" method="get">
                            <input type="hidden"   name="id" value="<?php echo e($thongtin['id_user']); ?>">
                            <div class="mb-3">
                                    <label for="firstName">Tên người nhận *</label>
                                    <input type="text" class="form-control" id="firstName"  name="name" value="<?php echo e($thongtin['name']); ?>" required 
                                title="Họ tên không được bỏ trống">
                                    
                                </div>
                            
                            <div class="mb-3">
                                <label for="username">Phone *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="phone" value="<?php echo e($thongtin['phone']); ?>" pattern="[0-9]{10}" required title="Số điện thoại không chính xác"> 
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email  *</label>
                                <input type="email" class="form-control" id="email"name="email" value="<?php echo e($thongtin['email']); ?>" required> 
                            </div>
                            <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="address">Địa chỉ giao hàng *</label>
                                <input type="text" class="form-control" id="address"  name="address" value="" placeholder="xx Đường Phạm Hùng Quận 8" pattern="{1,50}" required> </div>
                               <div class="col-md-5 mb-3">
                                    <label for="state">Tỉnh/Thành phố *</label>
                                    <select class="wide w-100" id="tinh" name="tinh">
                                    <option data-display="Select">Choose...</option>  
                                    </select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                            </div>
                           
                          
                           
                           
                          
                           <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Hình thức vận chuyển</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping_option" class="custom-control-input" value="normal" checked="checked" onclick="F1(0)" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Vận chuyển thường</label> <span class="float-right font-weight-bold">FREE</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 ngày)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shipping_option" class="custom-control-input" type="radio" value="fast" onclick="F1(20000)">
                                        <label class="custom-control-label" for="shippingOption2">Vận chuyển nhanh</label> <span class="float-right font-weight-bold">$ 20.000</span> </div>
                                    <div class="ml-4 mb-2 small">(2-4 ngày)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="shipping_option" class="custom-control-input" type="radio" value="superf" onclick="F1(30000)">
                                        <label class="custom-control-label"  for="shippingOption3">Siêu nhanh</label> <span class="float-right font-weight-bold">$ 30.000</span> </div>
                                        <div class="ml-4 mb-2 small">(trong 24h)</div>
                                </div>
                                <label><strong>LƯU Ý: Phí trên chỉ áp dụng trong nội thành Tp Hồ Chí Minh, nếu giao ngoại thành phí sẽ tăng 50%</strong></label>
                            </div>
                        </div>
                            
                            <hr class="mb-1"> 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> <?php echo e($prod['product']->ten); ?></a>
                                            <div class="small text-muted">Đơn giá: $ <?php echo e(number_format($prod['product']->price)); ?><span class="mx-2">|</span> Số lượng: <?php echo e($prod['soluong']); ?> <span class="mx-2">|</span> Thành tiền: $ <?php echo e(number_format($prod['price'])); ?></div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sản phẩm</h4>
                                    <div class="ml-auto font-weight-bold"> $  <?php echo e(number_format($totalPrice)); ?></div>
                                </div>
                                 <div class="d-flex" >
                                    <h4>Tax</h4>
                                    <?php 
                                    $num = $totalPrice/10;
                                    $total = $totalPrice+$num;

                                    ?>
                                    <div class="ml-auto font-weight-bold" id="tax"> $ <?php echo number_format($num) ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold" id="priceShipping"> $ 0 </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5" id="totalPrice"> $ <?php echo number_format($total) ?> </div>
                                </div>
                                 <input type="hidden" id="totalPriceinput"  name="totalPrice" value="<?php echo $total ?>">
                                 <input type="hidden" id="totalPriceinput_ex"  value="<?php echo e($totalPrice); ?>">
                                 <input type="hidden" id="tax_ex"  value="<?php echo $num ?>">
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <input type="submit" class="ml-auto btn hvr-hover" value="Xác nhận"> </div>
                    </div>
                </div>
            </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hi\resources\views/index/thanhtoan.blade.php ENDPATH**/ ?>