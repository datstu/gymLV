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

class ShopController extends Controller
{
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
}
