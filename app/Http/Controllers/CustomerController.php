<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
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
    public function delCustomer(Request $request){
    	
    	$id = $request->id_user_del;
    	

      
       /* $result = DB::table('tbl_users')->insert($data);
		$Str = "";
         if($result)
        	$Str = "Thêm hội viên mới thành công.";
        else $Str = "Thêm hội viên mới thất bại.";*/
    	
    	return $id;
    }
}
