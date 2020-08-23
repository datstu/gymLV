@extends('template.layout')
@section('content')
<?php
use App\Cart;
 if(Session('cart')){
                $oldCart = Session::get('cart');
                $carts = new Cart($oldCart);
                $cart=$oldCart;
                $product_cart=$carts->items;
                $totalPrice=$carts->totalPrice;
                $totalQty=$carts->totalQty;
                //var_dump($product_cart);
                //Session::flush();
                //$product_cart=(array)$product_cart;
            }
 if(Session('status')){  Session::forget('status'); }


  ?>
<script type="text/javascript" >
function F2(sl,id)
{
   // var pageVal = gia.val();

    $("#table #price"+id).html('');
    $.ajax({
    url:"{{ route('search') }}",
    method:"GET",
    data:{sl:sl,id:id},
    //dataType:'json',
    //s= JSON.parse(s);
    success:function(s)
    {
        console.log(s);
        //s= JSON.parse(s);
            //$("#price").html(s);
            var Val = '$'+Number(s).toLocaleString('en');
            $("#table #price"+id).html(Val);
            //document.getElementById("demo").innerHTML = output;

        
    },
});
}
</script>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                               @if(Session::has('cart'))
                            @foreach($product_cart as $prod)
                                <tr id="table">
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="{{url('public/uploads/product/'.$prod['product']->img)}}" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$prod['product']->ten}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>${{number_format($prod['product']->price)}}</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" name="sl" size="4" value="{{$prod['soluong']}}" min="0" step="1" onchange ="F2(this.value,{{$prod['product']->id_product}})" class="c-input-text qty text"></td>
                                    <td class="total-pr" id="price{{$prod['product']->id_product}}">
                                        <p>${{number_format($prod['price'])}}</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="{{ route('xoagiohang',$prod['product']->id_product) }}">
									<i class="fas fa-times"></i>
								</a>
                                 
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr><td> <h4>Trống, vui lòng đặt hàng trước. Xin cảm ơn!!</h4></td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                     <div class="update-box">
                        <a href="{{ route('resetgiohang') }}"><input value="Reset Cart" type="submit" ></a>
                    </div>
                </div>
                
                    <div class="update-box">
                        <a href="{{ route('thanhtoan') }}"><input value="Thanh toán" type="submit" ></a>
                    </div>
               
            </div>

            

        </div>
    </div>
    <!-- End Cart -->

 @stop