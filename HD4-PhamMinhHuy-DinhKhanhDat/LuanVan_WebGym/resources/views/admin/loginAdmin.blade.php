<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="{{asset('public/lumino/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/lumino/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('public/lumino/css/styles.css')}}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					
					
					@if(isset($message))
					<div class="alert alert-danger">
						
						{{$message}} 
					</div> @endif
					<form action="{{route('loginAdmin')}}" method="post">
						@csrf
						<fieldset>
							<div class="form-group">
								<input class="form-control"  name="name" type="name" autofocus="">
							</div>
							@if($errors->has('name') )
								<div class="alert alert-danger">
									
									{{$errors->first('name')}}
								</div>
								@endif
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							@if($errors->has('password') )
					<div class="alert alert-danger">
						
						{{$errors->first('password')}}
					</div>
					@endif
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							 <input type="submit" id="btnAddUser"class="btn btn-default btn-md pull-right" name="" value="Thêm">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
