<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Banner;
session_start();

class CartController extends Controller
{
	public function getAddtoCart(Request $req,$id){
        //
        $sl = (isset($req->sl)) ? $req->sl : 1 ;
        $product = DB::table('tbl_product')->where('id_product','=',$id)->first();
        //var_dump($product);
        $active = 'add';
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$sl,$id,$active);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function delAll()
    {
        Session::forget('cart');
        return redirect()->back();
    }
    public function ajax(Request $req)
    {
        if($req->get('sl'))
        {
            $sl = $req->get('sl');
            $id = $req->get('id');
            $product = DB::table('tbl_product')->where('id_product','=',$id)->first();
            $price = $product->price;
            $totalPrice=$sl*$price;
            $active = 'update';
            //var_dump($price);
            $oldCart = Session('cart')?Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart->add($product,$sl,$id,$active);
            $req->session()->put('cart',$cart);
            echo $totalPrice;
        }
    }
}