
<?php $__env->startSection('content'); ?>

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Thêm Phòng tập mới</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm Phòng tập mới</h1>
			</div>
		</div><!--/.row-->
		


		<div class="row">
            <div class="col-md-6"></div><!--/.col-->
            
            <div class="col-md-12">
             
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <?php if(count($errors) > 0): ?>
                           
                          
                           <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> <?php echo e($errors->first()); ?><a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                            
                           
                    
                        <?php endif; ?>
                        <?php 
                            $success = Session::get('success');
                            $err = Session::get('error');

                        ?>
                       <?php if($success): ?> <?php  $str = 'success'; ?>
                       <div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> 
                        <?php echo e($success); ?> <a href="<?php echo e(url('/tat-thong-bao/'.$str)); ?>" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                        <?php Session::put('success',null); ?>
                       <?php endif; ?>

                    <?php if($err): ?> <?php  $str = 'error'; ?>
                     <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> <?php echo e($err); ?><a href="<?php echo e(url('/tat-thong-bao/'.$str)); ?>" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                       <?php Session::put('error',null); ?>     
                    <?php endif; ?>


                        <form class="form-horizontal" id="frmAddUser" action="<?php echo e(url('/them-phong-tap')); ?>" method="post" >
                            <fieldset>
                                <!-- Name input-->
                                
                                <?php echo csrf_field(); ?>
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Tên phòng</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Nhập họ và tên của bạn..." class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="address">Địa chỉ</label>
                                    <div class="col-md-9">
                                        <input id="address" name="address" type="text" placeholder="Nhập địa chỉ của bạn..." class="form-control">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="address">Số lượng người</label>
                                    <div class="col-md-9">
                                        <input id="address" name="MAX" type="text" placeholder="200" class="form-control">
                                    </div>
                                </div>
                               
                                
                            
                                
                           
                                
                              
                                
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-4 widget-right">
                                        <input type="submit" id="btnAddUser"class="btn btn-default btn-md pull-right" name="" value="Thêm">
                                        
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

               

            </div><!--/.col-->
            <div class="row"></div><!--/.col-->
            
           
        
           
        </div>
		
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script type="text/javascript">
	/*$(document).ready(function(){
        $('#btnAddUser').on('click', function(event){
            //alert("hi");
            $.ajax({
                                 url:'',

                                 type:'GET',
                                 data: $('form#frmAddUser').serializeArray(),
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
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/admin/gym/addGym.blade.php ENDPATH**/ ?>