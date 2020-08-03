<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class ScheduleController extends Controller
{
    public function homeSchedule(){
    
    	return view('index.book');
    }
    public function bookSchedule(Request $request){
    		$cus = DB::table('users')->first();
    	// echo $cus->id_user; 
    	 $pt = DB::table('tbl_personal_trainer')->first();
    	 //echo $pt->id_pt ; 
    	 
    	 $gym = DB::table('tbl_gym')->first();
    	 //echo $pt->id_gym  ;
    	 $data = array();
    	 $data2 =  array();
        $data['id_users'] = $cus->id_user;
        //lấy ra ds pt có lịch trống
       // $data['id_pt'] = $pt->id_pt;
        $data['id_gym'] = $gym->id_gym;
   
        $data['thu2'] = $request->t2;
        $data['thu3'] = $request->t3;
        $data['thu4'] = $request->t4;
        $data['thu5'] = $request->t5;
        $data['thu6'] = $request->t6;
        $data['thu7'] = $request->t7;
        $data['chunhat'] = $request->cn;

       
        DB::table('tbl_schedule')->insert($data);
        $listpt = DB::table('tbl_personal_trainer')->get();
        $listSche = DB::table('tbl_schedule_pt')->get();
        $listcus = DB::table('tbl_schedule')->where('id_users',$cus->id_user)
        				->orderBy('id_schedule','desc')->first();

        

       
    	$arr = []; 
        $temp = 0;
        
		foreach ($listcus as $key => $value) {
        	if(is_string($value) )
    		{
	        		if($value != 'null'){
	        			if($key == 'thu2'){
	        				$temp = 2;
	        			}else if($key == 'thu3'){
	        				$temp = 3;
	        			}else if($key == 'thu4'){
	        				$temp = 4;
	        			}else if($key == 'thu5'){
	        				$temp = 5;
	        			}else if($key == 'thu6'){
	        				$temp = 6;
	        			}else if($key == 'thu7'){
	        				$temp = 7;
	        			}else if($key == 'chunhat'){
	        				$temp = 8;
	        			}
	        			
	        			$arr[$temp] = $value;
        		}
        	}

        }//gom hết lịch tập của 1 khách hàng vào một mảng key là thứ, value là ca
       
       
        //dd($arr);
      

        	foreach ($listpt as $v) {
        		if($v->status == 0){//kiểm tra xem đủ số ca quy đinh của pt chưa
        			$data_pt['id_pt'] = $v->id_pt;
        			$listptSche = DB::table('tbl_schedule_pt')->where('id_pt',$v->id_pt)->get();
        			/*$s = count($listcus);
        			echo $s;*/
        			//dd($listptSche);
			        $flag = false; 
	        	foreach ($arr as $key => $value) {//duyệt lịch tập của khách hàng.
	        		if(count($listptSche) == 0){//nếu pt chưa có lịch nào thì thêm vào lịch pt ngày mà khách đặt luôn

	        			$data_pt['ca'] = $value;
			  			$data_pt['thu'] = $key;
			  			DB::table('tbl_schedule_pt')->insert($data_pt);

	        			unset($arr[$key]);//đã thêm đc 1 ngày/lịch của pt tương ứng thì xóa mảng tạm đó
	        							
	        		

			        }else if(count($listptSche) <= 14){
	
			        	foreach ($listptSche as $ptSche) {
			        		if($ptSche->thu > $key){
			        			break;

				        		}else if( $ptSche->thu == $key )
				        		{
					        		if( $ptSche->ca != $value)//cùng 1 thứ nhưng khác ca
					        			{ 
					        				$data_pt['ca'] = $value;
							  				$data_pt['thu'] = $key;
							  				DB::table('tbl_schedule_pt')->insert($data_pt);

					        				unset($arr[$key]);
					        			$listptSche = DB::table('tbl_schedule_pt')->where('id_pt',$v->id_pt)->get();	
					        			if(count($listptSche) == 14){
					        				//echo count($listptSche);
			        						DB::table('tbl_personal_trainer')
								            ->where('id_pt', $v->id_pt)
								            ->update(['status' => 1]);
								            		
	        							}
					        		$flag = false;
					        		
					        					break;
					        				
					        				
					        		} else{
					        			$flag = false;
					        					break;
					        		}
				        		}else{
				        			$flag = true;
				        		}

			        			

			        	
			        	}
		       		
			        	if($flag == true){
			        		
			        		$flag = false;

			        		$data_pt['ca'] = $value;
			  				$data_pt['thu'] = $key;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);
			        		unset($arr[$key]);
			        			$listptSche = DB::table('tbl_schedule_pt')->where('id_pt',$v->id_pt)->get();
			        		if(count($listptSche) == 14){
	        						DB::table('tbl_personal_trainer')
						            ->where('id_pt', $v->id_pt)
						            ->update(['status' => 1]);
						            		
	        					}
	        							
			        	}
			        
			       //đặt cờ: kiểm tra pt có ca nào chưa (lịch của pt có trước đó không trùng lịch khách hàng đặt hiện tại) thì flag = false cho đến khi trùng thứ thì kiểm tra có trùng ca ko. 
					        		//+nếu trùng ca thì bỏ qua  flag = false và ko làm j
					        		//+ko trùng ca thì thêm vào lịch, dừng vòng lặp và đặt lại flag = false
					        		//trường hợp duyệt hết lịch của pt mà ko trùng lịch khách hàng đăng kí( 1ca / ngày) thì flag = true. Kiểm tra flag true thì thêm vào.	

        		}
        	}
        		 

				
        	}
        
        }



	        /*}else{
	        	
				foreach ($listpt as $key => $value) {
					if($value->status == 0){
			  			$data_pt['id_pt'] = $value->id_pt;
			  			
			  			$count = 1;
			  		
			  			/*while ($count <= 7) {



			  				echo $count;
			  				$count++;
			  				
			  			}*/
			  			/*foreach ($listcus as $key => $value) {
			  				echo $key;
			  			}*/

			  		/*	if($listcus->thu2){
			  				$data_pt['ca'] = $request->t2;
			  				$data_pt['thu'] = 2;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);

			  				echo "<pre>";
				        print_r($data_pt);
				        echo "</pre>";

			  			}
			  			if($listcus->thu3 != 'null'){
			  				$data_pt['ca'] = $request->t3;
			  				$data_pt['thu'] = 3;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);
			  				echo "<pre>";
				        print_r($data_pt);
				        echo "</pre>";

			  			}
			  			if($listcus->thu4 != 'null'){
			  				$data_pt['ca'] = $request->t4;
			  				$data_pt['thu'] = 4;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);
			  				echo "<pre>";
				        print_r($data_pt);
				        echo "</pre>";

			  			}
			  			if($listcus->thu5 != 'null'){
			  				$data_pt['ca'] = $request->t5;
			  				$data_pt['thu'] = 5;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);
			  				echo "<pre>";
				        print_r($data_pt);
				        echo "</pre>";

			  			}
			  			if($listcus->thu6 != 'null'){
			  				$data_pt['ca'] = $request->t6;
			  				$data_pt['thu'] = 6;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);
			  				echo "<pre>";
				        print_r($data_pt);
				        echo "</pre>";

			  			}
			  			if($listcus->thu7 != 'null'){
			  				$data_pt['ca'] = $request->t7;
			  				$data_pt['thu'] = 7;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);
			  				echo "<pre>";
				        print_r($data_pt);
				        echo "</pre>";

			  			}
			  			if($listcus->chunhat != 'null'){
			  				$data_pt['ca'] = $request->cn;
			  				$data_pt['thu'] = 8;
			  				DB::table('tbl_schedule_pt')->insert($data_pt);
			  				echo "<pre>";
				        print_r($data_pt);
				        echo "</pre>";

			  			}

		    		  	//echo "string";
			  			break;
	        			}
        			}	
        		}*/
        		 // echo "<pre>";
				       //  print_r($data_pt);
				       //  echo "</pre>";
    	
        

        
        
/*
        Session::put('message','<script type="text/javascript">alert("Đặt lịch cho tuần này thành công")   </script>');
		//return view('admin.gym.listGym')->with('listGym',$listGym);
		 return Redirect::to('/BOOK');*/
    }
}

