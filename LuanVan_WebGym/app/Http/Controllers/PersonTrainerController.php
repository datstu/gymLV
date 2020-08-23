<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
// use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
class PersonTrainerController extends Controller
{
	public function listPT(){
		$listPT = DB::table('tbl_personal_trainer')->orderby('id_pt','asc')
    	->get(); 
		return view('admin.personTrainer.listPT')->with('listPT',$listPT);
	}
	
	public function addPT(){
		return view('admin.personTrainer.addPT');
	}
	public function validatePT(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            
            'phone' => 'required|numeric|digits:10',
            
            'address' => 'required'
            
        ],[
            'name.required' => 'Bạn chưa nhập họ và tên',
           
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại không đúng',
            'phone.digits' => 'Số điện thoại phải đủ 10 số',
            'address.required' => 'Bạn chưa nhập địa chỉ của bạn'
            
        ]);
    }
    public function saveAddPT(Request $request){
        $this->validatePT($request);
    	$data= array();
    	
    	
    	
        $data['phone'] = $request->phone;
        $data['name_pt'] = $request->name;
    	$data['address'] = $request->address;
        

        $result = DB::table('tbl_personal_trainer')->insert($data);
    
		
        if($result)
        	{
            $success = "Thêm huấn luận viên mới thành công.";
            Session::put('success',$success);
            return Redirect::to('them-huan-luan-vien');
        }
        else { 
            $error = "Thêm huấn luận viên thất bại.";
            Session::put('error',$error);
            return Redirect::to('them-huan-luan-vien');
        
        }

    	//return json_encode($data);
    	//$Str = "Thêm hội viên mới thành công.";
    	//return Redirect::to('quan-ly-khach-hang');

    	
    }
    public function updatePT($id){

    	$PT = DB::table('tbl_personal_trainer')
    	
    	->where('id_pt',$id)
    	->first(); 
    
    	return view('admin.personTrainer.updatePT')->with('PT',$PT);
    }
    public function saveEditPT(Request $request){
        $this->validatePT($request);
    	$data= array();
    	$id = $request->id_pt;
    	
    	
        $data['phone']=$request->phone;
        $data['name_pt']=$request->name;
    	$data['address']=$request->address;
       

       // $result = DB::table('tbl_users')->get();
        $result = DB::table('tbl_personal_trainer')
        ->where('id_pt',$id)
        ->update($data);
		
        if($result)
            {
            $success = "Cập nhật thông tin hội viên thành công.";
            Session::put('success',$success);
            Session::put('id',$id);
            return Redirect::to('cap-nhat-huan-luan-vien/'.$id);
        }
        else { 
            $error = "Thêm hội viên thất bại.";
            Session::put('error',$error);
            return Redirect::to('cap-nhat-huan-luan-vien/'.$id);
        
        }

    }
    public function delPT($id){
    	DB::table('tbl_personal_trainer')->where('id_pt',$id)->delete();
    	return Redirect::to('quan-ly-huan-luan-vien');
    }
}
