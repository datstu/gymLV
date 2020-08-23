@extends('admin.index')
@section('content')

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Thêm sản phẩm mới</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm sản phẩm mới</h1>
			</div>
		</div><!--/.row-->
		


		<div class="row">
            <div class="col-md-6"></div><!--/.col-->
            
            <div class="col-md-12">
             
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        @if(count($errors) > 0)
                           
                          
                           <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{$errors->first()}}<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                            
                           
                    
                        @endif
                        <?php 
                            $success = Session::get('success');
                            $err = Session::get('error');

                        ?>
                       @if($success) <?php  $str = 'success'; ?>
                       <div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> 
                        {{$success}} <a href="{{url('/tat-thong-bao/'.$str)}}" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                        <?php Session::put('success',null); ?>
                       @endif

                    @if($err) <?php  $str = 'error'; ?>
                     <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{$err}}<a href="{{url('/tat-thong-bao/'.$str)}}" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                       <?php Session::put('error',null); ?>     
                    @endif


<<<<<<< HEAD
=======
 

>>>>>>> dat
                        <form class="form-horizontal" id="frmAddUser" action="{{url('/them-san-pham')}}" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <!-- Name input-->
                                {{-- <div class="form-group">
                                    <label class="col-md-2 control-label" for="iduser">ID user</label>
                                    <div class="col-md-9">
                                        <input id="iduser" name="iduser" type="text" placeholder="Nhập họ và tên của bạn..." class="form-control">
                                    </div>
                                </div> --}}
                                @csrf
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Tên sản phẩm</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Nhập tên gói..." class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Mô tả</label>
                                    <div class="col-md-9">
                                        <textarea rows="4"  id="name" name="descript" type="text"  class="form-control"></textarea>

                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Giá</label>
                                    <div class="col-md-9">
                                        <input id="name" name="price" type="text" placeholder="100,000" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="exampleInputEmail1">Hình ảnh </label>
                                    <div class="col-md-9">
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                    <div class="col-md-9">
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
@endsection