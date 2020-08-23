@extends('template.layout')
@section('content')

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
                                    <div class="font-weight-bold">Tên người nhận: {{$order['consignee_name']}} </div>
                                    <div class="ml-auto font-weight-bold">{{$order['order_date']}}</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Số điện thoại</h4>
                                    <div class="ml-auto font-weight-bold"> {{$order['consignee_phone']}}</div>
                                </div>
                                @if($switch!='combo')
                                <div class="d-flex">
                                    <h4>Địa chỉ</h4>
                                    <div class="ml-auto font-weight-bold">{{$order['address']}} </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Hình thức vận chuyển</h4>
                                    <div class="ml-auto font-weight-bold">{{$order['shipping_method']}} </div>
                                </div>
                                 <div class="d-flex">
                                    <h4>Sản phẩm:</h4>
                                    @foreach($product_cart as $prod)
                                     <div class="ml-4 mb-2 small"> {{$prod['product']->ten}}</div>
                                     <br>
                                     @endforeach
                                </div>
                                @else
                                <div class="d-flex">
                                    <h4>Ngày bắt đầu dịch vụ</h4>
                                    <div class="ml-auto font-weight-bold">{{$order_detail['date_begin']}} </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Hạn sử dụng dịch vụ</h4>
                                    <div class="ml-auto font-weight-bold">{{$order_detail['date_end']}} </div>
                                </div>
                                
                                <div class="d-flex">
                                    <h4>Sản phẩm:</h4>
                                   
                                     <div class="ml-4 mb-2 small"> {{$GT->ten}}</div>
                                     <br>
                                    
                                </div>
                                @endif
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Thành tiền </h5>
                                    <div class="ml-auto h5" id="totalPrice"> $ {{number_format($order['totalPrice'])}} </div>
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

@stop