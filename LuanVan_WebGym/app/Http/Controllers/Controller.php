<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function CheckLoginAdmin(){
        $admin_id = Session::get('admin_id');
       
        if(!isset($admin_id)){
          
            return Redirect::to('/login-admin')->send();
        }

    }
    public function getStatus(){
    	return DB::table('tbl_status')->get();
    }
     
}
