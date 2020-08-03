@extends('template.layout')
@section('content')
@if(Session::has('mess'))
<script type="text/javascript">
        alert("{{Session('mess')}}");
       
    </script>
 <?php Session::forget('mess'); 
  ?>
 
@endif

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
                                     <a href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men3" ><i class="fa fa-lock"></i> </a>
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
                                   <a href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2" > <i class="fa fa-location-arrow"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Xem gói tập </h4>
                                    <p>Kiểm tra gói tập đã đăng kí</p>
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

                                  <div class="list-group-collapse sub-men">
                                    <div class="collapse " id="sub-men3" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <div class="account-box">
                                                <div class="service-box">
                                                    <div class="service-desc">
                                                        <h4>Thay dổi thông tin</h4>
                                                    <form class="mt-3 collapse review-form-box show "  action="{{route('updateAccount')}}" method="GET">
                                                    <div class="form-row">
                                                        <input type="hidden" name="id" value="{{$user->id_user}}">
                                                        <div class="form-group col-md-6">
                                                            <label for="InputName" class="mb-0">Họ tên *</label>
                                                            <input type="text" class="form-control" id="InputName" name="name" value="{{$user->name}}" placeholder="Phạm Minh A" required 
                                                            title="Họ tên không được bỏ trống"> </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="InputEmail1" class="mb-0">Email *</label>
                                                            <input type="email" class="form-control" id="InputEmail1" name="email"  value="{{$user->email}}" placeholder="email@abc.com" required > </div>
                                                       
                                                        
                                                            <div class="form-group col-md-6">
                                                            <label for="InputLastname" class="mb-0">Số điện thoại *</label>
                                                            <input type="text" class="form-control" id="InputLastname" name="phone" value="{{$user->phone }}" placeholder="090xxxxxxxx" pattern="[0-9]{10}" required title="Số điện thoại không chính xác"> </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="InputLastname" class="mb-0">Địa chỉ *</label>
                                                            <input type="text" class="form-control" id="InputLastname" name="address" value="{{$user->address}}" placeholder="xx-Đường abc Phường x Thành phố HCM" pattern="{1,50}" required> </div>
                                                            <button type="submit" class="btn hvr-hover">Cập nhật</button>
                                                            </div>
                                                    </form>
                                                        <hr class="mb-4">
                                                   
                                                        <div class="form-group col-md-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="same-address" data-toggle="collapse" href="#formLogin" aria-expanded="false">
                                                            <label class="custom-control-label" for="same-address">Đổi mật khẩu</label>
                                                            </div></div>
                                                        <form class="mt-3 collapse review-form-box  col-md-12" id="formLogin" action="{{route('updateAccount_pass')}}" method="post"> 
                                                         @csrf   
                                                         <input type="hidden" name="id" value="{{$user->id_user}}">
                                                            <div class="form-group col-md-6">
                                                                <label for="InputPassword1" class="mb-0">Password cũ *</label>
                                                                <input type="password" class="form-control" id="InputPassword1" name="pass_old" placeholder="Password" pattern="\S{6,}" required title="Password phải có ít nhất 6 ký tự"> </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="InputPassword1" class="mb-0">Password mới *</label>
                                                                <input type="password" class="form-control" id="InputPassword1" name="pass_new" placeholder="Password" pattern="\S{6,}" required title="Password phải có ít nhất 6 ký tự"> </div>
                                                           <button type="submit" class="btn hvr-hover">Cập nhật</button>
                                                       </form>
                                                   
                                                    
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