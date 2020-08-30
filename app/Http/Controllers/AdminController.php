<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// use Auth;
use Validator;
use DB;
// use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
	
	/*public function CheckLoginAdmin(){
        $admin_id = Session::get('admin_id');
       
        if(!isset($admin_id)){
          
            return Redirect::to('/login-admin')->send();
        }

    }*/
    public function index(){
    	
    	$this->CheckLoginAdmin();
    	 return view('admin.dashboard');
    	
    	
    		
    	
    }
    public function getLoginAdmin(){
    	$admin_id = Session::get('admin_id');
        
        if($admin_id){
          
            return Redirect::to('/admin');
        };
    	
    	return view('admin.loginAdmin');
    	
    }
    public function run(){
    	$data = [
    		'name' => 'admin',
    		'password' => bcrypt('admin'),
    		'username' => 'A Đờ Min'
    	];
    	DB::table('tbl_admin')->insert($data);
    }
    public function logoutAdmin(){
    		
        Session::put('admin_name',null);
        Session::put('admin_id',null);
         return Redirect::to('/login-admin');
 
    		
    }
     public function postLoginAdmin(Request $request){


     	

     	 $validator = Validator::make($request->all(),
    		[
    			'name'=>'required',
    			'password'=>'required|min:5|max:20'
    		]
    		,
    		[
    			'name.required'=>'Vui lòng nhập tên.',
    			
    			'password.required'=>'Vui lòng nhập mật khẩu',
    			'password.min'=>'Mật khẩu ít nhất 6 ký tự',
    			'password.max'=>'Mật khẩu không quá 20 ký tự',

    		]
    	);
    	if($validator->fails()){
    		return redirect()->back()
				    		->withErrors($validator)
				    		->withInput();
			

    	}
    	$name = $request->name;
    	$password = md5($request->password);

    	$result = DB::table('tbl_admin')->where('name',$name)->where('password',$password)->first();

    	if($result){
            Session::put('admin_name',$result->name);
            Session::put('admin_id',$result->id_admin);
            return Redirect::to('/admin');
            
        }else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
            //return Redirect::to('/admin');
        }
    
    }
}
