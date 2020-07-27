@extends('template.layout')
@section('content')
<script type="text/javascript" >
function F1(price)
{
            $("#priceShipping").html('');
            var prices = Number(price).toLocaleString('en');

            $("#priceShipping").html(prices);

             $("#totalPrice").html('');
             var product_price={{$totalPrice+10000}};
            var totalPrice = price +product_price ; 
              $("#totalPriceinput").val(totalPrice);
             var totalPrice='$ '+Number(totalPrice).toLocaleString('en');

            $("#totalPrice").html(totalPrice);

              $("#totalPriceinput").html('');
           

         
            

 }       
    
</script>
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
                            <h3>Thông tin khách hàng</h3>
                        </div>
                        <form class="needs-validation" action="{{route('inhoadon')}}" method="get">
                            <input type="hidden"   name="id" value="{{$thongtin['id_user']}}">
                            <div class="mb-3">
                                    <label for="firstName">Tên người nhận *</label>
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
                            <div class="mb-3">
                                <label for="address">Địa chỉ giao hàng *</label>
                                <input type="text" class="form-control" id="address"  name="address" value="{{$thongtin['address']}}" pattern="{1,50}" required> </div>
                           
                          
                           
                           
                            <hr class="mb-4">
                            <div class="title"> <span>Payment</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
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
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" >
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" >
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1"> 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Hình thức vận chuyển</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping_option" class="custom-control-input" value="normal" checked="checked" onclick="F1(0)" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Vận chuyển thường</label> <span class="float-right font-weight-bold">FREE</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 ngày)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shipping_option" class="custom-control-input" type="radio" value="fast" onclick="F1(20000)">
                                        <label class="custom-control-label" for="shippingOption2">Vận chuyển nhanh</label> <span class="float-right font-weight-bold">$ 20.000</span> </div>
                                    <div class="ml-4 mb-2 small">(2-4 ngày)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="shipping_option" class="custom-control-input" type="radio" value="superf" onclick="F1(30000)">
                                        <label class="custom-control-label"  for="shippingOption3">Siêu nhanh</label> <span class="float-right font-weight-bold">$ 30.000</span> </div>
                                        <div class="ml-4 mb-2 small">(trong 24h)</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    @foreach($product_cart as $prod)
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> {{$prod['product']->ten}}</a>
                                            <div class="small text-muted">Đơn giá: $ {{number_format($prod['product']->price)}}<span class="mx-2">|</span> Số lượng: {{$prod['soluong']}} <span class="mx-2">|</span> Thành tiền: $ {{number_format($prod['price'])}}</div>
                                        </div>
                                    </div>
                                    @endforeach

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
                                    <div class="ml-auto font-weight-bold"> $  {{number_format($totalPrice)}}</div>
                                </div>
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold"> $ 10.000 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold" id="priceShipping"> $ 0 </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5" id="totalPrice"> $ {{number_format($totalPrice+10000)}} </div>
                                </div>
                                 <input type="hidden" id="totalPriceinput"  name="totalPrice" value="{{$totalPrice+10000}}">
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