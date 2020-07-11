<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Banner;
session_start();

class HomeController extends Controller
{
    public function index(){
        //$banner = Banner::orderby('banner_id','DESC')->where('banner_status','1')->take(3)->get();  

    	$phukien = DB::table('tbl_product')->where('loaiSP','like','phukien')->where('hot','=','1')->take(2)->get();
        $tpbs = DB::table('tbl_product')->where('loaiSP','like','tpbs')->where('hot','=','1')->take(2)->get();;
       //var_dump($phukien);
        return view('index.home',compact('phukien','tpbs'));
    }
    public function shop_pk(){
        //$banner = Banner::orderby('banner_id','DESC')->where('banner_status','1')->take(3)->get();  
        $loai='shop';
      $product = DB::table('tbl_product')->orderby('id_product','desc')->get(); 
       //var_dump($product);
      $active3='';
      $active1='';
      $active2='';
      
         return view('index.shop',compact('product','loai','active3','active2','active1'));
    }
    public function shop_gt(){ 

      $product = DB::table('tbl_combo_package')->orderby('id_combo','desc')->get(); 
       //var_dump($product);
        return view('index.goitap')->with('product',$product);
    }
    public function phonggym(){
          

      $gym = DB::table('tbl_gym')->get(); 
       //var_dump($product);
        return view('index.Gymlist')->with('gym',$gym);
    }
    public function searchgt(Request $request){

        $keywords = $request->keywords_submit;
        $product = DB::table('tbl_combo_package')->where('ten','like','%'.$keywords.'%')->get(); 
 //var_dump($product);
        return view('index.goitap')->with('product',$product)->with('keywords',$keywords);
    }
    public function searchpk(Request $request){
        if (isset($request->loai)) {
            $active1='';
            $active2='';
            $active3='';
            $loai=$request->loai;
            $product = DB::table('tbl_product')->where('loaiSP','like',$loai)->get();
             return view('index.shop',compact('product','loai','active3','active2','active1'));
        }elseif (isset($request->keywords_submit)) {
            $keywords = $request->keywords_submit;
            $product = DB::table('tbl_product')->where('ten','like','%'.$keywords.'%')->get();
            return view('index.shop')->with('product',$product);
        }
         
         
        
    }
    public function about(){

        
        $coach = DB::table('tbl_personal_trainer')->get(); 
 //var_dump($product);
        return view('index.about')->with('coach',$coach);
    }
    public function tuvan(Request $request){

        
        $advice = DB::table('tbl_advice')->get();  

$Gioitinh = isset($request->Gioitinh) ? $request->Gioitinh : '0';
$Chieucao = isset($request->cc) ? $request->cc : '0';
$Cannang = isset($request->cn) ? $request->cn : '0';
$Dotuoi = isset($request->dt) ? $request->dt : '0';
$Nghenghiep = isset($request->nn) ? $request->nn : '0';
$Muctieu = isset($request->muctieu) ? $request->muctieu : '0';
$Chieucao=$Chieucao*0.01;

  function checkstatus($a,$advice,$b)
{
    foreach ($advice as  $value) {
        
        if ($value->status==$a&&$value->sex==$b) {
          return $value->content;
        }
    }  
}
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