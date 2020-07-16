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
    public function index(){
        //$banner = Banner::orderby('banner_id','DESC')->where('banner_status','1')->take(3)->get();  

    	$phukien = DB::table('tbl_product')->where('loaiSP','like','phukien')->where('hot','=','1')->take(2)->get();
        $tpbs = DB::table('tbl_product')->where('loaiSP','like','tpbs')->where('hot','=','1')->take(2)->get();;
       //var_dump($phukien);
        return view('index.home',compact('phukien','tpbs'));
    }
    public function shop_pk(){
        
        $loai='shop';
      $product = DB::table('tbl_product')->orderby('id_product','desc')->get(); 
       //var_dump($product);
      $active3='';
      $active1='';
      $active2='';
      
         return view('index.shop',compact('product','loai','active3','active2','active1'));
    }
    public function shop_gt(){ 
        $loai='shop';
      $product = DB::table('tbl_combo_package')->orderby('id_combo','desc')->get(); 
       //var_dump($product);
       $active3='';
      $active1='';
      $active2='';
         return view('index.goitap',compact('product','loai','active3','active2','active1'));
    }
    public function phonggym(){
          

      $gym = DB::table('tbl_gym')->get(); 
       //var_dump($product);
        return view('index.Gymlist')->with('gym',$gym);
    }
    public function searchgt(Request $request){
            $active1='';
            $active2='';
            $active3='';
            $loai=''; 
            if (isset($request->loai)) {
            $loai=$request->loai;
            if ($loai=='hlv') {
                $product = DB::table('tbl_combo_package')->where('HLV','=','1')->get();
                return view('index.goitap',compact('product','loai','active3','active2','active1'));
            }else
            {
                $product = DB::table('tbl_combo_package')->where('name','like','%VIP%')->get();
                return view('index.goitap',compact('product','loai','active3','active2','active1'));
            }
        }elseif (isset($request->keywords_submit)) {
             $keywords = $request->keywords_submit;
        $product = DB::table('tbl_combo_package')->where('name','like','%'.$keywords.'%')->get(); 
        return view('index.goitap',compact('product','loai','active3','active2','active1'));
        }
       
    }
    public function searchpk(Request $request){
            $active1='';
            $active2='';
            $active3='';
            $loai=''; 
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
            return view('index.shop',compact('product','loai','active3','active2','active1'));
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
     public function getAddtoCart(Request $req,$id){
        //
        $sl = (isset($req->sl)) ? $req->sl : 1 ;
        $product = DB::table('tbl_product')->where('id_product','=',$id)->first();
        //var_dump($product);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$sl,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function delAll()
    {
        Session::forget('cart');
        return redirect()->back();
    }
    public function ajax(Request $req)
    {
        if($req->get('sl'))
        {
            $sl = $req->get('sl');
            $id = $req->get('id');
            $product = DB::table('tbl_product')->where('id_product','=',$id)->first();
            $price = $product->price;
            $totalPrice=$sl*$price;
            //var_dump($price);
            echo $totalPrice;
        }
    }
  }