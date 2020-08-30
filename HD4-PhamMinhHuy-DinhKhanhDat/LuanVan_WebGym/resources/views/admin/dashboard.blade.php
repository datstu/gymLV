@extends('admin.index')
@section('content')

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><i style="font-size: 26px;color: #3c763d;" class="fa fa-money" aria-hidden="true"></i>

							<div class="large">{{number_format($totalPrice)}} đ</div>
							<div class="text-muted">Tổng doanh thu</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">{{$countOrder}}</div>
							<div class="text-muted">Đơn mới trong tuần</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">{{$countMember}}</div>
							<div class="text-muted">Tổng hội viên</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">
								@if($countVisitor > 1000){{($countVisitor/1000).'k'}}
								@elseif($countVisitor > 1000000){{($countVisitor/1000000).'m'}}
								@endif
							</div>
							<div class="text-muted">tổng truy cập</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Biểu đồ Phần trăm doanh thu trong 6 tháng: Từ tháng {{$month_1}} đến {{$month_6}} năm 2020
						
						</div>
					<div class="panel-body">
						<input type="hidden" id="valJSON" name="" value="{{$valJSON}}">
		<input type="hidden" id="keyJSON" name="" value="{{$keyJSON}}">
	<link href="{{asset('public/lumino/css/Chart.css')}}" rel="stylesheet">
			<script src="{{asset('public/lumino/js/Chart.js')}}"></script>
		<div class="panel panel-container">
			<div class="row">

				<canvas id="myChart" ></canvas>
			
<script>
	var valJSON = document.getElementById("valJSON").value;
	var keyJSON = document.getElementById("keyJSON").value;

	var valTotal =  JSON.parse(valJSON);
	var keyMonth =  JSON.parse(keyJSON);

	map1 = keyMonth.map(x => 'Tháng '+ x);
	//console.log(keyMonth);
	//alert(map1);

var ctx = document.getElementById('myChart').getContext('2d');
var x=15;
var red = 'pink';
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        //labels: [red, 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        labels: map1,
        datasets: [{
            label: '% doanh số trong 6 tháng',
           // data: [x, 19, 3, 5, 2, 3],
            data: valTotal,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        ayout: {
            padding: {
                left: 50,
                right: 0,
                top: 0,
                bottom: 0
            }
        }
    }
});
</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row"></div><!--/.row-->
		
		<div class="row"></div><!--/.row-->
@endsection