@extends('admin.index')
@section('content')

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Quản lý khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý khách hàng</h1>
			</div>
		</div><!--/.row-->
		


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
						<div class="col-md-9">
							
							
							<a href="{{url('/them-huan-luan-vien')}}"><button type="button" id="btn-add-customer" class="btn btn-md btn-primary">
							
              				 <i class="zmdi zmdi-plus"></i>+ Thêm huấn luận viên</button></a>
							
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
                    {{-- <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th> --}}
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Số điện thoại</th>
                    
                                      <th></th>
                    <th></th>
                </tr>
            </thead>
              @foreach($listPT as $user) 
            <tbody>
                <tr class="tr-shadow">
                    {{-- <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td> --}}
                    <td>{{$user->id_pt  }}</td>
                    <td>{{$user->name }}</td>
                    <td>{{$user->address }}</td>
                    <!-- <td class="desc">Samsung S8 Black</td> -->
                    <td>{{$user->phone }}</td>
                   
                    
              
                   
                    <td>
                        
                            <a href="{{url('/cap-nhat-huan-luan-vien/'.$user->id_pt)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>            
                          
                            {{-- <button class="item " data-toggle="tooltip" data-placement="top"  title="Delete" onclick="return confirm('Bạn có chắc muốn XOÁ sản phẩm này?')" >
                                <i class="fa fa-trash" aria-hidden="true" style="border: none;"></i>
                            </button> --}}
                            
                            <td>
                            
                          
                    <div class ="delUser"> 
                            <a href="{{url('/delPT/'.$user->id_pt)}}" onclick="return confirm('Bạn có chắc muốn XOÁ huấn luận viên này?')">
                                <i class="fa fa-trash" aria-hidden="true" style="border: none;"></i>
                                </a>
                    </div>
                             
                       
                    </td>
                </tr>
                <tr class="spacer"></tr>
            </tbody>
           @endforeach 
        </table>
    </div>
     {!! $listPT->links() !!}
    <!-- END DATA TABLE -->
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript">
	/*$(document).ready(function(){
        $('.delUser').on('click', function(event){
            // alert("hi");
            $.ajax({
                                 url:'{{url('/delUser')}}',

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
@endsection