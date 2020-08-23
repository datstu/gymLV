@extends('template.layout')
@section('content')
@if(Session::has('mess'))
<script type="text/javascript">
        alert("{{Session('mess')}}");
       
    </script>
 <?php Session::forget('mess'); 
  ?>
 
@endif
@if(Session::has('error'))
<script type="text/javascript">
        alert("{{Session('error')}}");
    </script>
 <?php 
 Session::forget('error'); ?>
 
@endif
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
           
                <div class="col-sm-6 col-lg-6 mb-3">
                    <form class="mt-3 collapse review-form-box {{$ac2}}" id="formRegister" action="add" method="GET">
                        <div class="title-left">
                        <h3>Create New Account</h3>
                    </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">Họ tên *</label>
                                <input type="text" class="form-control" id="InputName" name="name" placeholder="Phạm Minh A" required 
                                title="Họ tên không được bỏ trống"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email *</label>
                                <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="email@abc.com" required > </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Password *</label>
                                <input type="password" class="form-control" id="InputPassword1" name="pass" placeholder="Password" pattern="\S{6,}" required title="Password phải có ít nhất 6 ký tự"> </div>
                            
                                <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Số điện thoại *</label>
                                <input type="text" class="form-control" id="InputLastname" name="phone" placeholder="090xxxxxxxx" pattern="[0-9]{10}" required title="Số điện thoại không chính xác"> </div>
                            <div class="form-group col-md-12">
                                <label for="InputLastname" class="mb-0">Địa chỉ *</label>
                                <input type="text" class="form-control" id="InputLastname" name="address" placeholder="xx-Đường abc Phường x Thành phố HCM" pattern="{1,50}" required> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Đăng kí</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    
                   
                    <form class="mt-3 collapse review-form-box {{$ac1}}" id="formLogin" action="{{route('dangnhap')}}" method="post" >
                         @csrf
                        <div class="title-left">
                        <h3>Account Login</h3>
                    </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail" name="email" placeholder="email@abc.com" required> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword" name="pass" placeholder="Password" pattern="\S{6,}" required title="Password phải có ít nhất 6 ký tự"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Login</button>
                    </form>
                </div>
                
           
        </div>
    </div>
    <!-- End Cart -->

@stop