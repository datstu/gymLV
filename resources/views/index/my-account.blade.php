@extends('template.layout')
@section('content')


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                  <a   href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1"> <i class="fa fa-gift"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Your Orders</h4>
                                    <p>Kiểm tra lại hóa đơn </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"><i class="fa fa-lock"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Login &amp; security</h4>
                                    <p>Edit login, name, and mobile number</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                   <a href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men1" > <i class="fa fa-location-arrow"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Xem gói tập </h4>
                                    <p>Kiểm tra gói tập đã đăng kí</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-credit-card"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Payment options</h4>
                                    <p>Edit or add payment methods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-paypal"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>PayPal</h4>
                                    <p>View benefits and payment settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fab fa-amazon"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Amazon Pay balance</h4>
                                    <p>Add money to your balance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-box">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12">                          
                              <div class="mt-3 collapse review-form-box  " id="formLogin">
                            <div class="account-box">

                                <div class="service-box">
                                    <div class="service-desc">
                                        <h4>Đơn hàng đã đặt</h4>
                                        <ul>
                                           @foreach($order as $value)
                                            <li> <a href="#"><strong>ID: {{$value->id_order}}</strong>&ensp;{{$value->order_date}}&ensp;Người nhận: {{$value->consignee_name}}<br>Hình thức vận chuyển: {{$value->shipping_method}}&ensp;Price: {{$value->totalPrice}}&ensp;<h1>Trạng thái: {{$value->name}}</h1></a> </li>
                                              <hr class="mb-4">
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
 
                <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">                          
                                    <div class="collapse " id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <div class="account-box">
                                                <div class="service-box">
                                                    <div class="service-desc">
                                                        <h4>Đơn hàng đã đặt</h4>
                                                        <ul>
                                                           @foreach($order as $value)
                                                            <li> <a href="#"><strong>ID: {{$value->id_order}}</strong>&ensp;{{$value->order_date}}&ensp;Người nhận: {{$value->consignee_name}}<br>Hình thức vận chuyển: {{$value->shipping_method}}&ensp;Price: {{$value->totalPrice}}&ensp;<h1>Trạng thái: {{$value->name}}</h1></a> </li>
                                                              <hr class="mb-4">
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="list-group-collapse sub-men">
                                    <div class="collapse " id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <div class="account-box">
                                                <div class="service-box">
                                                    <div class="service-desc">
                                                        <h4>Gói tập đã đăng ký</h4>
                                                        <ul>
                                                           @foreach($combo as $value)
                                                           @if($value->id_user == $user->id_user )
                                                            <li> <a href="#"><strong>Người sử dụng: {{$value->consignee_name}} </strong>&ensp;Ngày đăng ký: {{$value->date_begin}}<br>Dịch vụ: {{$value->ten}}({{$value->date}} tháng)&ensp;Địa điểm: {{$value->address_gym}}<br>Thời hạn: {{$value->date_end}}</a> </li>
                                                              <hr class="mb-4">
                                                              @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>

            </div>
        </div>
    </div>
    <!-- End My Account -->

    @stop