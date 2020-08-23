
<?php $__env->startSection('content'); ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        
                      
                           
                                <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Tên người nhận: <?php echo e($order['consignee_name']); ?> </div>
                                    <div class="ml-auto font-weight-bold"><?php echo e($order['order_date']); ?></div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Số điện thoại</h4>
                                    <div class="ml-auto font-weight-bold"> <?php echo e($order['consignee_phone']); ?></div>
                                </div>
                                <?php if($switch!='combo'): ?>
                                <div class="d-flex">
                                    <h4>Địa chỉ</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo e($order['address']); ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Hình thức vận chuyển</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo e($order['shipping_method']); ?> </div>
                                </div>
                                 <div class="d-flex">
                                    <h4>Sản phẩm:</h4>
                                    <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <div class="ml-4 mb-2 small"> <?php echo e($prod['product']->ten); ?></div>
                                     <br>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php else: ?>
                                <div class="d-flex">
                                    <h4>Ngày bắt đầu dịch vụ</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo e($order_detail['date_begin']); ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Hạn sử dụng dịch vụ</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo e($order_detail['date_end']); ?> </div>
                                </div>
                                
                                <div class="d-flex">
                                    <h4>Sản phẩm:</h4>
                                   
                                     <div class="ml-4 mb-2 small"> <?php echo e($GT->ten); ?></div>
                                     <br>
                                    
                                </div>
                                <?php endif; ?>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Thành tiền </h5>
                                    <div class="ml-auto h5" id="totalPrice"> $ <?php echo e(number_format($order['totalPrice'])); ?> </div>
                                </div>
                                 
                                <hr> </div>
                            
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Mọi chi tiết xin liên hệ</h2>
                        <p>Nếu có vấn đề xảy ra với đơn hàng hoặc cần hỗ trợ, xin vui lòng liên hệ với chúng tôi tại địa chỉ :  </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Địa chỉ: Số 32 <br>Đường Phạm Hùng, Quận 8<br> Tp Hồ Chí Minh </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:huydog121@gmail.com">huydog121@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/index/order.blade.php ENDPATH**/ ?>