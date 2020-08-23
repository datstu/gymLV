<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Schedule;
use App\PhongGym;
use App\Status;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;


class ScheduleController extends Controller
{

    public function homeSchedule($gt,$gym){
    	$goitap=$gt;
    	$phonggym=PhongGym::where('id_gym',$gym)->first();
    	 $combo= DB::table('tbl_order_detail_combo')
            ->join('tbl_combo_package', 'tbl_order_detail_combo.id_combo', '=', 'tbl_combo_package.id_combo')->where('id_order',$goitap)->first();
    	$listcus = DB::table('tbl_schedule')->where('id_order',$goitap)->first();
    	$order=  Status::join('tbl_order','tbl_order.id_status','=','tbl_status.id_status')->where('id_order','=',$goitap)->first();
    	$Schedule= new Schedule();
    	$val= $Schedule->checkSlot($gym);

    	$cus  =  Session::has('User')?Session::get('User'):null;
    	$listScheofOneCus = $Schedule->showSchedule($cus->id_user);

    
    /*
		 nếu ngày hiện tại trừ 1 ngày nào đó trong lịch của hội viên(ngày từ DB)
		 mà = 7 thì bật cờ lên ngược lại cờ = false;
		 nếu chưa có bản ghi nào từ lịch của hội viên thì mặc nhiên cờ được bật
		 cờ được bật sẽ cho phép hội viên đặt lịch và lưu ngày đặt vào db
		 */

		/*$day_1 = date("2020-08-08") ;
		$day_2 = date("2020-08-11") ;
		$days = (strtotime($day_2) - strtotime($day_1)) / (60 * 60 * 24);
		*/
		$flagSche = false;

		/*echo $days."<br>" ;
		echo date('N', strtotime($day_2)).",".  date('N', strtotime($day_1))."<br>";*/

		/*if($days < 7 && date('N', strtotime($day_2)) >= date('N', strtotime($day_1)))
			echo "2 thằng này chung 1 tuần cmnr.";
		else echo "chúc bạn may mắn.";
*/

		 
		$nowDate = date('Y-m-d');
		///kiem tra 2 ngay co chung 1 tuan hay ko nếu có flag = true
		if( count($listScheofOneCus)>0){
    		foreach ($listScheofOneCus as $key => $value) {
    			$day2 = strtotime($nowDate);
    			$day1 = strtotime($value->DateBook);
    			$days = ($day2 - $day1) / (60 * 60 * 24);

	    		/*if( $days >= 7){
			 		$flagSche = true;
				}else
					if($days == 0){
						$flagSche = false;
					}
    	 	}*/
    	 	if($days < 7 && date('N', $day2) >= date('N', $day1)){
    	 		$flagSche = true; 
    	 	}

    	}
    }
    	///////
    	 

    	/* if($flagSche) echo "Không cho đặt lịch";
    	 else echo "Hiển thị form đặt lịch ngay và luôn";*/


    	if($order->id_status==6)
    	{
    		if($listcus){// đã đặt lịch rồi
	    		if($combo->HLV==1){//không được đặt lịch có hlv
	    			$ac='';
	    			$ac1='show';
	    			$ac2='';
	    			return view('index.book',compact('goitap','phonggym','listcus','ac1','ac','ac2','val','listScheofOneCus','flagSche'));
	    		}else{
	    			$ac='show';
	    			$ac1='';
	    			$ac2='';
	    			return view('index.book',compact('goitap','phonggym','listcus','ac1','ac','ac2','val','listScheofOneCus','flagSche'));}
    		}else{
    			$listcus  = array('thu2' => 'null' ,'thu3' => 'null' ,'thu4' => 'null' ,'thu5' => 'null' ,'thu6' => 'null' ,'thu7' => 'null' ,'chunhat' => 'null' , );
    			$listcus=(object)$listcus ;
	    			$ac='';
	    			$ac1='';
	    			$ac2='show';
	    			return view('index.book',compact('goitap','phonggym','listcus','ac1','ac','ac2','val','listScheofOneCus','flagSche'));
    		}
    	}else{
    		 $mess = "Gói tập đã quá hạn sử dụng.";
            Session::put('mess',$mess);
            return redirect()->back();
    	}
  

    	
    }
    public function updateSchedule($id,$gym,$gt){
    	//$scheById = DB::table('tbl_schedule')->where('id_schedule',$id)->first();
    	$phonggym = DB::table('tbl_schedule') ->join('tbl_gym', 'tbl_schedule.id_gym', '=', 'tbl_schedule.id_gym')
    	->where('tbl_schedule.id_schedule',$id)
    	->where('tbl_gym.id_gym',$gym)->first();

    	/*$combo= DB::table('tbl_order_detail_combo')
            ->join('tbl_combo_package', 'tbl_order_detail_combo.id_combo', '=', 'tbl_combo_package.id_combo')->where('id_order',$gt)->first();
    */
    	$Schedule= new Schedule();
    	$val= $Schedule->checkSlot($gym);
    	
    	
    	return view('index.update_book')->with('val',$val)->with('phonggym',$phonggym)->with('gt',$gt);
    }
    public function saveup_bookSchedule(Request $request){
    	
		//$cus  =  Session::has('User')?Session::get('User'):null;
    	$data = array();
    	$data['id_schedule'] = $request->id_schedule;
      //  $data['id_users'] = $cus->id_user;
        //$data['id_gym'] = isset($request->id_gym) ? $request->id_gym : '';
       // $data['id_order'] = isset($request->id_gt) ? $request->id_gt : '';
        $data['thu2'] = isset($request->t2) ? $request->t2 : '';
        $data['thu3'] = isset($request->t3) ? $request->t3 : '';
        $data['thu4'] = isset($request->t4) ? $request->t4 : '';
        $data['thu5'] = isset($request->t5) ? $request->t5 : '';
        $data['thu6'] = isset($request->t6) ? $request->t6 : '';
        $data['thu7'] = isset($request->t7) ? $request->t7 : '';
        $data['chunhat'] = isset($request->cn) ? $request->cn : '';

        
         DB::table('tbl_schedule')->where('id_schedule',$data['id_schedule'])->update($data);
        // return redirect()->route('my-account');
       //echo $data['id_schedule'];
        return redirect()->route('booklich',[$request->id_gt,$request->id_gym]);
    
    	
    }
    public function bookSchedule(Request $request){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
    	$cus  =  Session::has('User')?Session::get('User'):null;
    	// echo $cus->id_user; 
    	$pt = DB::table('tbl_personal_trainer')->first();
    	 //echo $pt->id_pt ; 
    	 //$gym = DB::table('tbl_gym')->first();
    	 //echo $pt->id_gym  ;
    	 $data = array();
    	 //$data2 =  array();
        $data['id_users'] = $cus->id_user;
        //lấy ra ds pt có lịch trống
       // $data['id_pt'] = $pt->id_pt;

       $dateSche =  date('Y/m/d');
       if(is_string($dateSche)) echo "string";
        $data['DateBook'] = $dateSche;
        $data['id_gym'] = isset($request->id_gym) ? $request->id_gym : '';
        $data['id_order'] = isset($request->id_gt) ? $request->id_gt : '';
        $data['thu2'] = isset($request->t2) ? $request->t2 : '';
        $data['thu3'] = isset($request->t3) ? $request->t3 : '';
        $data['thu4'] = isset($request->t4) ? $request->t4 : '';
        $data['thu5'] = isset($request->t5) ? $request->t5 : '';
        $data['thu6'] = isset($request->t6) ? $request->t6 : '';
        $data['thu7'] = isset($request->t7) ? $request->t7 : '';
        $data['chunhat'] = isset($request->cn) ? $request->cn : '';
        $combo= DB::table('tbl_order_detail_combo')
            ->join('tbl_combo_package', 'tbl_order_detail_combo.id_combo', '=', 'tbl_combo_package.id_combo')->where('id_order',$data['id_order'])->first();
       
        $rsSch = DB::table('tbl_schedule')->insert($data);
        if($rsSch){

        	$strSche = '<script>alert("Hệ thống đã xác nhận lịch đăng ký của bạn. Hãy đến đúng giờ và luyện tập chăm chỉ nhé.");</script>';
        	Session::put('msSche',$strSche);
        }
        ///////////////////////////////////
        if($combo->HLV==1){
        $listpt = DB::table('tbl_personal_trainer')->get();
        $listSche = DB::table('tbl_schedule_pt')->get();
        $listcus = DB::table('tbl_schedule')->where('id_order',$request->id_gt)
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



	        
		}
		 return redirect()->route('booklich',[$request->id_gt,$request->id_gym]);
    
     }
}

