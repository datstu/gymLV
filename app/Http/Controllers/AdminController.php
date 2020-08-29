<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
// use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    public function index(){
    	
    	//return view('admin.dashboard');
    	$s = Auth::user();
    	print_r($s) ;
    	echo "Đã đăng nhập";
    	/*if(!Auth::check()){
    		//return redirect()->route('admin');

    		echo "Đã đăng nhập";
    	}else {
    		// return view('admin.loginAdmin');
    		echo "Chưa đăng nhập";
    		
    	}*/
    }
    public function getLoginAdmin(){
    	if(Auth::user()){
    		//return redirect()->route('admin');

    		echo "Đã đăng nhập";
    	}else {
    		// return view('admin.loginAdmin');
    		//echo "Chưa đăng nhập";
    		
    	}
    	
    }
    public function run(){
    	$data = [
    		'name' => 'admin',
    		'password' => bcrypt('admin'),
    		'username' => 'A Đờ Min'
    	];
    	DB::table('tbl_admin')->insert($data);
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
    	//$remember = $request->remember;
    	
    	if(Auth::attempt(['name'=>$request->name,'password'=>$request->password])){
    		$userAdmin = Auth::user();

    		return view('admin.dashboard')->with('userAdmin',$userAdmin);
    		//echo "string";
    	} else{
    		return view('admin.loginAdmin')->with('message','Đăng nhập thất bại');
    		//echo "nostring";
    	}
    }
}
