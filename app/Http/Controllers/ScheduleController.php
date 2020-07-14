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
    		$cus = DB::table('tbl_users')->first();
    	// echo $cus->id_user; 
    	 $pt = DB::table('tbl_personal_trainer')->first();
    	 //echo $pt->id_pt ; 
    	 
    	 $gym = DB::table('tbl_gym')->first();
    	 //echo $pt->id_gym  ;
    	 $data = array();
    	 $data2 =  array();
        $data['id_users'] = $cus->id_user;
        $data['id_pt'] = $pt->id_pt;
        $data['id_gym'] = $gym->id_gym;
        // echo "Thứ 2: " .$request->t2;
        // echo "Thứ 3: ".$request->t3;
        // echo "Thứ 4: ".$request->t4;
        // echo "Thứ 5: ".$request->t5;
        // echo "Thứ 6: ".$request->t6;
        // echo "Thứ 7: ".$request->t7;
        // echo "Thứ 8: ".$request->cn;
        $data['thu2'] = $request->t2;
        $data['thu3'] = $request->t3;
        $data['thu4'] = $request->t4;
        $data['thu5'] = $request->t5;
        $data['thu6'] = $request->t6;
        $data['thu7'] = $request->t7;
        $data['chunhat'] = $request->cn;

       
        DB::table('tbl_schedule')->insert($data);
        //DB::table('tbl_schedule_detail')->insert($data);

        
        

        Session::put('message','<script type="text/javascript">alert("Đặt lịch cho tuần này thành công")   </script>');
		//return view('admin.gym.listGym')->with('listGym',$listGym);
		 return Redirect::to('/BOOK');
    }
}

