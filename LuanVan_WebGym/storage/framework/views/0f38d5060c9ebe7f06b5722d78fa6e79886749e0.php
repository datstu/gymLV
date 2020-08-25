<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form-v1 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/user_config/css/opensans-font.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/user_config/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')); ?>">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo e(url('public/user_config/css/style.css')); ?>"/>
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Thông tin cá nhân</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Thông tin cá nhân</h3>
									<p>Vui lòng nhập thông tin của bạn và tiến hành bước tiếp theo để chúng tôi có thể xây dựng tài khoản của bạn.</p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Họ</legend>
											<input type="text" class="form-control" id="first-name" name="first-name" placeholder="Nguyễn" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Tên</legend>
											<input type="text" class="form-control" id="last-name" name="last-name" placeholder="Văn Tèo" required>
										</fieldset>
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Số điện thoại</legend>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="+84 973 409 613" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row ">
									<div class="form-holder form-holder-2">
										<label class="special-label">Giới tính:</label>
										<select name="sex"  style="background: none;">
											
											<option value="">Nam</option>
											<option value="">Nữ</option>
											
										</select>
										
									</div>
								</div>
								
								<div class="form-row ">
									<div class="form-holder form-holder-2" >
										<label class="special-label">Địa chỉ:</label>
										
										<select  name="" id="" style="background: none;margin-bottom:30px">
											<option value="MM" disabled selected>Tỉnh/Thành Phố</option>
											<option value="16">Hồ Chí Minh</option>
											<option value="17">Hà Nội</option>
											<option value="18">Đà Nẵng</option>
											
										</select>
										<select name="year" id="" style="background: none;margin-bottom: 30px">
											<option value="YYYY" disabled selected>Quận/Huyện</option>
											<option value="2017">Quận 1</option>
											<option value="2016">Quận 8</option>
											<option value="2015">Quận 12</option>
											<option value="2014">Quận Cầu Giấy</option>
											<option value="2013">Quận Gò Vấp</option>
										</select>
										<select name="year" id="" style="background: none;margin-bottom: 30px">
											<option value="YYYY" disabled selected>Phường/xã</option>
											<option value="2017">Phường 4</option>
											<option value="2016">Phường 2</option>
											<option value="2015">Phường 3</option>
											<option value="2014">Phường 1</option>
											<option value="2013">Phường 5</option>
										</select>
									<div class="form-holder form-holder-2">
										<fieldset style="margin-left: -10px;" >
										<input style="margin-left: -10px;" border=1 type="text" class="form-control" id="phone" name="phone" placeholder="180 Cao Lỗ" >
									</fieldset>
									</div>
									</div>
								</div>
								<div class="form-row"></div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Hoàn Thành Tài Khoản</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Hoàn Thành Tài Khoản</h3>
									
								</div>
								
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Email của bạn</legend>
											<input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="vanteo@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Mật Khẩu</legend>
											<input type="password" class="form-control"  required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Nhập lại mật khẩu</legend>
											<input type="password" class="form-control"  required>
										</fieldset>
									</div>
								</div>
								
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label class="special-label">Ngày sinh:</label>
										<select name="month" id="month">
											<option value="MM" disabled selected>MM</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
										</select>
										<select name="date" id="date">
											<option value="DD" disabled selected>DD</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year" id="year">
											<option value="YYYY" disabled selected>YYYY</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
								<div class="form-row"></div>
							</div>
			            </section>

<h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Liên kết ngân hàng</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Liên kết ngân hàng</h3>
									<p>Vui lòng nhập thông tin của bạn và tiến hành bước tiếp theo để chúng tôi có thể xây dựng tài khoản của bạn.</p>
								</div>
								<div style="color: #666;font-size: 14px;font-weight: 600;">
			                			<input type="radio" class="radio" id='rad'  value="bank-1" >
			                			<label class="" for="rad"> Chưa có tài khoản</label>
		                		</div>
		                		<br>
								<div class="form-row">
									<div class="form-holder form-holder-1">
										<input type="text" name="find_bank" id="find_bank" placeholder="Tìm kiếm Ngân Hàng " class="form-control" required>
									</div>
									
								</div>
							
								
							



								<div class="form-row-total">
									<div class="form-row">
				                		<div class="form-holder form-holder-2 form-holder-3">
				                			<input type="radio" class="radio" name="bank-1" id="bank-1" value="bank-1" checked>
				                			<label class="bank-images label-above bank-1-label" for="bank-1">
				                				<img src="<?php echo e(url('public/user_config/images/form-v1-1.png')); ?>" alt="bank-1">
				                			</label>
											<input type="radio" class="radio" name="bank-2" id="bank-2" value="bank-2">
											<label class="bank-images label-above bank-2-label" for="bank-2">
												<img src="<?php echo e(url('public/user_config/images/form-v1-2.png')); ?>" alt="bank-2">
											</label>
											<input type="radio" class="radio" name="bank-3" id="bank-3" value="bank-3">
											<label class="bank-images label-above bank-3-label" for="bank-3">
												<img src="<?php echo e(url('public/user_config/images/form-v1-3.png')); ?>" alt="bank-3">
											</label>
				                		</div>
				                	</div>
				                	<div class="form-row">
				                		<div class="form-holder form-holder-2 form-holder-3">
				                			<input type="radio" class="radio" name="bank-4" id="bank-4" value="bank-4">
				                			<label class="bank-images bank-4-label" for="bank-4">
				                				<img src="<?php echo e(url('public/user_config/images/form-v1-4.png')); ?>" alt="bank-4">
				                			</label>
											<input type="radio" class="radio" name="bank-5" id="bank-5" value="bank-5">
											<label class="bank-images bank-5-label" for="bank-5">
												<img src="<?php echo e(url('public/user_config/images/form-v1-5.png')); ?>" alt="bank-5">
											</label>
											<input type="radio" class="radio" name="bank-6" id="bank-6" value="bank-6">
											<label class="bank-images bank-6-label" for="bank-6">
												<img src="<?php echo e(url('public/user_config/images/form-v1-6.png')); ?>" alt="bank-6">
											</label>
				                		</div>
				                	</div>
								</div>
							</div>
			            </section>
















		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="<?php echo e(url('public/user_config/js/jquery-3.3.1.min.js')); ?>"></script>
	<script src="<?php echo e(url('public/user_config/js/jquery.steps.js')); ?>"></script>
	<script src="<?php echo e(url('public/user_config/js/main.js')); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html><?php /**PATH C:\xampp\htdocs\hi\resources\views/user/user.blade.php ENDPATH**/ ?>