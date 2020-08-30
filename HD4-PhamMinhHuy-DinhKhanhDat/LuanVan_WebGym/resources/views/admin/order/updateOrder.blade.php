@extends('admin.index')
@section('content')

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Xem chi tiết và xử lý đơn hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Xem chi tiết và xử lý đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
<div class="col-md-12">
    <!-- DATA TABLE -->
   
   
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    {{-- <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th> --}}
                    <th width="10%">Mã sản phẩm</th>
                    <th width="15%">Hình ảnh</th>
                    <th width="25%">Tên sản phẩm</th>
                    <th width="15%">Số Lượng</th>
                     <th width="5%">Giá</th>
                    <th width="10%">Thành tiền</th>
                    
                    
                   
                </tr>
            </thead>
             
            <tbody>
                 @foreach($showOrd_PK as $sh) 
                <tr class="tr-shadow">
                  
                    <td>{{$sh->id_product}}</td>
                    <td><img src="{{asset('public/uploads/product/'.$sh->img)}}" width="100px"></td>
                     <td>{{$sh->ten}}</td>
                    <td>{{$sh->quantity    }}</td>
                    <td>{{number_format($sh->price)    }}</td>
                    
                   
                    
                    <td>{{number_format($sh->quantity *  $sh->price) }}
                        
                    </td>
                   
                </tr>
                @endforeach
                <tr class="spacer"></tr>
            </tbody>
         
        </table>
    </div>
    
    <!-- END DATA TABLE -->
</div>

<div class="col-md-12">
    <!-- DATA TABLE -->
   
   
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    {{-- <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th> --}}
                    <th width="10%">Mã đơn hàng</th>
                    <th width="15%">Tên người nhận</th>
                    <th width="10%">Số điện thoại</th>

                    <th width="25%">Địa chỉ</th>
                    
                     <th width="10%">Tổng tiền</th>
                    <th width="10%">Trạng thái</th>
                   
                    <th></th>
                    
                   
                </tr>
            </thead>
             
            <tbody>
                 
                <tr class="tr-shadow">
                  
                    <td>{{$showOrd_KH->id_order}}</td>
                    <td>{{$showOrd_KH->consignee_name}}</td>
                     <td>{{$showOrd_KH->consignee_phone}}</td>
                    <td>{{$showOrd_KH->address    }}</td>
                     <td>{{number_format($showOrd_KH->totalPrice)    }}</td>
                     <form action="{{route('xu-ly-don-hang')}}" method="post">
                        <input type="hidden" name="id_order" value="{{$showOrd_KH->id_order}}">
                        @csrf
                     <td>
                        <select name="stt" id="cars">
                            @foreach($listStatus as $stt)
                              <option 
                              @if($showOrd_KH->id_status ==$stt->id_status ){{'selected'}} @endif  value="{{$stt->id_status}}">{{$stt->name}}</option>
                              @endforeach
                                         
                                        
                                         
                                        </select>
                        
                    </td>
                   
                    
                   
                    
                   
                
                   <td><input type="submit" value="Cập nhật"></td>
                   </form>
                </tr>
                
                <tr class="spacer"></tr>
            </tbody>
         
        </table>
    </div>
    
    <!-- END DATA TABLE -->
</div>

		<div class="row">
           <!--/.col-->
            
            <div class="col-md-12">
             
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        @if(count($errors) > 0)
                           
                          
                           <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{$errors->first()}}<a href="" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                            
                           
                    
                        @endif
                        <?php 

                            $success = Session::get('success');
                            $err = Session::get('error');
                            Session::put('id',null);


                        ?>
                       @if($success)
                       <?php  $str = 'success'; ?>
                       <div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> 
                        {{$success}} <a href="" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                        <?php Session::put('success',null); ?>
                       @endif

                    @if($err)
                       <?php  $str = 'error'; ?>
                     <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{$err}}<a href="" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                       <?php Session::put('error',null); ?>     
                    @endif

                        {{-- <form class="form-horizontal" action="{{url('/xu-ly-don-hang')}}" id="frmAddUser"  method="post" >
                            <fieldset>
                                
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="iduser">ID user</label>
                                    <div class="col-md-9">
                                        <input id="iduser" name="iduser" type="text" placeholder="Nhập họ và tên của bạn..." class="form-control">
                                    </div>
                                </div> 
                                @csrf
                                 <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Họ và tên</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" value="{{$users->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="address">Địa chỉ</label>
                                    <div class="col-md-9">
                                        <input id="address" name="address" type="text" value="{{$users->address}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="phone">Số điện thoại</label>
                                    <div class="col-md-9">
                                        <input id="phone" name="phone" type="number" value="{{$users->phone}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email" >Email</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text"  value="{{$users->email}}" class="form-control" >
                                    </div>
                                </div>
                            
                                
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="pass">Mật khẩu</label>
                                    <div class="col-md-9">
                                        <input id="pass" name="pass" value="{{$users->pass}}" type="password"  class="form-control" autocomplete="new-password">
                                        <input type="hidden" name="id_user" value="{{$users->id_user}}">
                                    </div>
                                </div>
                               
                                
                              
                                
                                
                                <div class="form-group">
                                    <div class="col-md-4 widget-right">
                                        <input type="submit" id="btnEditUser"class="btn btn-default btn-md pull-right" name="" value="Cập nhật">
                                        
                                    </div>
                                </div>
                            </fieldset>
                        </form> --}}
                    </div>

               

            </div><!--/.col-->
            <!--/.col-->
            
           
        
           
        </div>
		
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script type="text/javascript">
	// $(document).ready(function(){
 //        $('#btnEditUser').on('click', function(event){
 //            //alert("hi");
 //            $.ajax({
 //                                 url:'{{url('/saveEditUser')}}',

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
@endsection