<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use App\User;
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
        $tpbs = DB::table('tbl_product')->where('loaiSP','like','tpbs')->where('hot','=','1')->take(2)->get();
       //var_dump($phukien);
        return view('index.home',compact('phukien','tpbs'));
    }
    public function phonggym(){
          

      $gym = DB::table('tbl_gym')->get(); 
       //var_dump($product);
        return view('index.Gymlist')->with('gym',$gym);
    }
   
    public function about(){

        
        $coach = DB::table('tbl_personal_trainer')->get(); 
 //var_dump($product);
        return view('index.about')->with('coach',$coach);
    }
    
     
   
}