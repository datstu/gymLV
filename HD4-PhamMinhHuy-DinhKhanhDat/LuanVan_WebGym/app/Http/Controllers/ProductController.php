<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Product;
use Session;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    public function listPD(){
        $this->CheckLoginAdmin();
    	$listPD = Product::paginate(4);
        //print_r($listPD);
		return view('admin.product.listProduct')->with('listPD',$listPD);
    }
     public function photoManagenment(){
        $this->CheckLoginAdmin();
        return view('admin.product.photoManagement');
    }
    
    public function validatePD(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'descript' => 'required',
            'price' => 'required|numeric',
            'product_image' => 'required|mimes:jpeg,jpg,png,gif'

            
        ],[
            'name.required' => 'Bạn chưa nhập tên phòng',
           
            
            'descript.required' => 'Bạn chưa nhập phần mô tả của bạn',
            'price.required' => 'Bạn chưa nhập giá của bạn',
            'price.numeric' => 'Giá tiền chỉ được nhập số',
            'descript.required' => 'Bạn chưa nhập địa chỉ của bạn',
            'date.required' => 'Bạn chưa nhập địa chỉ của bạn',
            'date.numeric' => 'Thời hạn chỉ được nhập số',
            'product_image.required' => 'Hình ảnh không được bỏ trống',
            'product_image.mimes' => 'Chỉ được tải hình ảnh'
            
        ]);
    }
    public function addPD(){
        $this->CheckLoginAdmin();
		return view('admin.product.addPD');
	}
    public function saveAddPD(Request $request){
        $this->validatePD($request);
    	$data= array();
    	
    	
    	
      
        $data['ten'] = $request->name;
    	$data['description'] = $request->descript;
    	$data['price'] = $request->price;
        $data['hot'] = $request->Hot;
        $data['loaiSP'] = $request->loaisp;
    	
        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['img'] = $new_image;

          	$result = DB::table('tbl_product')->insert($data);
        }
  	    if($result)
    	{
            $success = "Thêm phòng mới thành công.";
            Session::put('success',$success);
            return Redirect::to('them-san-pham');
        }
        else { 
            $error = "Thêm phòng thất bại.";
            Session::put('error',$error);
            return Redirect::to('them-san-pham');
        
        }
    }
    public function updatePD($id){
        $this->CheckLoginAdmin();
    	$PD = DB::table('tbl_product')
    	
    	->where('id_product',$id)
    	->first(); 
    
    	

        if(!empty($PD))
          return view('admin.product.updatePD')->with('PD',$PD);
        else return Redirect::to('quan-ly-san-pham');
    }
    public function saveEditPD(Request $request){
        //$this->validatePD($request);
    	$id = $request->id_pt;
    	//xóa hình cũ
    	$getLL = DB::table('tbl_product')->select('img')->where('id_product',$id)->get();

        if($getLL[0]->img != '' && file_exists(public_path('uploads/product/'.$getLL[0]->img)))
		{
			unlink(public_path('uploads/product/'.$getLL[0]->img));
		}
    	$data= array();
    	
    	
    	
        
        
        $data['ten'] = $request->name;
    	$data['description'] = $request->descript;
    	$data['price'] = $request->price;
        $data['hot'] = $request->Hot;
        $data['loaiSP'] = $request->loaisp;
    	$get_image = $request->file('product_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['img'] = $new_image;

            $result = DB::table('tbl_product')
						->where('id_product',$id)
       					->update($data);
			if($result)
	        {
	            $success = "Cập nhật thông tin sản phẩm thành công.";
	            Session::put('success',$success);
	            Session::put('id',$id);
	            return Redirect::to('cap-nhat-san-pham/'.$id);
	        }
	        else { 
	            $error = "Cập nhật sản phẩm thất bại.";
	            Session::put('error',$error);
	            return Redirect::to('cap-nhat-san-pham/'.$id);
	        
	        }
        }else {
        	 $result = DB::table('tbl_product')
						->where('id_product',$id)
       					->update($data);
			if($result)
	        {
	            $success = "Cập nhật thông tin sản phẩm thành công.";
	            Session::put('success',$success);
	            Session::put('id',$id);
	            return Redirect::to('cap-nhat-san-pham/'.$id);
	        }
	        else { 
	            $error = "Cập nhật sản phẩm thất bại.";
	            Session::put('error',$error);
	            return Redirect::to('cap-nhat-san-pham/'.$id);
	        
	        }
        }
        

    }
    public function delPD($id){
    	DB::table('tbl_product')->where('id_product',$id)->delete();
    	return Redirect::to('quan-ly-san-pham');
    }
}
