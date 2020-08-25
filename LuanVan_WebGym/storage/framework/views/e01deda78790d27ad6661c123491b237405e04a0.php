
<?php $__env->startSection('content'); ?>


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Đặt lịch tập</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Đặt lịch</li>
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
       
                <div class="col-lg-6 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Đặt lịch cho tuần sau, chốt lịch vào 0h thứ 7 mỗi tuần</h2>
                       
                        <ul class="list-group" style="font-size: 16px;">
                            <li class="list-group-item " style="font-size: 18px;">Ca 1: 6h sáng - 12h trưa.</li>
                          <li class="list-group-item " style="font-size: 18px;">Ca 2: 12h trưa - 18h tối.</li>
                          <li class="list-group-item " style="font-size: 18px;">Ca 3: 18h tối - 00h</li> <li class="list-group-item " style="font-size: 18px;">Bạn đang chọn lịch tại phòng gym <strong><?php echo e($phonggym->name); ?> - <?php echo e($phonggym->address_gym); ?></strong></li>
                          <li class="list-group-item " style="font-size: 18px;">Bạn muốn bỏ chọn thứ mấy thì chọn vào tên thứ.(vd: hủy chọn 1 trong 3 ca ngày thứ 2 thì chọn tên thứ 2)</li>
                          
                          <?php if($ac=='show'): ?>
                           <li class="list-group-item " style="font-size: 18px;"><strong>Bạn đã đăng ký lịch trước đó. Nếu bạn muốn đổi lịch thì mời bạn chọn ca tập mới.</strong></li>
                           <?php endif; ?>
                           <?php if($ac1=='show'): ?>
                           <li class="list-group-item " style="font-size: 18px;"><strong>Chú ý: Gói có phục vụ HLV sẽ không được đổi lịch tập</strong></li>
                           <?php endif; ?>
                        </ul>
                    </div>
                </div>
                 <div class="col-lg-6 col-sm-12">
                    <div class="contact-form-right collapse <?php echo e($ac); ?><?php echo e($ac1); ?>">
                        <h2>Lịch bạn đã đặt trước đó:</h2>
                       
                        <ul class="list-group" style="font-size: 16px;">
                           
                            <li class="list-group-item " style="font-size: 18px;">Thứ 2 : <?php if($listcus->thu2!='null'): ?><?php echo e($listcus->thu2); ?><?php else: ?> Trống <?php endif; ?></li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 3 : <?php if($listcus->thu3!='null'): ?><?php echo e($listcus->thu3); ?><?php else: ?> Trống <?php endif; ?></li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 4 : <?php if($listcus->thu4!='null'): ?><?php echo e($listcus->thu4); ?><?php else: ?> Trống <?php endif; ?></li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 5 : <?php if($listcus->thu5!='null'): ?><?php echo e($listcus->thu5); ?><?php else: ?> Trống <?php endif; ?></li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 6 : <?php if($listcus->thu6!='null'): ?><?php echo e($listcus->thu6); ?><?php else: ?> Trống <?php endif; ?></li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 7 : <?php if($listcus->thu7!='null'): ?><?php echo e($listcus->thu7); ?><?php else: ?> Trống <?php endif; ?></li>
                            <li class="list-group-item " style="font-size: 18px;">Chủ nhật : <?php if($listcus->chunhat!='null'): ?><?php echo e($listcus->chunhat); ?><?php else: ?> Trống <?php endif; ?></li>                         
                        </ul>
                    </div>
                </div>
           
    
        
 
    </div> <?php 
    $mess  = Session::get('message');
    if($mess) {
        echo $mess;
        Session::put('message',null);
    }

    ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive collapse <?php echo e($ac); ?><?php echo e($ac2); ?>">
                        <table class="table">
                            <thead>
                                <form action="<?php if($ac=='show'): ?>
                                <?php echo e(route('doilich')); ?><?php else: ?> <?php echo e(route('datlich')); ?>

                                <?php endif; ?>" method="get">
                                    <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="id_gym" value="<?php echo e($phonggym->id_gym); ?>">
                                
                                <input type="hidden" name="id_gt" value="<?php echo e($goitap); ?>">
                        <tr>
                            <th></th>
                            <th>
                                <label for="ca1_null">Thứ 2</label>
                                <input style="display: none;" type="radio" checked 
                                name="t2" id="ca1_null" checked value="null">
                            </th>
                            <th>
                                <label for="ca2_null">Thứ 3</label>
                                <input style="display: none;" type="radio" checked 
                                name="t3" id="ca2_null" value="null">
                            </th>
                            <th>
                                <label for="ca3_null">Thứ 4</label>
                                <input style="display: none;" type="radio" checked 
                                name="t4" id="ca3_null" value="null">
                            </th>
                            <th>
                                <label for="ca4_null">Thứ 5</label>
                                <input style="display: none;" type="radio" checked 
                                name="t5" id="ca4_null" value="null">
                            </th>
                            <th>
                                <label for="ca5_null">Thứ 6</label>
                                <input style="display: none;" type="radio" checked 
                                name="t6" id="ca5_null" value="null">
                            </th>
                            <th>
                                <label for="ca6_null">Thứ 7</label>
                                <input style="display: none;" type="radio" checked 
                                name="t7" id="ca6_null" value="null">
                            </th>
                            <th>
                                <label for="ca7_null">Chủ nhật</label>
                                <input style="display: none;" type="radio" checked 
                                name="cn" id="ca7_null" value="null">
                            </th>
                        </tr>
                            </thead>
                            <tbody>
                        <tr>
                            <td>Ca 1</td>
                             <?php for($i = 2; $i <= 8; $i++): ?>
                             <?php if($i==8): ?>
                            <td>
                                <input type="radio" name="cn" id="ca1_t8" value="ca1">
                                <label for="ca1_t8">Chọn (<?php echo e($val['chunhat']['ca1']); ?>/<?php echo e($phonggym->MAX); ?>)</label>
                            </td>
                             <?php else: ?> 
                             <td>
                                <input type="radio" name="t<?php echo e($i); ?>" id="ca1_t<?php echo e($i); ?>"  value="ca1">
                                <label for="ca1_t<?php echo e($i); ?>">Chọn (<?php echo e($val['thu'."$i"]['ca1']); ?>/<?php echo e($phonggym->MAX); ?>)</label>
                            </td>
                             <?php endif; ?>
                           
                            <?php endfor; ?>
                           
                        </tr>
                        <tr>
                            <td>Ca 2</td>
                            <?php for($i = 2; $i <= 8; $i++): ?>
                             <?php if($i==8): ?>
                            <td>
                                <input type="radio" name="cn" id="ca2_t8" value="ca2">
                                <label for="ca2_t8">Chọn (<?php echo e($val['chunhat']['ca2']); ?>/<?php echo e($phonggym->MAX); ?>)</label>
                            </td>
                             <?php else: ?> 
                             <td>
                                <input type="radio" name="t<?php echo e($i); ?>" id="ca2_t<?php echo e($i); ?>"  value="ca2">
                                <label for="ca2_t<?php echo e($i); ?>">Chọn (<?php echo e($val['thu'."$i"]['ca2']); ?>/<?php echo e($phonggym->MAX); ?>)</label>
                            </td>
                             <?php endif; ?>
                           
                            <?php endfor; ?>
                            
                            
                        </tr>
                        <tr>
                            <td>Ca 3</td>
                             <?php for($i = 2; $i <= 8; $i++): ?>
                             <?php if($i==8): ?>
                            <td>
                                <input type="radio" name="cn" id="ca3_t8" value="ca3">
                                <label for="ca3_t8">Chọn (<?php echo e($val['chunhat']['ca3']); ?>/<?php echo e($phonggym->MAX); ?>)</label>
                            </td>
                             <?php else: ?> 
                             <td>
                                <input type="radio" name="t<?php echo e($i); ?>" id="ca3_t<?php echo e($i); ?>"  value="ca3">
                                <label for="ca3_t<?php echo e($i); ?>">Chọn (<?php echo e($val['thu'."$i"]['ca3']); ?>/<?php echo e($phonggym->MAX); ?>)</label>
                            </td>
                             <?php endif; ?>
                           
                            <?php endfor; ?>
                        </tr>
                        
                            </tbody>
                        </table>
                        <div class="update-box ">
                        <input value="Đặt lịch" type="submit">
                    </div>
                    </div>
                </div>
            </div>

            

           </form>

        
    
 
<div class="row">
       
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right">
                        <h2>CHÚ Ý</h2>
                       
                        <ul class="list-group" style="font-size: 16px;">
                            <li class="list-group-item " style="font-size: 18px;">Bạn nên đặt lịch sớm để có nhiều sự lựa chọn hơn.</li>
                          <li class="list-group-item " style="font-size: 18px;">Những ô không được phép chọn vì đã đủ số lượng người đặt.</li>
                          <li class="list-group-item " style="font-size: 18px;" >Trong 1 ngày chỉ được chọn 1 trong 3 ca.</li>
                          <li class="list-group-item " style="font-size: 18px;">Bạn có thể không chọn nếu không phù hợp. </li>
                          <li class="list-group-item " style="font-size: 18px;">Sau khi bạn chọn lịch hệ thống sẽ tự chọn huấn luận viên cho bạn.</li>
                           
                        </ul>
                    </div>
                </div>
           
    
    </div>
</div>
    <!-- End Cart -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hi\resources\views/index/book.blade.php ENDPATH**/ ?>