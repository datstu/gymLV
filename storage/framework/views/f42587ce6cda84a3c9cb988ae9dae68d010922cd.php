
<?php $__env->startSection('content'); ?>

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Cập nhật thông tin Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cập nhật thông tin Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		


		<div class="row">
            <div class="col-md-6"></div><!--/.col-->
            
            <div class="col-md-12">
             
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <?php if(count($errors) > 0): ?>
                           
                          
                           <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> <?php echo e($errors->first()); ?><a href="" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                            
                           
                    
                        <?php endif; ?>
                        <?php 

                            $success = Session::get('success');
                            $err = Session::get('error');
                            Session::put('id',null);


                        ?>
                       <?php if($success): ?>
                       <?php  $str = 'success'; ?>
                       <div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> 
                        <?php echo e($success); ?> <a href="<?php echo e(url('/tat-thong-bao/'.$str)); ?>" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                        <?php Session::put('success',null); ?>
                       <?php endif; ?>

                    <?php if($err): ?>
                       <?php  $str = 'error'; ?>
                     <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> <?php echo e($err); ?><a href="<?php echo e(url('/tat-thong-bao/'.$str)); ?>" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                       <?php Session::put('error',null); ?>     
                    <?php endif; ?>

                        <form class="form-horizontal" action="<?php echo e(url('/cap-nhat-san-pham')); ?>" id="frmAddUser"  method="post" enctype="multipart/form-data" >
                            <fieldset>
                                <!-- Name input-->
                                
                                <?php echo csrf_field(); ?>
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Tên sản phẩm</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" value="<?php echo e($PD->ten); ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Mô tả</label>
                                    <div class="col-md-9">
                                        <textarea rows="4"  id="name" name="descript" type="text"  class="form-control"><?php echo e($PD->description); ?></textarea>

                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Giá</label>
                                    <div class="col-md-9">
                                        <input id="name" name="price" type="text" value="<?php echo e($PD->price); ?>" class="form-control">
                                    </div>
                                </div>
         
                                <div class="form-group">

                                    <label class="col-md-2 control-label" for="exampleInputEmail1">Hình ảnh </label>
                                    <div class="col-md-9">
                                        <img  src="<?php echo e(asset('public/uploads/product/'.$PD->img )); ?>" width="200px">
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Hot</label>
                                    <div class="col-md-9">
                                       <select name="Hot" id="name">
                                        <?php if($PD->hot == 0){?>
                                          <option selected="selected" value="0">Không có</option>
                                          <option value="1">Có</option>
                                          <?php }else {
                                            ?>
                                            <option value="0">Không có</option>
                                          <option selected="selected" value="1">Có</option>
                                          <?php } ?>
                                         
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="loai">Loại sản phẩm</label>
                                    <div class="col-md-9">
                                       <select name="loaisp" id="loai">
                                         <?php if($PD->loaiSP == 'tpbs'){?>
                                            <option selected="selected" value="tpbs">Thực phẩm bổ sung</option>
                                            <option value="phukien">Phụ kiện thiết bị</option>
                                         <?php }else {
                                        ?>
                                            <option value="tpbs">Thực phẩm bổ sung</option>
                                            <option selected="selected" value="phukien">Phụ kiện thiết bị</option>
                                        <?php } ?>                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <input id="name" name="id_pt" type="hidden" value="<?php echo e($PD->id_product); ?>" class="form-control">
                                  
                                </div>

                                <!-- Form actions -->
                               
                                <div class="form-group">
                                    <div class="col-md-4 widget-right">
                                        <input type="submit" id="btnAddUser"class="btn btn-default btn-md pull-right" name="" value="Cập nhật">
                                        
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
	// $(document).ready(function(){
 //        $('#btnEditUser').on('click', function(event){
 //            //alert("hi");
 //            $.ajax({
 //                                 url:'<?php echo e(url('/saveEditUser')); ?>',

 //                                 type:'GET',
 //                                 data: $('form#frmAddUser').serializeArray(),
 //                                 success:function(s)
 //                                 {

 //                                     alert(s);
                                    
 //                                    //console.log("sads");
                               
 //                                 }
                        
 //                });
 //            $("form#frmAddUser").trigger("reset");

 //        });
 //    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luanvanchinh\gymLV\resources\views/admin/product/updatePD.blade.php ENDPATH**/ ?>