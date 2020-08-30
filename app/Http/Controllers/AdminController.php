<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// use Auth;
use Validator;
use DB;
use App\Product;
use App\Customer;
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
       
        $date = date('Y-m-j');
        $newdate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
        $newdate = date ( 'Y-m-j' , $newdate );
        //hóa đơn trong 1 tuần và trạng thái KHÁC hoàn tất giao dịch
        $newOrder = DB::table('tbl_order')
        ->where('tbl_order.id_status','!=',3)
        ->where('tbl_order.order_date','>',$newdate)
        ->get();

        $countOrder = count($newOrder);
        $countUser = Customer::count();
        $member = DB::table('tbl_order')
        ->join('tbl_order_detail_combo','tbl_order_detail_combo.id_order','=','tbl_order.id_order')->where('tbl_order_detail_combo.date_end','>',$date)->get();
        $countMember = count($member);
       // dd($countMember);

        $totalPrice = DB::table('tbl_order')->sum('totalPrice');
       // session_destroy();
        $id_session = Session::get('id_session');
        //dd(session_id ());
        $listVisit = DB::table('tbl_visitor')->get();
        if(isset($id_session)){

            foreach ($listVisit as $key => $value) {
                if($date == $value->date && $id_session != $value->id_session ){
                     DB::table('tbl_visitor')
                    ->where('id_visit',$value->id_visit)
                    ->update(['viewNumber' => $value->viewNumber +1]);
                }
            }
                        
        }else {
            Session::put('id_session',session_id());
            $id_session = Session::get('id_session');
            $data =  array();
            $data['id_session'] = $id_session;
            $data['date'] = $date;
            $data['viewNumber'] = 1;
            
            DB::table('tbl_visitor')->insert($data);
            
        }
        $countVisitor = DB::table('tbl_visitor')->sum('viewNumber');

    	return view('admin.dashboard')->with('countOrder',$countOrder)->with('countMember',$countMember)->with('totalPrice',$totalPrice)->with('countVisitor',$countVisitor);;
    	
    	
    		
    	
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
