
<?php $__env->startSection('content'); ?>

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Quản lý hóa đơn</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý hóa đơn</h1>
			</div>
		</div><!--/.row-->
		


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
						

				
						<div class="col-md-3">	
									
									<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
						</div>		
				
					</div>
				
				</div>
			</div>
		</div>
		
		<div class="col-md-12">
    <!-- DATA TABLE -->
   
   
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    
                    <th width="10%">ID</th>
                    <th width="10%">Ngày đặt</th>
                    <th width="40%">Người nhận</th>
                    <th width="10%">Địa chỉ</th>
                    
                    <th width="5%">Tổng</th>
                    <th width="15%">Trạng thái</th>
                    <th width="5%"></th>
                    <th width="5%"></th>
                </tr>
            </thead>
              <?php $__currentLoopData = $listPD; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tbody>
                <tr class="tr-shadow">
                  
                    <td><?php echo e($user->id_order); ?></td>
                    <td><?php echo e($user->order_date); ?></td>
                    <td><?php echo e($user->consignee_name); ?></td>
                    <td><?php echo e($user->address); ?></td>
                    <td><?php echo e($user->totalPrice); ?></td>
                    <td>
                        <?php
                        foreach ($stt as $key => $value) {
                            if($user->id_status  == $value->id_status ){
                                echo $value->name;
                            }
                        }
                         ?>
                    </td>

                    <!-- <td class="desc">Samsung S8 Black</td> -->
                    
                   
                    
              
                   
                    <td>
                        
                            <a href="<?php echo e(url('/cap-nhat-goi-tap/'.$user->id_order)); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>            
                          
                            
                            
                            <td>
                            
                          
                    <div class ="delUser"> 
                            <a href="<?php echo e(url('/delCB/'.$user->id_order )); ?>" onclick="return confirm('Bạn có chắc muốn XOÁ gói này?')">
                                <i class="fa fa-trash" aria-hidden="true" style="border: none;"></i>
                                </a>
                    </div>
                             
                       
                    </td>
                </tr>
                <tr class="spacer"></tr>
            </tbody>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </table>
    </div>
    <!-- END DATA TABLE -->
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript">
	/*$(document).ready(function(){
        $('.delUser').on('click', function(event){
            // alert("hi");
            $.ajax({
                                 url:'<?php echo e(url('/delUser')); ?>',

                                 type:'GET',
                                 data: $('#delUserValue').serializeArray(),
                                 success:function(s)
                                 {

                                     alert(s);
                                    
                                    //console.log("sads");
                                
                                 }
                        
                });
            $("form#frmAddUser").trigger("reset");

        });
    });*/

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/admin/order/listOrder.blade.php ENDPATH**/ ?>