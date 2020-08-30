<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



     public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $users = User::where('email','=',$user->email)->first();
        //echo $user;
       //var_dump($credentials);
        if ($users) {
            Session::put('User',$users);
            if(session('status')==1){return Redirect::to('/CART-DETAIL');}else
            return Redirect::to('index');
           
          }else{
            $data= array(); 
            $data['email']=$user->email;
            $data['pass']= '';
            $data['phone']='xxxxxxxxx';
            $data['name']=$user->name;
            $data['address']='Chua xac nhan';
            $result = DB::table('users')->insert($data);
            
            $users_new = User::where('email','=',$user->email)->first();
            Session::put('User',$users_new);
            if(session('status')==1){return Redirect::to('/CART-DETAIL');}else
            return Redirect::to('index');   
            }
    }
}
