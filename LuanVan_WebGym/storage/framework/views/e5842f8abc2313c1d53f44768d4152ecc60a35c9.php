
<?php $__env->startSection('content'); ?>
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="<?php echo e(url('public/user/images/banner-01.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Gym H&D</strong></h1>
                            <p class="m-b-40">Hệ thống phòng gym hiện đại, đạt tiêu chuẩn Châu Âu.</p>
                            <p><a class="btn hvr-hover" href="#">ĐĂNG KÍ NGAY</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo e(url('public/user/images/banner-02.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Cam Kết</strong></h1>
                            <p class="m-b-40">Dịch vụ tốt nhất, hoàn hảo nhất, luôn đồng hành với các bạn trong hành trình thay đổi bản thân, thay đổi cuộc sống.</p>
                             <p><a class="btn hvr-hover" href="#">ĐĂNG KÍ NGAY</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo e(url('public/user/images/banner-03.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong><br>Chăm chỉ - Thành công</strong></h1>
                            <p class="m-b-40">Chúng tôi luôn nỗ lực thay đôi, phát triễn để cung cấp đến bạn những kiến thức đúng và chuẩn nhất, bạn chỉ cần chăm chỉ luyện tập và thành công.</p>
                             <p><a class="btn hvr-hover" href="#">ĐĂNG KÍ NGAY</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

<!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
             <div class="title-all text-center">
                        <h1>TƯ VẤN</h1>
                    </div>
            <div class="row">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?php echo e(url('public/user/images/tuvan.png')); ?>" alt="" />
                        <a class="btn hvr-hover" href="<?php echo e(route('checklogin')); ?>">TƯ VẤN MIỄN PHÍ CHO NGƯỜI MỚI</a>
                    </div>
                </div>
                
                </div>
            </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="<?php echo e(url('public/user/images/add-img-03.jpg')); ?>" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="<?php echo e(url('public/user/images/add-img-05.jpg')); ?>" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>TPBS & Phụ kiện</h1>
                        <p>Chúng tôi cam kết cung cấp các sản phẩm chất lượng nhất và an toàn nhất cho người sử dụng</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">TPBS</button>
                            <button data-filter=".best-seller">Phụ kiện</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <?php $__currentLoopData = $phukien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">HOT</p>
                            </div>



                            <img src="<?php echo e(url('public/uploads/product/'.$sp->img)); ?>" class="img-fluid" alt="Image">


                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="<?php echo e(route('themgiohang',$sp->id_product)); ?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo e($sp->ten); ?></h4>
                            <h5> <?php echo e($sp->price); ?></h5>
                        </div>
                    </div>
                </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $tpbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
    <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">HOT</p>
                            </div>

                            <img src="<?php echo e(url('public/uploads/product/'.$sp->img)); ?>" class="img-fluid" alt="Image">

                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="<?php echo e(route('themgiohang',$sp->id_product)); ?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo e($sp->ten); ?></h4>
                            <h5> <?php echo e($sp->price); ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- End Products  -->

   
    <!-- End Blog  -->


   
    <?php $__env->stopSection(); ?>
    <!-- End Instagram Feed  -->



   

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hi\resources\views/index/home.blade.php ENDPATH**/ ?>