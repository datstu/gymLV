<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
// use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
  
    public function listOd(){
    	$listPD = DB::table('tbl_order')
    	//->join('tbl_order_detail','tbl_order_detail.id_order','tbl_order.id_order')
    	->orderby('id_order','asc')
    	->get(); 
    	$stt = DB::table('tbl_status')
    	//->join('tbl_order_detail','tbl_order_detail.id_order','tbl_order.id_order')
    	
    	->get(); 
        //print_r($listPD);
		return view('admin.order.listOrder')->with('listPD',$listPD)->with('stt',$stt);
    }
    //  public function delOd($id){
    //  	$get = DB::table('tbl_product')->select('img')->where('id_product',$id)->get();
    // 	DB::table('tbl_order')->where('id_product',$id)->delete();
    // 	return Redirect::to('quan-ly-san-pham');
    // }
}

