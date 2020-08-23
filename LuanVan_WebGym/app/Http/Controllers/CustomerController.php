<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
// use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    //
    public function listCustomer(){
    	$users = DB::table('users')->orderby('id_user','asc')
    	
    	->get(); 
    	// echo "<pre>";
    	// print_r($users);
    	// echo "</pre>";
    	return view('admin.customer.listCustomer')->with('users',$users);
    	
    }
    public function addCustomer(){
    		
		return view('admin.customer.addCustomer');
    }
    public function validateUser(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'pass' => ['required', 
               'min:6', 
               //'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
               //'confirmed'
           ],
            'phone' => 'required|numeric|digits:10',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ],[
            'name.required' => 'Bạn chưa nhập họ và tên',
            'pass.required' => 'Bạn chưa nhập mật khẩu',
            'pass.min' => 'Độ dài mật khẩu phải lớn hơn 6 ký tự',
            //'pass.regex' => 'Mật khẩu không chứa các ký tự đặc biệt, chứa 1 chữ hoa 1 chuhx.',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại không đúng',
            'phone.digits' => 'Số điện thoại phải đủ 10 số',
            'address.required' => 'Bạn chưa nhập địa chỉ của bạn',
            'email.required' => 'Bạn chưa nhập email của bạn',
            'email.email' => 'Email không đúng'
            
        ]);
    }
    public function saveAddCustomer(Request $request){
        $this->validateUser($request);
    	$data= array();
    	
    	$data['email']=$request->email;
    	$data['pass']= bcrypt($request->pass);
        $data['phone']=$request->phone;
        $data['name']=$request->name;
    	$data['address']=$request->address;
        

        $result = DB::table('users')->insert($data);
    
		
        if($result)
        	{
            $success = "Thêm hội viên mới thành công.";
            Session::put('success',$success);
            return Redirect::to('them-khach-hang');
        }
        else { 
            $error = "Thêm hội viên thất bại.";
            Session::put('error',$error);
            return Redirect::to('them-khach-hang');
        
        }
    	//return json_encode($data);
    	//$Str = "Thêm hội viên mới thành công.";
    	//return Redirect::to('quan-ly-khach-hang');


    }
    public function delCustomer($id){
    	
        //neu khach hang da dat lich thi ko cho xoa
        $schedule = DB::table('tbl_schedule')->where('id_user',$id);
        if($schedule){
            $users = DB::table('users')->orderby('id_user','asc')
        
        ->get();
            $str ='<script>alert(\'Người dùng này đang hoạt động. Không thể xóa.\')</script>';
            Session::put('str',$str);
            return Redirect::to('quan-ly-khach-hang');
        }
    	else{
            DB::table('users')->where('id_user',$id)->delete();
    	

      
       /* $result = DB::table('tbl_users')->insert($data);
		$Str = "";
         if($result)
        	$Str = "Thêm hội viên mới thành công.";
        else $Str = "Thêm hội viên mới thất bại.";*/
    	
    	return Redirect::to('quan-ly-khach-hang');
    }
    }
    public function updateCustomer($id){

    	$users = DB::table('users')
    	
    	->where('id_user',$id)
    	->first(); 
    
    	return view('admin.customer.updateCustomer')->with('users',$users);
    }
    public function saveEditCustomer(Request $request){
        $this->validateUser($request);
    	$data= array();
    	$id = $request->id_user;
    	 // $data['id_user'] = $request->id_user;
    	$data['email']=$request->email;
    	$data['pass']= bcrypt($request->pass);
        $data['phone']=$request->phone;
        $data['name']=$request->name;
    	$data['address']=$request->address;
       

       // $result = DB::table('tbl_users')->get();
        $result = DB::table('users')
        ->where('id_user',$id)
        ->update($data);
		/*$Str = "";
         if($result)
        	$Str = "Cập nhật hội viên mới thành công.";
        else $Str = "Cập nhật viên mới thất bại.";
    	//return json_encode($data);
    	//$Str = "Thêm hội viên mới thành công.";
    	return $Str;*/
        if($result)
            {
            $success = "Cập nhật thông tin hội viên thành công.";
            Session::put('success',$success);
            Session::put('id',$id);
            return Redirect::to('cap-nhat-hoi-vien/'.$id);
        }
        else { 
            $error = "Thêm hội viên thất bại.";
            Session::put('error',$error);
            return Redirect::to('cap-nhat-hoi-vien/'.$id);
        
        }

    }
    public function hiddenMessage(Request $request,$mess){
        Session::put($mess,null);
        $id = Session::get('id');
        if($id){
            return Redirect::to('cap-nhat-hoi-vien/'.$id);
        } 

            return Redirect::to('them-khach-hang');
        
    }

}
