@extends('template.layout')
@section('content')
     Start All Title Box -->
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
                            <h3>Thông tin khách hàng</h3>
                        </div>
                        <form class="needs-validation" action="{{ route('inhoadonGT') }}" method="get">
                            <input type="hidden"   name="id" value="{{$thongtin['id_user']}}">
                            <div class="mb-3">
                                    <label for="firstName">Tên người sử dụng *</label>
                                    <input type="text" class="form-control" id="firstName"  name="name" value="{{$thongtin['name']}}" required 
                                title="Họ tên không được bỏ trống">
                                    
                                </div>
                            
                            <div class="mb-3">
                                <label for="username">Phone *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="phone" value="{{$thongtin['phone']}}" pattern="[0-9]{10}" required title="Số điện thoại không chính xác"> 
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email  *</label>
                                <input type="email" class="form-control" id="email"name="email" value="{{$thongtin['email']}}" required> 
                            </div>
                             <!-- <div class="mb-3">
                                <label for="email">Ngày bắt đầu dịch vụ  *</label>
                                <input type="date" class="form-control" id="date"name="date"  required> 
                            </div>
                            <div class="mb-3">
                                <label for="phongtap">Phòng tập *</label>                         
                                    <select class="wide w-100" id="phongtap" name="phongtap" required>
									<option value="Choose..." data-display="Select">Choose...</option>
									@foreach($gym as $val)
									<option value="{{$val->id_gym}}">{{$val->address_gym}}</option>
									@endforeach
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                            </div> -->
                          
                           
                           
                            <hr class="mb-4">
                            <div class="title"> <span>Hình thức thanh toán</span> </div>
                            <div class="custom-control custom-radio">
                                <input id="tratruoc" name="paymentMethod" type="radio" class="custom-control-input" value="tratruoc"  href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1" required>
                                <label class="custom-control-label" for="tratruoc">Trả trước</label><br>
                                <small class="text-muted">Thanh toán trước bằng card</small>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="trasau" name="paymentMethod" type="radio" class="custom-control-input" value="trasau" href="#sub-men2" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men2" required checked>
                                <label class="custom-control-label" for="trasau">Trả sau</label><br>
                                <small class="text-muted">Thanh toán trực tiếp khi đến phòng tập</small>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">                          
                                    <div class="collapse " id="sub-men1" data-parent="#list-group-men">
                                        <hr class="mb-4">
                                            
                                            <div class="d-block my-3">
                                                <div class="custom-control custom-radio">
                                                    <input id="credit" name="pay" type="radio" class="custom-control-input" checked required>
                                                    <label class="custom-control-label" for="credit">Credit card</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="debit" name="pay" type="radio" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="debit">Debit card</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="paypal" name="pay" type="radio" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-name">Name on card</label>
                                                    <input type="text" class="form-control" id="cc-name" placeholder="" > <small class="text-muted">Full name as displayed on card</small>
                                                    <div class="invalid-feedback"> Name on card is required </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-number">Credit card number</label>
                                                    <input type="text" class="form-control" id="cc-number" placeholder="" >
                                                    <div class="invalid-feedback"> Credit card number is required </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="{{ url('public/user/images/payment-icon/1.png')}}" alt=""></li>
                                            <li><img class="img-fluid" src="{{ url('public/user/images/payment-icon/2.png')}}" alt=""></li>
                                            <li><img class="img-fluid" src="{{ url('public/user/images/payment-icon/3.png')}}" alt=""></li>
                                            <li><img class="img-fluid" src="{{ url('public/user/images/payment-icon/4.png')}}" alt=""></li>
                                            <li><img class="img-fluid" src="{{ url('public/user/images/payment-icon/5.png')}}" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                    </div>
                                </div> 
                                 <div class="list-group-collapse sub-men">
                                    <div class="collapse " id="sub-men2" data-parent="#list-group-men"></div>
                                </div>
                            </div>
                           
                               
                                
                            
                            <hr class="mb-1"> 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                               
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> {{$GT->ten}}</a>
                                            <div class="small text-muted">Đơn giá: $ {{number_format($GT->price)}}<span class="mx-2">|</span> Thời hạn: {{$GT->date}} tháng <span class="mx-2">|</span> Có {{$GT->HLV}} HLV</div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="product"  name="product" value="{{$GT->id_combo}}">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sản phẩm</h4>
                                    <div class="ml-auto font-weight-bold"> $  {{number_format($GT->price)}}</div>
                                </div>
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <?php 
                                    $num = $GT->price/10;
                                    $total = $GT->price+$num;

                                    ?>
                                    <div class="ml-auto font-weight-bold"> $ <?php echo number_format($num) ?> </div>
                                </div>
                                
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5" id="totalPrice"> $ <?php echo number_format($total) ?> </div>
                                </div>
                                 <input type="hidden" id="totalPriceinput"  name="totalPrice" value="<?php echo $total ?>">
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <input type="submit" class="ml-auto btn hvr-hover" value="Xác nhận"> </div>
                    </div>
                </div>
            </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@stop