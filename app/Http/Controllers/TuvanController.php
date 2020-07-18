<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Banner;
session_start();

class HomeController extends Controller
{
	public function tuvan(Request $request){

        $advice = DB::table('tbl_advice')->get();  
		$Gioitinh = isset($request->Gioitinh) ? $request->Gioitinh : '0';
		$Chieucao = isset($request->cc) ? $request->cc : '0';
		$Cannang = isset($request->cn) ? $request->cn : '0';
		$Dotuoi = isset($request->dt) ? $request->dt : '0';
		$Nghenghiep = isset($request->nn) ? $request->nn : '0';
		$Muctieu = isset($request->muctieu) ? $request->muctieu : '0';
		$dd1 = isset($request->dd1) ? $request->dd1 : '';
		$dd2 = isset($request->dd2) ? $request->dd2 : '';
		$dd3 = isset($request->dd3) ? $request->dd3 : '';
		$ch1 = isset($request->ch1) ? $request->ch1 : '';
		$ch2 = isset($request->ch2) ? $request->ch2 : '';
		$Chieucao=$Chieucao*0.01;

		function checkstatus($a,$advice,$b)
		{
		    foreach ($advice as  $value) {
		        
		        if ($value->status==$a&&$value->sex==$b) {
		          return $value->content;
		        }
		    }  
		}
		//dinh duong
		function check_health($dd1,$dd2,$dd3)
		{
		    if ($dd1==1&&$dd2==1&&$dd3==1) {   
		        # song lanh manh
		    }elseif ($dd1==1||$dd2==1) {
		        # tam ly k tot
		    }elseif ($dd1==0&&$dd2==0&&$dd3==0) {
		        # song khong lanh manh
		    }
		}
		//muc tieu tap luyen
		function check_customer($ch1,$ch2)
		{
		    if ($ch1==1&&$ch2==1) {   
		        # custom loai I
		    }elseif ($ch1==1||$ch2==1) {
		        # custom loai II
		    }elseif ($ch1==0&&$ch2==0) {
		        # custom loai III
		    }
		}
		//loi khuyen
		$BMI = round($Cannang/($Chieucao*$Chieucao), 1);
		if($Gioitinh == 'nu'){
		    $Gioitinh= "nữ";
		    $b=0;
		    if($BMI <18.5){
		        $Tinhtrang="gầy"; 
		        $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		    elseif($BMI >=18.5&& $BMI <=22){
		        $Tinhtrang="bình thường";
		        $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		    elseif($BMI >=22.1&& $BMI <=24.9){
		        $Tinhtrang="thừa cân";
		        $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		    elseif($BMI >25){
		        $Tinhtrang="quá cân";
		        $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		}else {
		  $b=1;
		    if($BMI <18.5){
		        $Tinhtrang="gầy";
		         $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		    elseif($BMI >=18.5&& $BMI <=24.9){
		        $Tinhtrang="bình thường";
		        $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		    elseif($BMI >=25&& $BMI <=29.9){
		        $Tinhtrang="thừa cân";
		        $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		    elseif($BMI >30){
		        $Tinhtrang="quá cân";
		        $Khuyen=checkstatus($Tinhtrang,$advice,$b);
		    }
		}

        //var_dump($advice);
 
        return view('index.tuvan',compact('advice','Tinhtrang','Khuyen','Gioitinh','BMI'));
    }
     
}