<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Status;
use App\Cart;
use App\User;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Banner;
session_start();

class UserController extends Controller
{
    public function authLogin(){
        $UserId = Session::get('UserId');
        if($UserId){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('ACCOUNT/login');
        }
    }
    public function checklogin(Request $request){
        $pass = isset($request->pass) ? $request->pass : '';
        $email = isset($request->email) ? $request->email : '';
        $credentials = array('email'=>$email,'password'=> $pass);
        $user = User::where('email','=',$email)->first();
        //echo $user;
       //var_dump($credentials);
        if ($user) {
            if (Hash::check($credentials['password'],$user['pass'] )) {
            $request->session()->put('User',$user);
            if(session('status')==1){return Redirect::to('/CART-DETAIL');}else
            return Redirect::to('index');
           
          }else{
            $error = "Mậu khẩu không đúng.";
            Session::put('error',$error);
            return redirect()->back();
          }
        }else{
            $error = "Email chưa đăng kí.";
            Session::put('error',$error);
            return redirect()->back();
        }
        //return Redirect::to('index');
    }
    public function logout()
    {
        Session::forget('User');
        return Redirect::to('index');
    }
    public function login(){
            $ac1='show';
            $ac2='';
            return view('index.account',compact('ac1','ac2'));
        }
    public function register(){
            $ac2='show';
            $ac1='';
            return view('index.account',compact('ac1','ac2'));
        }
        //User::where([['id_user','=','1']])->first();
    public function adduser(Request $request){
        $name = isset($request->name) ? $request->name : '';
        $pass = isset($request->pass) ? $request->pass : '';
        $address = isset($request->address) ? $request->address : '';
        $phone = isset($request->phone) ? $request->phone : '';
        $email = isset($request->email) ? $request->email : '';
        //$user = new User();
        //$user->name = $name;
        //$user->email = $email;
        //$user->pass = bcrypt($pass);
        //$user->phone = $phone;
        //$user->address = $address;
        //$user->save();
        $user = User::where('email','=',$email)->first();
        if ($user) {
            $error = "Email đăng tồn tại.";
            Session::put('mess',$error);
            return Redirect::to('ACCOUNT/register');
        }
        $data= array(); 
        $data['email']=$email;
        $data['pass']= bcrypt($pass);
        $data['phone']=$phone;
        $data['name']=$name;
        $data['address']=$address;
        $result = DB::table('users')->insert($data);       
        if($result)
            {
            $success = "Thêm hội viên mới thành công.";
            Session::put('mess',$success);
            return Redirect::to('ACCOUNT/login');
        }
        else { 
            $error = "Thêm hội viên thất bại.";
            Session::put('mess',$error);
            return Redirect::to('ACCOUNT/register');
        }
        }
         public function myaccount(){
             $user = Session('User')?Session::get('User'):null;
            $order=   Status::join('tbl_order','tbl_order.id_status','=','tbl_status.id_status')->where('id_user','=',$user->id_user)->get();
            $combo= DB::table('tbl_order_detail_combo')
            ->join('tbl_combo_package', 'tbl_order_detail_combo.id_combo', '=', 'tbl_combo_package.id_combo')->join('tbl_gym', 'tbl_order_detail_combo.id_gym', '=', 'tbl_gym.id_gym')->join('tbl_order', 'tbl_order_detail_combo.id_order', '=', 'tbl_order.id_order')->get();
             return view('index.my-account',compact('order','combo','user'));
        }
        public function update(Request $request){
            $id = $request->id;
            $data['email']=$request->email;
            $data['phone']=$request->phone;
            $data['name']=$request->name;
            $data['address']=$request->address;
             $result = DB::table('users')
            ->where('id_user',$id)
            ->update($data);
           
       // $result = DB::table('tbl_users')->get();
            $new_user = User::where([['id_user','=',$id]])->first();
            Session::forget('User');
            $request->session()->put('User',$new_user);
            $success = "Thêm hội viên mới thành công.";
            Session::put('mess',$success);
            return Redirect::to(route('my-account'));
        }
        public function update_password(Request $request){
            $id = $request->id;
            $old_pass = $request->pass_old;
            $new_pass = $request->pass_new;
            $user = User::where('id_user','=',$id)->first();
            if (Hash::check($old_pass,$user['pass'] )) {
                $data['pass']=bcrypt($new_pass);
                 $result = DB::table('users')
                ->where('id_user',$id)
                 ->update($data);
                 $success = "Cập nhật mật khẩu thành công.";
                Session::put('mess',$success);
            }else
            {
                $success = "Mẫu khẩu không chính xác.";
                Session::put('mess',$success);
            }
            return Redirect::to(route('my-account'));
        }
        
   
}