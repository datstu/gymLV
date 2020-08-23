
<?php $__env->startSection('content'); ?>
<?php
use App\Cart;
 if(Session('cart')){
                $oldCart = Session::get('cart');
                $carts = new Cart($oldCart);
                $cart=$oldCart;
                $product_cart=$carts->items;
                $totalPrice=$carts->totalPrice;
                $totalQty=$carts->totalQty;
                //var_dump($product_cart);
                //Session::flush();
                //$product_cart=(array)$product_cart;
            }
 if(Session('status')){  Session::forget('status'); }


  ?>
<script type="text/javascript" >
function F2(sl,id)
{
   // var pageVal = gia.val();

    $("#table #price"+id).html('');
    $.ajax({
    url:"<?php echo e(route('search')); ?>",
    method:"GET",
    data:{sl:sl,id:id},
    //dataType:'json',
    //s= JSON.parse(s);
    success:function(s)
    {
        console.log(s);
        //s= JSON.parse(s);
            //$("#price").html(s);
            var Val = '$'+Number(s).toLocaleString('en');
            $("#table #price"+id).html(Val);
            //document.getElementById("demo").innerHTML = output;

        
    },
});
}
</script>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
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
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                               <?php if(Session::has('cart')): ?>
                            <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="table">
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="<?php echo e(url('public/uploads/product/'.$prod['product']->img)); ?>" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									<?php echo e($prod['product']->ten); ?>

								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$<?php echo e(number_format($prod['product']->price)); ?></p>
                                    </td>
                                    <td class="quantity-box"><input type="number" name="sl" size="4" value="<?php echo e($prod['soluong']); ?>" min="0" step="1" onchange ="F2(this.value,<?php echo e($prod['product']->id_product); ?>)" class="c-input-text qty text"></td>
                                    <td class="total-pr" id="price<?php echo e($prod['product']->id_product); ?>">
                                        <p>$<?php echo e(number_format($prod['price'])); ?></p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="<?php echo e(route('xoagiohang',$prod['product']->id_product)); ?>">
									<i class="fas fa-times"></i>
								</a>
                                 
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <tr><td> <h4>Trống, vui lòng đặt hàng trước. Xin cảm ơn!!</h4></td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                     <div class="update-box">
                        <a href="<?php echo e(route('resetgiohang')); ?>"><input value="Reset Cart" type="submit" ></a>
                    </div>
                </div>
                
                    <div class="update-box">
                        <a href="<?php echo e(route('thanhtoan')); ?>"><input value="Thanh toán" type="submit" ></a>
                    </div>
               
            </div>

            

        </div>
    </div>
    <!-- End Cart -->

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/index/cart.blade.php ENDPATH**/ ?>