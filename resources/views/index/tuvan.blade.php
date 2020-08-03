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
                <div class="col-sm-6 col-lg-12 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Thông tin bản thân</h3>
                        </div>
                        
                            
                               
                                  <label class="custom-control-label" >Bạn là {{$Gioitinh}} và chỉ số BMI của bạn là <strong>{{$BMI}}</strong> hiện tại cơ thể bạn <strong>{{$body}}</strong>. Dựa theo khảo sát, bạn có lối sống <strong>{{$Dinhduong}}</strong>  </label>
                                   <label class="custom-control-label" >Chúng tôi khuyên bạn <strong>{{$advice}}</strong>  </label>
                                   <hr class="mb-1">
                                   <label class="custom-control-label" >Theo như tình trạng cơ thể và độ tuổi của bạn , nếu bạn có nhu cầu sử dụng dịch vụ của chúng tôi thì chúng tôi sẽ gợi ý các gói tập dành riêng cho bạn <strong>ở bên dưới</strong>, bạn có thể lựa chọn sau đó đăng ký và đến phòng tập của chúng tôi để tập luyện ngay. <strong>Xin cảm ơn các bạn! </strong></label>
                           
                            
                            
                           
                           
                       
                            
                          
                            
                            <hr class="mb-1"> 
                    </div>
                </div>
                 
                        
<div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Gợi ý gói tập</h1>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                         @foreach( $product as $sp)
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="{{ url('public/user/images/goitap.png')}}" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="{{ route('thanhtoanGT',$sp['id_combo']) }}">Đăng ký</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>{{$sp['ten']}}</h4> 
                                    <h5>{{$sp['price']}}</h5>
                                </div>
                            </div>
                        </div> 
                         @endforeach 
                    </div>
                </div>
            </div>                  
          
        </div>
    </div>
    <!-- End Cart -->

  @stop