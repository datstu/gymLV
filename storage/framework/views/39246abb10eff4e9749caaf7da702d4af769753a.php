
<?php $__env->startSection('content'); ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tư vấn</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">Tư vấn</li>
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
                        <form class="needs-validation" action="<?php echo e(route('tuvan')); ?>" method="POST" >
                            <?php echo csrf_field(); ?> 
                                 <div class="title"> <span>Giới tính</span> </div>
                            <div class="d-block my-3">                            
                                 <div class="custom-control custom-radio">
                                    <input id="nu" name="Gioitinh" type="radio" class="custom-control-input" value="0"  href="#sub-men2" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men2"   required>
                                    <label class="custom-control-label" for="nu">Nữ</label>
                                </div> 
                                <div class="custom-control custom-radio">
                                   
                                    <input id="nam" name="Gioitinh" type="radio" class="custom-control-input" value="1" href="#sub-men1" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men1" required>
                                    <label class="custom-control-label" for="nam">Nam</label>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="country">Chiều cao *</label>
                                     <input type="text" class="form-control" name="cc" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state">Cân nặng *</label>
                                    <input type="text" class="form-control" name="cn" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                               
                            </div>
                           <div class="row">
                            <div class="col-md-5 mb-3">
                                    <label for="state">Nghề nghiệp *</label>
                                    <select class="wide w-100" name="nn">
                                    <option data-display="Select">Chọn nghề nghiệp của bạn</option>
                                    <option value="hs" >Học sinh</option>
                                    <option value="cvl" >Có việc làm ổn định</option>
                                   
                                </select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                            <div class="col-md-7 mb-3">
                                    <label for="zip">Bạn có muốn sử dụng dịch vụ VIP?</label>
                                     <select class="wide w-100" name="vip">
                                    <option value="0" >Không cần thiết.</option>
                                    <option value="1" >Được</option>
                                </select>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
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
                       
                        
                        
                       
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-sm-6 col-lg-6 mb-3">
                   <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">                          
                                    <div class="collapse " id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                
                        <div class="col-md-12 col-lg-12" >
                            <div class="shipping-method-box">     
                            <div class="mb-4">
                                    <label for="state">Bạn có muốn có HLV riêng ?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="HLV" name="hlv" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="HLV">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="HLV1" name="hlv" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="HLV1">Không</label>  </div>                                  
                                </div>                          
                            <div class="mb-4">
                                    <label for="zip"><strong>MỤC TIÊU</strong></label>
                               
                                   
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="muctieu" class="custom-control-input" type="radio" value="luyentap" data-toggle="collapse" href="#formMT1">
                                        <label class="custom-control-label" for="shippingOption1">Rèn luyện sức khỏe</label>  </div>
                                    <div class="ml-4 mb-2 small">Dành cho nam giới muốn tập luyện thể chất, tăng cường sức khỏe bản thân</div>                            
                                   <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="muctieu" class="custom-control-input" type="radio" value="tangco" data-toggle="collapse" href="#formMT2">
                                        <label class="custom-control-label" for="shippingOption2">Giảm mỡ-tăng cơ</label>  </div>
                                    <div class="ml-4 mb-2 small">Dành cho nam giới muốn giảm mỡ, phát triển cơ bắp</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
               </div>
                     <div class="list-group-collapse sub-men">
                                    <div class="collapse " id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                        <div class="col-md-12 col-lg-12" >
                            <div class="shipping-method-box">
                               <div class="mb-4">
                                    <label for="state">Bạn có muốn có HLV riêng ?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="HLV2" name="hlv" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="HLV2">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="HLV3" name="hlv" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="HLV3">Không</label>  </div>                                  
                                </div>  
                                <div class="mb-4">
                                    <label for="zip"><strong>Bạn đến với GYM để :</strong></label>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="muctieu" class="custom-control-input" checked="checked" type="radio" value="luyentap">
                                        <label class="custom-control-label" for="shippingOption3">Tập luyện thể chất</label>  </div>
                                   
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption4" name="muctieu" class="custom-control-input" type="radio" value="thugian">
                                        <label class="custom-control-label" for="shippingOption4"> Thư giãn tinh thần</label> </div>
                                </div>
                        </div>
                        <a  href="#formMT3" data-toggle="tab"> <i class="fas fa-angle-double-right"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
                    </div>
                </div>





















                <div class="col-sm-6 col-lg-6 mb-3">
                     <div class="mt-3 collapse review-form-box" id="formMT1">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
    
                                <div class="mb-4">
                                    <label for="state">Bạn có muốn tham gia các buổi hoạt động nhóm khác( yoga, thể dục nhịp điệu, boxing... )?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q6" name="yoga" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="Q6">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q7" name="yoga" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="Q7">Không</label>  </div>                                  
                                </div>
                               
                                <div class="mb-4">
                                    <label for="state">Bạn muốn sử dụng chương trình tập cho người lớn tuổi (dành cho người cao tuổi )</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q8" name="nct" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="Q8">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q9" name="nct" class="custom-control-input" type="radio" value="0" checked="true">
                                        <label class="custom-control-label" for="Q9">Không</label>  </div>
                                    
                                    
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <input type="submit" class="ml-auto btn hvr-hover" value="Hoàn tất"> </div>
                        
                        </div>
                        <div class="mt-3 collapse review-form-box" id="formMT2">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
    
                                <div class="mb-4">
                                    <label for="state">Bạn có muốn phát triển cơ bắp như thế nào: </label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q10" name="tpbs_nam" class="custom-control-input" type="radio" value="san chac">
                                        <label class="custom-control-label" for="Q10">Săn chắc- body chuẩn</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q11" name="tpbs_nam" class="custom-control-input" type="radio" value="hypertrophy">
                                        <label class="custom-control-label" for="Q11">hypertrophy-Phát triển cơ</label>  </div>                                  
                                </div>
                               
                                <div class="mb-4">
                                    <label for="state">Bạn đã có kinh nghiệm với GYM chưa?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q12" name="newbie" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="Q12">Có, tôi có kinh nghiệm.</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q13" name="newbie" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="Q13">Không, tôi là người mới.</label>  </div>
                                    
                                    
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <input type="submit" class="ml-auto btn hvr-hover" value="Hoàn tất"> </div>
                        
                        </div>
                        <div class="mt-3 collapse review-form-box" id="formMT3">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
    
                                <div class="mb-4">
                                    <label for="state">Bạn có muốn tham gia các buổi hoạt động nhóm khác( yoga, thể dục nhịp điệu,.. )?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q14" name="yoga" class="custom-control-input" type="radio" value="1">
                                        <label class="custom-control-label" for="Q14">Có</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q15" name="yoga" class="custom-control-input" type="radio" value="0">
                                        <label class="custom-control-label" for="Q15">Không</label>  </div>                                  
                                </div>
                               
                                <div class="mb-4">
                                    <label for="state">Bạn có muốn phát triển thế nào?</label>
                                    <div class="custom-control custom-radio">
                                        <input id="Q16" name="tpbs_nu" class="custom-control-input" type="radio" value="tang can">
                                        <label class="custom-control-label" for="Q16">Tăng cân, body săn chắc.</label>  </div>
                                    
                                    <div class="custom-control custom-radio">
                                        <input id="Q17" name="tpbs_nu" class="custom-control-input" type="radio" value="giam can">
                                        <label class="custom-control-label" for="Q17">Giảm cân, thon gọn, giữ dáng.</label>  </div>
                                    
                                    
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <input type="submit" class="ml-auto btn hvr-hover" value="Hoàn tất"> </div>
                        
                        </div>
                    
                </div>
            </div>
                </form>
            
        </div>
    </div>
    <!-- End Cart -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/index/checkout.blade.php ENDPATH**/ ?>