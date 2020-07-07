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

    	$product = DB::table('tbl_product')->orderby('id_product','desc')->get(); 
      $combo = DB::table('tbl_combo_package')->orderby('id_combo','desc')->get(); 
       //var_dump($product);
        return view('index.home')->with('product',$product)->with('combo',$combo);
    }
    public function shop_pk(){
        //$banner = Banner::orderby('banner_id','DESC')->where('banner_status','1')->take(3)->get();  

      $product = DB::table('tbl_product')->orderby('id_product','desc')->get(); 
       //var_dump($product);
        return view('index.shop')->with('product',$product);
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
        $product = DB::table('tbl_combo_package')->where('name','like','%'.$keywords.'%')->get(); 
 //var_dump($product);
        return view('index.goitap')->with('product',$product)->with('keywords',$keywords);
    }
    public function searchpk(Request $request){

        $keywords = $request->keywords_submit;
        $product = DB::table('tbl_product')->where('name','like','%'.$keywords.'%')->get(); 
 //var_dump($product);
        return view('index.shop')->with('product',$product)->with('keywords',$keywords);
    }
    public function about(){

        
        $coach = DB::table('tbl_personal_trainer')->get(); 
 //var_dump($product);
        return view('index.about')->with('coach',$coach);
    }
  }