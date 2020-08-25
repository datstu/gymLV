
<?php $__env->startSection('content'); ?>


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Gym list</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">GymList</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Wishlist  -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TÊN PHÒNG</th>
                                    <th>SLOT</th>
                                    <th>ĐỊA CHỈ</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $gym; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gym): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="images/img-pro-01.jpg" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									<?php echo e($gym->name); ?>

								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo e($gym->MAX); ?></p>
                                    </td>
                                    <td class="quantity-box"><?php echo e($gym->address_gym); ?></td>
                                   
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist -->

  


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hi\resources\views/index/Gymlist.blade.php ENDPATH**/ ?>