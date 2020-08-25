  <!-- Start Footer  -->
   <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            @for( $i=1; $i<=10;$i++)
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ url('public/user/images/instagram-img-0'.$i.'.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
   
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 10.00pm</li> <li>Saturday: 10.00am to 10.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Location</h4>
                            <ul>
                                <li><a href="#">phong gym Q1</a></li>
                                <li><a href="#">phong gym Q2</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="back-to-top" title="Back to top" style="display: none;padding-top: 9px;">&uarr;</a>
    </footer>
    <!-- End Footer  -->
     <!-- ALL JS FILES -->
 <script src="{{ url('public/user/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ url('public/user/js/popper.min.js')}}"></script>
    <script src="{{ url('public/user/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ url('public/user/js/jquery.superslides.min.js')}}"></script>
    <script src="{{ url('public/user/js/bootstrap-select.js')}}"></script>
    <script src="{{ url('public/user/js/inewsticker.js')}}"></script>
    <script src="{{ url('public/user/js/bootsnav.js')}}"></script>
    <script src="{{ url('public/user/js/images-loded.min.js')}}"></script>
    <script src="{{ url('public/user/js/isotope.min.js')}}"></script>
    <script src="{{ url('public/user/js/owl.carousel.min.js')}}"></script>
    <script src="{{ url('public/user/js/baguetteBox.min.js')}}"></script>
    <script src="{{ url('public/user/js/form-validator.min.js')}}"></script>
    <script src="{{ url('public/user/js/contact-form-script.js')}}"></script>
    <script src="{{ url('public/user/js/custom.js')}}"></script>
    </body>
  
</html>