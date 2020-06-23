<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class CustomerController extends Controller
{
    //
    public function listCustomer(){
    	$users = DB::table('tbl_users')->orderby('id_user','asc')
    	->join('tbl_level','tbl_level.id_level','=','tbl_users.id_level')
    	->get(); 
    	// echo "<pre>";
    	// print_r($users);
    	// echo "</pre>";
    	return view('admin.customer.listCustomer')->with('users',$users);
    	
    }
    public function addCustomer(){
    		$level = DB::table('tbl_level')->get();
			return view('admin.customer.addCustomer')->with('level',$level);
    }
    public function saveAddCustomer(Request $request){
    	$data= array();
    	// $data['id_user'] = null;
    	$data['email']=$request->email;
    	$data['pass']= md5($request->pass);
        $data['phone']=$request->phone;
        $data['name']=$request->name;
    	$data['address']=$request->address;
        $data['id_level']=$request->id_level;

       // $result = DB::table('tbl_users')->get();
        $result = DB::table('tbl_users')->insert($data);
		$Str = "";
         if($result)
        	$Str = "Thêm hội viên mới thành công.";
        else $Str = "Thêm hội viên mới thất bại.";
    	//return json_encode($data);
    	//$Str = "Thêm hội viên mới thành công.";*/
    	return $Str;
    }
    public function delCustomer($id){
    	
    	 DB::table('tbl_users')->where('id_user',$id)->delete();
    	

      
       /* $result = DB::table('tbl_users')->insert($data);
		$Str = "";
         if($result)
        	$Str = "Thêm hội viên mới thành công.";
        else $Str = "Thêm hội viên mới thất bại.";*/
    	
    	return Redirect::to('quan-ly-khach-hang');
    }
    public function updateCustomer($id){
    	$users = DB::table('tbl_users')
    	->join('tbl_level','tbl_level.id_level','=','tbl_users.id_level')
    	->where('id_user',$id)
    	->first(); 
    	$level = DB::table('tbl_level')->get();
    	return view('admin.customer.updateCustomer')->with('users',$users)->with('level',$level);
    }
    public function saveEditCustomer(Request $request){
    	$data= array();
    	$id = $request->id_user;
    	 // $data['id_user'] = $request->id_user;
    	$data['email']=$request->email;
    	$data['pass']= md5($request->pass);
        $data['phone']=$request->phone;
        $data['name']=$request->name;
    	$data['address']=$request->address;
        $data['id_level']=$request->id_level;

       // $result = DB::table('tbl_users')->get();
        // $result = DB::table('tbl_users')
        // ->where('id_user',$id)
        // ->update($data);
		$Str = "";
         if($result)
        	$Str = "Cập nhật hội viên mới thành công.";
        else $Str = "Cập nhật viên mới thất bại.";
    	//return json_encode($data);
    	//$Str = "Thêm hội viên mới thành công.";
    	return $Str;
    }

}
