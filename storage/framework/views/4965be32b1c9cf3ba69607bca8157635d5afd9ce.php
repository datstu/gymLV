
<?php $__env->startSection('content'); ?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh');
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
       
                <div class="col-lg-5 col-sm-12">
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
                 <div class="col-lg-7 col-sm-12">
                    
                     <div class="table-responsive table-responsive-data2">
                         
        <table class="table table-data2">
            <thead>
                <tr>
                    
                    <th>Ngày đặt</th>
                    <th>Thứ 2</th>
                    <th>Thứ 3</th>
                    <th>Thứ 4</th>
                    <th>Thứ 5</th>
                    
                    <th>Thứ 6</th>
                 
                    <th>Thứ 7</th>
                    <th>Chủ nhất</th>
                    <th></th>
                  
                </tr>
            </thead>
            
            <tbody>
                 <?php
                    $nowDate = strtotime(date('d-m-Y'));
                    $showdate = date('N',$nowDate);
                   

                    //output 2014-11-08 14:10
                   // echo $nowDate;
                   
                     $dayOfPre =  '';
                    if(isset($listScheofOneCus)){
                        foreach ($listScheofOneCus as $keySch => $valueSch) {

                           
                           if(($nowDate -  strtotime($valueSch->DateBook) +1)/ (60 * 60 * 24) <=14  &&
                           ($nowDate -  strtotime($valueSch->DateBook))/ (60 * 60 * 24) >7 )
                               {
                                 $flag = true;
                                 $dayOfPre = strtotime($valueSch->DateBook);
                                $strCss = 'style="background: antiquewhite;color: brown;"';

                            }
                            ?>
                <style type="text/css">
                    #tblSche:hover {
                        background-color: #deb37a;
                        color: #730606;
                    }
                </style>
                <tr class="tr-shadow" id="tblSche" <?php if(isset($strCss)) 
                {echo $strCss; } ?>>
                    
                    
                   
                            
                    
                    <td>
                        <?php $time = strtotime($valueSch->DateBook);
                    echo  date('d-m-Y',$time);
                  
                     
                     ?></td>
                    <td>
                         <?php

                         if($showdate == 1 && isset($strCss)){?>
                         <u style="display: block;">
                         <?php if($valueSch->thu2 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu2); ?> <?php endif; ?>
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                        } else {
                        ?>
                        <?php if($valueSch->thu2 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu2); ?> <?php endif; ?>

                        <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 2 && isset($strCss)){?>
                         <u style="display: block;">
                         <?php if($valueSch->thu3 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu3); ?> <?php endif; ?>
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                             } else {
                        ?>
                        <?php if($valueSch->thu3 == 'null'): ?><?php echo e('Trống'); ?>

                                    <?php else: ?> <?php echo e($valueSch->thu3); ?> <?php endif; ?>

                                    <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 3 && isset($strCss)){?>
                         <u style="display: block;">
                         <?php if($valueSch->thu4 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu4); ?> <?php endif; ?>
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
            <?php if($valueSch->thu4 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu4); ?> <?php endif; ?>

                        <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 4 && isset($strCss)){?>
                         <u style="display: block;">
                         <?php if($valueSch->thu5 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu5); ?> <?php endif; ?>
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
                         <?php if($valueSch->thu5 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu5); ?> <?php endif; ?>

                        <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 5 && isset($strCss)){?>
                         <u style="display: block;">
                         <?php if($valueSch->thu6 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu6); ?> <?php endif; ?>
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
                        <?php if($valueSch->thu6 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu6); ?> <?php endif; ?>

                        <?php

                     }?>
                 </td>  
                     
                    <td>
                      
                    <?php
                         if($showdate == 6 && isset($strCss)){?>
                         <u style="display: block;">
                         <?php if($valueSch->thu7 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu7); ?> <?php endif; ?>
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
            <?php if($valueSch->thu7 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu7); ?> <?php endif; ?>

                        <?php

                     }?>
                   
                         </td>            
                    <td>
                         <?php
                         if($showdate == 7 && isset($strCss)){?>
                         <u style="display: block;">
                         <?php if($valueSch->chunhat == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->chunhat); ?> <?php endif; ?>
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
            <?php if($valueSch->thu7 == 'null'): ?><?php echo e('Trống'); ?>

                        <?php else: ?> <?php echo e($valueSch->thu7); ?> <?php endif; ?>

                        <?php

                     }?>
                    </td>
                 <td><?php
                if(($nowDate -  strtotime($valueSch->DateBook))/ (60 * 60 * 24) >=0
                    && ($nowDate -  strtotime($valueSch->DateBook))/ (60 * 60 * 24) < 6 ){
                  ?>
                    <a href="<?php echo e(url('/doi-lich/'.$valueSch->id_schedule.'/'.$valueSch->id_gym.'/'.$goitap)); ?>"><i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <?php } ?>
                    </td> 
                </tr>
                <?php
                        }
                    }
                     ?>
                   
                <tr class="spacer"></tr>

            </tbody>
           
        </table>
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
                    <?php 
                    if(!$flagSche){
                        ?>
                    <div class="table-main table-responsive collapse <?php echo e($ac); ?><?php echo e($ac2); ?>">
                        <table class="table">
                            <thead>
                                <form action=" <?php echo e(route('datlich')); ?>

                                " method="get">
                                    <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="id_gym" value="<?php echo e($phonggym->id_gym); ?>">
                                
                                <input type="text" name="id_gt" value="<?php echo e($goitap); ?>">
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
                    <?php
                            }
                         ?>
                </div>
            </div>

            

           </form>

        
    
 
<div class="row">
        <?php 
        //kiem tra
           
        if(!$flagSche){

            
                        ?>
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
           
        <?php } ?>
    </div>
</div>
                <?php
                $messSche = Session::get('msSche');
                if($messSche){
                    echo $messSche;
                    Session::put('msSche',null);
                }  ?>
    <!-- End Cart -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/index/book.blade.php ENDPATH**/ ?>