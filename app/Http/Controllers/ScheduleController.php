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
        //lấy ra ds pt có lịch trống
       // $data['id_pt'] = $pt->id_pt;
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
        $listpt = DB::table('tbl_personal_trainer')->get();
        $listSche = DB::table('tbl_schedule_pt')->get();
        $listcus = DB::table('tbl_schedule')->where('id_users',$cus->id_user)->first();
        echo "<pre>";
        print_r($listcus);
        echo "</pre>";
      /*  foreach ($listpt as $key => $value) {
        	if($value->status == 0){
        		echo $value->name;
        	}
        }*/
        // echo count($listSche);
       /* $count = 1;
			  		
			  			while ($count <= 7) {

			  				echo $count;
			  				$count++;
			  				
			  			}*/
       
    		

	  		if(count($listSche) > 0){
	  			/*foreach ($listpt as $key => $value) {
	        		if($value->status == 0){
			  			
		    		  		$listpt_thieu = DB::table('tbl_schedule_pt')
		    		  		->where('id_pt',$value->id_pt)->get();

		        		  	if($v->id_pt == $value->id_pt){
		        		  		echo "string";
		        		  	}
		        		  	if(count($listpt_thieu) < 14){// số ca pt chưa đủ 14 ca 1 tuần thì thêm vào
		        		  		foreach ($listpt_thieu as  $pt) {
		        		  			if($pt->ca)
		        		  		}
		        		  		
		        		  	}
	        		
			  		}
		  		}
		  		echo count($listpt_thieu);*/
		  		echo "hihi";
		  	// 	/*foreach ($listpt as $key => $value) {
					// if($value->status == 0){
			  // 			$data_pt['id_pt'] = $value->id_pt;
			  			
			  // 			$count = 1;
			  // 		$listpt_thieu = DB::table('tbl_schedule_pt')
		   //  		  		->where('id_pt',$value->id_pt)->get();
		    		
		   //  		/*echo "<pre>";
     //    print_r($listpt_thieu);
     //    echo "</pre>";*/
     //    		while ( count($listpt_thieu) < 14) {// số ca pt chưa đủ 14 ca 1 tuần thì thêm vào
		    		
		   //  		foreach ($listpt_thieu as  $value_thieu) {
		    			
		   //  			if($value_thieu->thu == 2 && $value_thieu->ca != $request->t2 ){
		   //  				$data_pt['ca'] = $request->t2;
			  // 				$data_pt['thu'] = 2;
			  // 				DB::table('tbl_schedule_pt')->insert($data_pt);
		   //  			}
		   //  			else if($value_thieu->thu == 3 && $value_thieu->ca != $request->t3 ){
		   //  				$data_pt['ca'] = $request->t3;
			  // 				$data_pt['thu'] = 3;
			  // 				DB::table('tbl_schedule_pt')->insert($data_pt);
		   //  			}
		   //  			else if($value_thieu->thu == 4 && $value_thieu->ca != $request->t4 ){
		   //  				$data_pt['ca'] = $request->t4;
			  // 				$data_pt['thu'] = 4;
			  // 				DB::table('tbl_schedule_pt')->insert($data_pt);
		   //  			}
		   //  			else if($value_thieu->thu == 5 && $value_thieu->ca != $request->t5 ){
		   //  				$data_pt['ca'] = $request->t5;
			  // 				$data_pt['thu'] = 5;
			  // 				DB::table('tbl_schedule_pt')->insert($data_pt);
		   //  			}
		   //  			else if($value_thieu->thu == 6 && $value_thieu->ca != $request->t6 ){
		   //  				$data_pt['ca'] = $request->t6;
			  // 				$data_pt['thu'] = 6;
			  // 				DB::table('tbl_schedule_pt')->insert($data_pt);
		   //  			}
		   //  			else if($value_thieu->thu == 7 && $value_thieu->ca != $request->t7 ){
		   //  				$data_pt['ca'] = $request->t7;
			  // 				$data_pt['thu'] = 7;
			  // 				DB::table('tbl_schedule_pt')->insert($data_pt);
		   //  			}
		   //  			else if($value_thieu->thu == 8 && $value_thieu->ca != $request->cn ){
		   //  				$data_pt['ca'] = $request->cn;
			  // 				$data_pt['thu'] = 8;
			  // 				DB::table('tbl_schedule_pt')->insert($data_pt);
		   //  			}
		   //  		}

		   //  			$listpt_thieu = DB::table('tbl_schedule_pt')
		   //  		  		->where('id_pt',$value->id_pt)->get();
		   //  		}
		   //  		//echo $listpt_thieu->ca;
		        		  		
			  // 			/*while ($count <= 7) {



			  // 				echo $count;
			  // 				$count++;
			  				
			  // 			}
			  // 			*/
	    //     			}*/
        			//}	
		  		
	        }else{
	        	
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

			  			if($listcus->thu2){
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
        		}
        		 // echo "<pre>";
				       //  print_r($data_pt);
				       //  echo "</pre>";
    	
        

        
        
/*
        Session::put('message','<script type="text/javascript">alert("Đặt lịch cho tuần này thành công")   </script>');
		//return view('admin.gym.listGym')->with('listGym',$listGym);
		 return Redirect::to('/BOOK');*/
    }
}

