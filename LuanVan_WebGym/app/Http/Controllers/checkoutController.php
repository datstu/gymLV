<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;;
use App\Cart;
use App\PhongGym;
use App\User;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Banner;
session_start();

class checkoutController extends Controller
{
   
    public function thanhtoan(){

        if (session('User')) {
             $thongtin = Session::has('User')?Session::get('User'):null;
            $Cart = Session::has('cart')?Session::get('cart'):null;
            $product_cart=$Cart->items;
            $totalPrice=$Cart->totalPrice;
            $totalQty=$Cart->totalQty;
              return view('index.thanhtoan',compact('thongtin','product_cart','totalPrice','totalQty'));
        }else{
            $status=1;
            Session::put('status',$status);
            $error = "Đăng nhập trước khi thanh toán.";
            Session::put('mess',$error);
             return Redirect::to('ACCOUNT/login');
        }
        
        
    }
    public function thanhtoanGT($id){

        if (session('User')) {
             $thongtin = Session::has('User')?Session::get('User'):null;
            $GT = DB::table('tbl_combo_package')->where('id_combo','=',$id)->first(); 
            $gym = PhongGym::get();
              return view('index.thanhtoanGoiTap',compact('thongtin','GT','gym'));
        }else{
            $status=1;
            Session::put('status',$status);
            $error = "Đăng nhập trước khi thanh toán.";
            Session::put('mess',$error);
             return Redirect::to('ACCOUNT/login');
        }
        
        
    }
    public function inhoadon(Request $request){

       $name = isset($request->name) ? $request->name : '';
        $id = isset($request->id) ? $request->id : '';
        $address = isset($request->address) ? $request->address : '';
        $phone = isset($request->phone) ? $request->phone : '';
        $email = isset($request->email) ? $request->email : '';
        $shipping_option = isset($request->shipping_option) ? $request->shipping_option : '';
        $order_date=Carbon::now('Asia/Ho_Chi_Minh');
        $totalPrice=  isset($request->totalPrice) ? $request->totalPrice : '';
        //echo $oder_date;
        $order = array('order_date' => $order_date,'consignee_name' => $name,'consignee_phone' => $phone,'id_user' => $id,'shipping_method' => $shipping_option,'totalPrice' => $totalPrice,'address' => $address );
        $result = DB::table('tbl_order')->insert($order);

         $Cart = Session::has('cart')?Session::get('cart'):null;
            $product_cart=$Cart->items;
             $idorder2 = DB::table('tbl_order')->max('id_order');
            foreach ($product_cart as $key => $value) {
               
                $order_detail = array('id_order' => $idorder2,'id_product' =>$value['product']->id_product ,'quantity' =>$value['soluong'] ,'price' =>$value['price']  );
                 $result2 = DB::table('tbl_order_detail')->insert($order_detail);
            }
            Session::forget('cart');
            $switch = '';
         return view('index.order',compact('order','product_cart','switch'));
        
        
    }
    public function inhoadonGT(Request $request){

        $name = isset($request->name) ? $request->name : '';
        $id = isset($request->id) ? $request->id : '';
        $phone = isset($request->phone) ? $request->phone : '';
        $email = isset($request->email) ? $request->email : '';
        $dateN = isset($request->date) ? $request->date : '';
         $id_combo = isset($request->product) ? $request->product : '';
        $order_date=Carbon::now('Asia/Ho_Chi_Minh');
        $totalPrice=  isset($request->totalPrice) ? $request->totalPrice : '';
        $phongtap = isset($request->phongtap) ? $request->phongtap : '';
        $GT = DB::table('tbl_combo_package')->where('id_combo','=',$id_combo)->first(); 
    
            $order = array('order_date' => $order_date,'consignee_name' => $name,'consignee_phone' => $phone,'id_user' => $id,'totalPrice' => $totalPrice,  );
            $result = DB::table('tbl_order')->insert($order);
            $idorder2 = DB::table('tbl_order')->max('id_order');
            $date_begin  = date($dateN);
            $rate = '+'.$GT->date.' month';
            $newdate = strtotime ( $rate , strtotime ( $date_begin ) ) ;
            $newdate = date ( 'Y-m-j' , $newdate );            
            $order_detail = array('id_order' => $idorder2,'id_combo' =>$id_combo ,'date_begin' =>$date_begin ,'date_end' =>$newdate , 'id_gym' => $phongtap );
            $order = array('order_date' => $order_date,'consignee_name' => $name,'consignee_phone' => $phone,'id_user' => $id,'totalPrice' => $totalPrice,'shipping_method' =>'','address' => '' );
            $product_cart  = ['soluong'=>'', 'price' => '', 'product' => $GT];
                 $result2 = DB::table('tbl_order_detail_combo')->insert($order_detail);
                 $switch = 'combo';
         return view('index.order',compact('order','product_cart','order_detail','switch','GT'));
    }
     
   
}