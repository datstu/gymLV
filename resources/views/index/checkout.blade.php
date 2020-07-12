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
            <div class="row new-account-login">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Thông tin bản thân</h3>
                        </div>
                        <form class="needs-validation" action="Thongtin" >
                            
                                 <div class="title"> <span>Giới tính</span> </div>
                            <div class="d-block my-3">                            
                                 <div class="custom-control custom-radio">
                                    <input id="nu" name="Gioitinh" type="radio" class="custom-control-input" value="nu" data-toggle="collapse" href="#formRegister"  aria-expanded="false" required>
                                    <label class="custom-control-label" for="nu">Nữ</label>
                                </div> 
                                <div class="custom-control custom-radio">
                                   
                                    <input id="nam" name="Gioitinh" type="radio" class="custom-control-input" value="nam" data-toggle="collapse" href="#formLogin"  aria-expanded="false" required>
                                    <label class="custom-control-label" for="nam">Nam</label>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Chiều cao *</label>
                                     <input type="text" class="form-control" name="cc" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Cân nặng *</label>
                                    <input type="text" class="form-control" name="cn" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Độ tuổi *</label>
                                     <select class="wide w-100" name="dt">
                                    <option data-display="Select">Chọn độ tuổi của bạn</option>
                                    <option value="vtn" >dưới 18</option>
                                    <option value="thn" >18-30</option>
                                    <option value="trn" >30-50</option>
                                    <option value="lt" >trên 50</option>
                                </select>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                            
                            <div class="d-block my-3">
                                    <label for="state">Nghề nghiệp *</label>
                                    <select class="wide w-100" name="nn">
                                    <option data-display="Select">Chọn nghề nghiệp của bạn</option>
                                    <option value="hs" >Học sinh</option>
                                    <option value="cvl" >Có việc làm ổn định</option>
                                    <option value="k">rãnh rỗi</option>
                                   
                                </select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                           
                       
                            
                          
                            
                            <hr class="mb-1"> 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12" >
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Dinh dưỡng</h3>
                                </div>
                                <div class="mb-4">
                                    <label for="state">Bạn có ngủ đủ giấc?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q0" name="dd1" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="Q0">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q1" name="dd1" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="Q1">Không</label>  </div>                                  
                                </div>
                               
                                <div class="mb-4">
                                    <label for="state">Bạn có đang ăn đủ bữa trong ngày (3 bữa hoặc hơn )</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q2" name="dd2" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="Q2">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q3" name="dd2" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="Q3">Không</label>  </div>
                                    
                                    
                                </div>
                               
                                <div class="mb-4">
                                    <label for="state">Tâm trạng của bạn có đang thoải mái?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q4" name="dd3" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="Q4">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q5" name="dd3" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="Q5">Không</label>  </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <input type="submit" class="ml-auto btn hvr-hover" value="Hoàn tất" > </div>
                        
                        
                       
                    </div>
                </div>
            </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="mb-4">
                                <label for="zip">Bạn muốn thân hình:</label>
                                    <div class="custom-control custom-radio">
                                        <input id="nam1" name="ch1" class="custom-control-input"  type="radio" value="1">
                                        <label class="custom-control-label" for="nam1">Cơ bắp</label>  </div>
                                   
                                    <div class="custom-control custom-radio">
                                        <input id="nam2" name="ch1" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="nam2">thon gọn - khỏe khoắn</label>  </div>
                    
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="mb-4">
                                <label for="zip">Bạn có thể đảm bảo chế độ ăn mà chúng tôi đưa ra?:</label>
                                    <div class="custom-control custom-radio">
                                        <input id="nam3" name="ch2" class="custom-control-input"  type="radio" value="1">
                                        <label class="custom-control-label" for="nam3">Đảm bảo</label>  </div>
                                   
                                    <div class="custom-control custom-radio">
                                        <input id="nam4" name="ch2" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="nam4">Không thể</label>  </div>
                    
                                </div>
                                <div class="mb-4">
                                    <label for="zip"><strong>MỤC TIÊU</strong></label>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="muctieu" class="custom-control-input" checked="checked" type="radio" value="nhom1">
                                        <label class="custom-control-label" for="shippingOption1">Giảm cân</label>  </div>
                                    <div class="ml-4 mb-2 small">Dành cho người thừa cân muốn có vóc dáng thon gọn</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="muctieu" class="custom-control-input" type="radio" value="nhom2">
                                        <label class="custom-control-label" for="shippingOption2">Giảm mỡ-tăng cơ</label>  </div>
                                    <div class="ml-4 mb-2 small">Dành cho nam giới muốn giảm mỡ, phát triển cơ bắp</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="muctieu" class="custom-control-input" type="radio" value="nhom3">
                                        <label class="custom-control-label" for="shippingOption3">Tăng cường sức khỏe</label></div>
                                        <div class="ml-4 mb-2 small">Tập để nâng cao thể lực, sức khỏe</div>
                                </div>
                        </div>
                    </div>
               
                    <div class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">First Name</label>
                                <input type="text" class="form-control" id="InputName" placeholder="First Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Last Name</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Last Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password"> </div>
                        </div>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

  @stop