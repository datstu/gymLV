<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
 use App\PhongGym;
use Session;
use Illuminate\Support\Facades\Redirect;

class GymController extends Controller
{
    public function listGym(){
        $this->CheckLoginAdmin();
    	$listGym = PhongGym::paginate(5);
		return view('admin.gym.listGym')->with('listGym',$listGym);
    }
    public function validateGym(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            
           
            'address' => 'required',
             'MAX' => 'required'
            
        ],[
            'name.required' => 'Bạn chưa nhập tên phòng',
           
            
            'address.required' => 'Bạn chưa nhập địa chỉ của bạn'
            
        ]);
    }
    public function addGym(){
        $this->CheckLoginAdmin();
		return view('admin.gym.addGym');
	}
    public function saveAddGym(Request $request){
        $this->validateGym($request);
    	$data= array();
    	
    	
    	
      
        $data['name'] = $request->name;
    	$data['address_gym'] = $request->address;
         $data['MAX'] = $request->MAX;
        

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
        $this->CheckLoginAdmin();

    	$gym = DB::table('tbl_gym')
    	
    	->where('id_gym',$id)
    	->first(); 
         if(!empty($gym))
          return view('admin.gym.updateGym')->with('gym',$gym);
        else return Redirect::to('quan-ly-phong-tap');
    
    	
    }
     public function saveEditGym(Request $request){
        $this->validateGym($request);
    	$data= array();
    	$id = $request->id_pt;
    	
    	
        
        $data['name']=$request->name;
    	$data['address_gym']=$request->address;
         $data['MAX'] = $request->MAX;
       

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
    	
    	
         $this->CheckLoginAdmin();
        //neu khach hang da dat lich thi ko cho xoa
        // echo $id;
        $schedule = DB::table('tbl_schedule')->where('id_gym',$id)->get();
        //dd($schedule);

        if(empty($schedule)){
            
            $str ='<script>alert(\'Người dùng này đang hoạt động. Không thể xóa.\')</script>';
            Session::put('str',$str);
            
        }
        else{
            DB::table('tbl_gym')->where('id_gym',$id)->delete();
        }      
            return Redirect::to('quan-ly-phong-tap');
    }
}
