
<?php $__env->startSection('content'); ?>

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Quản lý phòng tập</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý Phòng tập</h1>
			</div>
		</div><!--/.row-->
		


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
						<div class="col-md-9">
							
							
							<a href="<?php echo e(url('/them-phong-tap')); ?>"><button type="button" id="btn-add-customer" class="btn btn-md btn-primary">
							
              				 <i class="zmdi zmdi-plus"></i>+ Thêm Phòng</button></a>
							
							<br />
							
						</div>

				
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
                    
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Địa Chỉ</th>
                    
                    
                                      <th></th>
                    <th></th>
                </tr>
            </thead>
              <?php $__currentLoopData = $listGym; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tbody>
                <tr class="tr-shadow">
                    
                    <td><?php echo e($user->id_gym); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->address_gym); ?></td>
                    <!-- <td class="desc">Samsung S8 Black</td> -->
                    
                   
                    
              
                   
                    <td>
                        
                            <a href="<?php echo e(url('/cap-nhat-phong-tap/'.$user->id_gym)); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>            
                          
                            
                            
                            <td>
                            
                          
                    <div class ="delUser"> 
                            <a href="<?php echo e(url('/delGym/'.$user->id_gym )); ?>" onclick="return confirm('Bạn có chắc muốn XOÁ phòng này?')">
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
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/admin/gym/listGym.blade.php ENDPATH**/ ?>