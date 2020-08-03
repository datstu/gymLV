<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tuvan;
use App\Combo;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Banner;
session_start();

class TuvanController extends Controller
{
	public function tuvan(Request $request){

        //$advice = DB::table('tbl_advice')->get();  
		$Gioitinh = isset($request->Gioitinh) ? $request->Gioitinh : '';
		$Chieucao = isset($request->cc) ? $request->cc : '0';
		$Cannang = isset($request->cn) ? $request->cn : '0';
		$Nghenghiep = isset($request->nn) ? $request->nn : '0';
		
		$dd1 = isset($request->dd1) ? $request->dd1 : '';
		$dd2 = isset($request->dd2) ? $request->dd2 : '';
		$dd3 = isset($request->dd3) ? $request->dd3 : '';
		$ch1 = isset($request->ch1) ? $request->ch1 : '';
		$ch2 = isset($request->ch2) ? $request->ch2 : '';
		$Chieucao=$Chieucao*0.01;
		$value= new Tuvan();
		$BMI=$value->BMI($Cannang,$Chieucao);
		$body=$value->check_body($BMI,$Gioitinh);
		$advice=$value->checkstatus($body,$Gioitinh);
		$Dinhduong= $value->check_health($dd1,$dd2,$dd3);

		//tim goi tap
		$KH= array(); 
		$KH['hlv'] = isset($request->hlv) ? $request->hlv : '0';
		$KH['yoga'] = isset($request->yoga) ? $request->yoga : '0';
		$KH['OLD'] = isset($request->nct) ? $request->nct : '0';
		$KH['newbie'] = isset($request->niewbie) ? $request->newbie : '0';
		$KH['vip'] = isset($request->vip) ? $request->vip : '0';
		//$KH['hlv'] = isset($request->hlv) ? $request->hlv : '0';
		$product=$value->suggest($KH);
 		var_dump($product) ;
        return view('index.tuvan',compact('Dinhduong','body','advice','Gioitinh','BMI','product'));
    }
     
}