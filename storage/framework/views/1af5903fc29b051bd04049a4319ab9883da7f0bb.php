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
        ?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Gym H&D</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo e(url('public/user/images/favicon.ico')); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/user/css/bootstrap.min.css')); ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/user/css/style.css')); ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/user/css/responsive.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/user/css/custom.css')); ?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="right-phone-box">
                        <p>Liên hệ:- <a href="#"> +11 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <?php if(Session::has('User')): ?>
                            <li><a href="<?php echo e(route('my-account')); ?>"><i class="fa fa-user s_color"></i><?php echo e(Session('User')->name); ?> </a></li>
                            <li><a href="<?php echo e(route('dangxuat')); ?>"><i class="fas fa-location-arrow"></i>Logout</a></li>
                            <?php else: ?>  
                            <li><a href="<?php echo e(route('viewlogin')); ?>"><i class="fa fa-user s_color"></i> Đăng nhập</a>
                            </li>
                             <li><a href="<?php echo e(route('viewregister')); ?>"><i class="fa fa-user s_color"></i> Đăng kí</a>
                            </li>
                           <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
                        <form action="<?php echo e(url('user')); ?>">
						<select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
							<option>Register Here</option>
							<option>Sign In</option>
						</select>

                        </form>
					</div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Giảm giá 20% đối với Sinh Viên
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="<?php echo e(route('index')); ?>"><img src="<?php echo e(url('public/user/images/logo2.png')); ?>" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">                   
                        <li class="nav-item active"><a class="nav-link" href="<?php echo e(route('index')); ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>">Giới thiệu</a></li>

                        <li class="dropdown">
                            <a href="BAI-VIET" class="nav-link dropdown-toggle " data-toggle="dropdown">Thư Viện </a>

                            <ul class="dropdown-menu">
								<li><a href="shop.html">Bài Tập</a></li>
                                <li><a href="wishlist.html">Dinh Dưỡng</a></li>
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="SHOP" class="nav-link dropdown-toggle " data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(route('goitap')); ?>">Gói tập</a></li>
                                <li><a href="<?php echo e(route('phukien')); ?>">Phụ Kiện</a></li>
                            </ul>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('phonggym')); ?>">Phòng Gym</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('book')); ?>">Đặt lịch</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge"><?php if(Session::has('cart')): ?><?php echo e(Session('cart')->totalQty); ?><?php else: ?> 0 <?php endif; ?></span>
								<p>My Cart</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <?php if(Session::has('cart')): ?>
                            <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="#" class="photo"><img src="<?php echo e(url('public/uploads/product/'.$prod['product']->img)); ?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="#"><?php echo e($prod['product']->ten); ?></a></h6>
                            <p><?php echo e($prod['soluong']); ?>x - <span class="price">$<?php echo e(number_format($prod['product']->price)); ?></span></p>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="total">
                            <a href="CART-DETAIL" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $<?php if(Session::has('cart')): ?><?php echo e(number_format($totalPrice)); ?> <?php else: ?> 0 <?php endif; ?></span>
                        </li>
                        <?php else: ?>
                        <li>
                            
                            <h6><a href="#">Trống</a></h6>
                            <p>Vui lòng chọn sản phẩm cần mua <span class="price"></span></p>
                        </li>
                         <li class="total">
                            <a href="CART-DETAIL" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: 0</span>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <!-- End Top Search -->
<?php /**PATH C:\xampp\htdocs\huy\resources\views/template/header.blade.php ENDPATH**/ ?>