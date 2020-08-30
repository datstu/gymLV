<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
     protected $table='tbl_order';
   public $timestamps = false; 
   public function __construct(){
		
	}
   public function delOredeById($id){
   		
    	DB::table('tbl_order')->where('id_order',$id)->delete();
   }
   public function showOrdPK($id){
   		
   	return DB::table('tbl_order')
   		->join('tbl_order_detail','tbl_order_detail.id_order','=','tbl_order.id_order')
   		->join('tbl_product','tbl_product.id_product','=','tbl_order_detail.id_product')
   		
   		->where('tbl_order.id_order',$id)
   		->get();
   }
    public function showOrdKH($id){
	   	return DB::table('tbl_order')
   		->join('tbl_order_detail','tbl_order_detail.id_order','=','tbl_order.id_order')
   		->join('tbl_product','tbl_product.id_product','=','tbl_order_detail.id_product')

   		->where('tbl_order.id_order',$id)
   		->first();
   }
   public function saveEditOrd($id,$stt){
   	  $result = DB::table('tbl_order')
        ->where('id_order',$id)
        ->update(['id_status' => $stt]);
        if($result){
        	return true;
        }else return false;

   }
}
