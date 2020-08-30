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
    public function chartOrder(){
        //tổng các đơn hàng của trong 6 tháng từ tháng hiện tại trừ 1 đến tháng thứ 6
        $date = date('Y-m-j');
        $newdate = strtotime ( '-6 month' , strtotime ( $date ) ) ;
        $newdate = date ( 'm' , $newdate );
        //echo $newdate."<br>";
        $listOrder = DB::table('tbl_order')->get();
           $s = 0;
        $result = array();
        foreach ($listOrder as $key => $value) {
            //if($value->date )
            //echo date ( 'm' , $value->order_date );
            //echo $value->order_date ."<br>";
            $dateOder = strtotime (  $value->order_date ) ;
        $dateOder = date ( 'm' , $dateOder );
        //echo $dateOder."<br>";
        $date = date('m');
     
            if(($dateOder+1) >= $newdate && $dateOder < $date){
                //echo $value->order_date."<br>";
                //$s += $value->totalPrice;
                if(empty($result)){
                    $result[$dateOder] = $value->totalPrice;
                }else{
                    if(isset($result[$dateOder])){
                        $result[$dateOder] +=$value->totalPrice;
                    }else{
                        $result[$dateOder] = $value->totalPrice;
                    }
                }
            }
            /*nếu mảng rỗng khởi tạo giá trị đầu tiên cho mảng
            nếu đã có mảng tiếp tục kiểm tra phần tử trong đó có ko 
                nếu chưa có  thêm nó vào mảng
                nếu đã có cộng thêm*/
            
        }
        ksort($result);
    
        $arr_key_month = array_keys($result) ;
        $arr_value_month = array_values($result) ;
        $s= 0;
        $arr_value_fm = array();
        foreach ($arr_value_month as $key => $value) {
            $s = ($value  * 100)/array_sum($arr_value_month);
            //echo $key."<br>";
            $arr_value_fm[$key] = number_format($s);
            // echo $s."<br>";
        }
        //dd($arr_value_fm);
        $keyJSON = json_encode($arr_key_month);
         $valJSON = json_encode($arr_value_fm);
         return [$keyJSON,$valJSON,$newdate-01,$date-01];
         // tách ra hàm riêng
         //gửi các giá trị là key, value, tháng hiện tại -1, và 6 tháng trước đó
    }
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


        $arrCharOrder = $this->chartOrder();

        //lấy các giá trị cần tìm bên hàm chart order
        $valJSON = $arrCharOrder[1];//tổng số tiền trong 1 tháng
        $keyJSON = $arrCharOrder[0];//tháng
        $month_1 = $arrCharOrder[2];//tháng hiện tại - 6
        $month_6 = $arrCharOrder[3];//tháng hiện tại - 1
        
        // echo $month_1;
    	return view('admin.dashboard')->with('countOrder',$countOrder)->with('countMember',$countMember)->with('totalPrice',$totalPrice)->with('countVisitor',$countVisitor)
        ->with('valJSON',$valJSON)->with('keyJSON',$keyJSON)->with('month_1',$month_1)
        ->with('month_6',$month_6);
    	
    	
    		
    	
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
