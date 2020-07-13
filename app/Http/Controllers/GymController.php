<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
// use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class GymController extends Controller
{
    public function listGym(){
    	$listGym = DB::table('tbl_gym')->orderby('id_gym','asc')
    	->get(); 
		return view('admin.gym.listGym')->with('listGym',$listGym);
    }
    public function validateGym(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            
           
            'address' => 'required'
            
        ],[
            'name.required' => 'Bạn chưa nhập tên phòng',
           
            
            'address.required' => 'Bạn chưa nhập địa chỉ của bạn'
            
        ]);
    }
    public function addGym(){
		return view('admin.gym.addGym');
	}
    public function saveAddGym(Request $request){
        $this->validateGym($request);
    	$data= array();
    	
    	
    	
      
        $data['name'] = $request->name;
    	$data['address'] = $request->address;
        

        $result = DB::table('tbl_gym')->insert($data);
    
		
        if($result)
        	{
            $success = "Thêm phòng mới thành công.";
            Session::put('success',$success);
            return Redirect::to('them-phong-tap');
        }
        else { 
            $error = "Thêm phòng thất bại.";
            Session::put('error',$error);
            return Redirect::to('them-phong-tap');
        
        }

    	//return json_encode($data);
    	//$Str = "Thêm hội viên mới thành công.";
    	//return Redirect::to('quan-ly-khach-hang');

    	print_r($data);
    }
    public function updateGym($id){

    	$gym = DB::table('tbl_gym')
    	
    	->where('id_gym',$id)
    	->first(); 
    
    	return view('admin.gym.updateGym')->with('gym',$gym);
    }
     public function saveEditGym(Request $request){
        $this->validateGym($request);
    	$data= array();
    	$id = $request->id_pt;
    	
    	
        
        $data['name']=$request->name;
    	$data['address']=$request->address;
       

       // $result = DB::table('tbl_users')->get();
        $result = DB::table('tbl_gym')
        ->where('id_gym',$id)
        ->update($data);
		
        if($result)
            {
            $success = "Cập nhật thông tin phòng tập thành công.";
            Session::put('success',$success);
            Session::put('id',$id);
            return Redirect::to('cap-nhat-phong-tap/'.$id);
        }
        else { 
            $error = "Thêm phòng tập thất bại.";
            Session::put('error',$error);
            return Redirect::to('cap-nhat-phong-tap/'.$id);
        
        }

    }
    public function delGym($id){
    	DB::table('tbl_gym')->where('id_gym',$id)->delete();
    	return Redirect::to('quan-ly-phong-tap');
    }
}
