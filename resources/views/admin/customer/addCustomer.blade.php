@extends('admin.index')
@section('content')

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Thêm Hội Viên</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm Hội Viên</h1>
			</div>
		</div><!--/.row-->
		


		<div class="row">
            <div class="col-md-6"></div><!--/.col-->
            
            <div class="col-md-12">
             
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <form class="form-horizontal" id="frmAddUser"  method="get" >
                            <fieldset>
                                <!-- Name input-->
                                {{-- <div class="form-group">
                                    <label class="col-md-2 control-label" for="iduser">ID user</label>
                                    <div class="col-md-9">
                                        <input id="iduser" name="iduser" type="text" placeholder="Nhập họ và tên của bạn..." class="form-control">
                                    </div>
                                </div> --}}
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Họ và tên</label>
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
                                    <label class="col-md-2 control-label" for="phone">Số điện thoại</label>
                                    <div class="col-md-9">
                                        <input id="phone" name="phone" type="number" placeholder="Nhập số điện thoại của bạn..." class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email" >Email</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text"  placeholder="Nhập email của bạn..." class="form-control" >
                                    </div>
                                </div>
                            
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="pass">Mật khẩu</label>
                                    <div class="col-md-9">
                                        <input id="pass" name="pass" placeholder="*******" type="password"  class="form-control" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-2 control-label">Kinh Nghiệm</label>
                                        <div class="col-md-3">
                                        <select class="form-control" name="id_level">
                                            @foreach($level as $val)
                                            <option value="{{$val->id_level}}">{{$val->name_level}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                
                              
                                
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-4 widget-right">
                                        <input type="button" id="btnAddUser"class="btn btn-default btn-md pull-right" name="" value="Thêm">
                                        
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

               

            </div><!--/.col-->
            <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default articles">
                    <div class="panel-heading">
                        Ghi chú
                        
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body articles-container">
                        @foreach($level as $val)
                        <div class="article border-bottom">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-2 col-md-2 date">
                                        <div class="large">{{$val->id_level}}</div>
                                        
                                    </div>
                                    <div class="col-xs-10 col-md-10">
                                        <h4><a href="#">{{$val->name_level}}</a></h4>
                                        <p>{{$val->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div><!--End .article-->
                        @endforeach
                        
                        
                        
                    </div>
                </div><!--End .articles-->
                </div>
              
            </div><!--/.col-->
            
           
        
           
        </div>
		
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
        $('#btnAddUser').on('click', function(event){
            //alert("hi");
            $.ajax({
                                 url:'{{url('/addUser')}}',

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
    });
</script>
@endsection