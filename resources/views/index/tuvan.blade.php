@extends('template.layout')
@section('content')



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
                            <h3>Thông tin bản thân</h3>
                        </div>
                        
                            
                               
                                  <label class="custom-control-label" >Bạn là {{$Gioitinh}} và chỉ số BMI của bạn là <strong>{{$BMI}}</strong> hiện tại cơ thể bạn <strong>{{$Tinhtrang}}</strong>  </label>
                                   <label class="custom-control-label" >Chúng tôi khuyên bạn <strong>{{$Khuyen}}</strong>  </label>
                                   <hr class="mb-1">
                                   <label class="custom-control-label" >Theo như tình trạng cơ thể và độ tuổi của bạn , nếu bạn có nhu cầu sử dụng dịch vụ của chúng tôi thì chúng tôi sẽ gợi ý các gói tập dành riêng cho bạn <strong>ở bên</strong>, bạn có thể lựa chọn sau đó đăng ký và đến phòng tập của chúng tôi  để tập luyện ngay. <strong>Xin cảm ơn các bạn! </strong></label>
                           
                            
                            
                           
                           
                       
                            
                          
                            
                            <hr class="mb-1"> 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        
                        
                   
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Gợi ý</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> $ 440 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 40 </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 10 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold"> $ 2 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5"> $ 388 </div>
                                </div>
                                <hr> </div>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

  @stop