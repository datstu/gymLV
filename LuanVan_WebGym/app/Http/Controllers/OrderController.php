<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Order;
use Session;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
  
    public function listOd(){
    	 $this->CheckLoginAdmin();
        $listPD = Order::paginate(4);
    	$stt = DB::table('tbl_status')
    	//->join('tbl_order_detail','tbl_order_detail.id_order','tbl_order.id_order')
    	
    	->get(); 
        //print_r($listPD);
		return view('admin.order.listOrder')->with('listPD',$listPD)->with('stt',$stt);
    }
     public function delOrd($id){
     	//Order::delOredeById($id);
        $this->CheckLoginAdmin();
        $order = new Order();
        $order->delOredeById($id);

    	return Redirect::to('quan-ly-hoa-don');
    }
    public function updateOrd($id){
        $this->CheckLoginAdmin();
        $order = new Order();
        $showOrd_PK = $order->showOrdPK($id);
        $showOrd_KH = $order->showOrdKH($id);
        //dd($show);
        $listStatus = $this->getStatus();
        return view('admin.order.updateOrder')->with('showOrd_PK',$showOrd_PK)
        ->with('showOrd_KH',$showOrd_KH)->with('listStatus',$listStatus);
    }
    public function save_updateOrd(Request $req){
        $this->CheckLoginAdmin();
        $stt = $req->stt;
        $id = $req->id_order;
        $order = new Order();
       if($order->saveEditOrd($id,$stt)){
        $success = "Cập nhật trạng thái đơn hàng thành công.";
            Session::put('success',$success);
            Session::put('id',$id);
            return Redirect::to('xu-ly-don-hang/'.$id);
       }
       else { 
            $error = "Cập nhật trạng thái đơn hàng  thất bại.";
            Session::put('error',$error);
            return Redirect::to('xu-ly-don-hang/'.$id);
        
        }

    }
}

