<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
// use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
class ComboGymController extends Controller
{
    public function listCB(){

    	$listCB = DB::table('tbl_combo_package')->orderby('id_combo','asc')
    	->get(); 
		return view('admin.comboGym.listCombo')->with('listCB',$listCB);
    }
    public function validateCB(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'descript' => 'required',
            'price' => 'required|numeric',
            'date' => 'required|numeric'

            
        ],[
            'name.required' => 'Bạn chưa nhập tên phòng',
           
            
            'descript.required' => 'Bạn chưa nhập phần mô tả của bạn',
            'price.required' => 'Bạn chưa nhập giá của bạn',
            'price.numeric' => 'Giá tiền chỉ được nhập số',
            'descript.required' => 'Bạn chưa nhập địa chỉ của bạn',
            'date.required' => 'Bạn chưa nhập địa chỉ của bạn',
            'date.numeric' => 'Thời hạn chỉ được nhập số'
            
        ]);
    }
    public function addCB(){
		return view('admin.comboGym.addCB');
	}
    public function saveAddCB(Request $request){
        $this->validateCB($request);
    	$data= array();
    	
    	
    	
      
        $data['ten'] = $request->name;
    	$data['description'] = $request->descript;
    	$data['price'] = $request->price;
    	$data['date'] = $request->date;
        $data['HLV'] = $request->HLV;

        $result = DB::table('tbl_combo_package')->insert($data);
    
		
        if($result)
        	{
            $success = "Thêm gói mới thành công.";
            Session::put('success',$success);
            return Redirect::to('them-goi-tap');
        }
        else { 
            $error = "Thêm gói thất bại.";
            Session::put('error',$error);
            return Redirect::to('them-goi-tap');
        
        }

    	//return json_encode($data);
    	//$Str = "Thêm hội viên mới thành công.";
    	//return Redirect::to('quan-ly-khach-hang');

    	print_r($data);
    }
    public function updateCB($id){

    	$CB = DB::table('tbl_combo_package')
    	
    	->where('id_combo',$id)
    	->first(); 
    
    	return view('admin.comboGym.updateCB')->with('CB',$CB);
    }
     public function saveEditCB(Request $request){
        $this->validateCB($request);
    	$data= array();
    	$id = $request->id_pt;
    	
    	
        
        
        $data['ten'] = $request->name;
    	$data['description'] = $request->descript;
    	$data['price'] = $request->price;
    	$data['date'] = $request->date;
          $data['HLV'] = $request->HLV;
       

       // $result = DB::table('tbl_users')->get();
        $result = DB::table('tbl_combo_package')
        ->where('id_combo',$id)
        ->update($data);
		
        if($result)
            {
            $success = "Cập nhật thông tin gói tập thành công.";
            Session::put('success',$success);
            Session::put('id',$id);
            return Redirect::to('cap-nhat-goi-tap/'.$id);
        }
        else { 
            $error = "Cập nhật gói tập thất bại.";
            Session::put('error',$error);
            return Redirect::to('cap-nhat-goi-tap/'.$id);
        
        }

    }
    public function delCB($id){
    	DB::table('tbl_combo_package')->where('id_combo',$id)->delete();
    	return Redirect::to('quan-ly-goi-tap');
    }
}
