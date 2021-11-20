<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
   function index()
   {
       $data= Product::all();
    return view('product',['products'=>$data]);
   }
    function detail($id)
   {
      
    $data= Product::find($id);
    return view('detail',['product'=>$data]);
   }
   function addToCart(Request $req)
   {
   
    $cart= new Cart;
    $cart->product_id=$req->product_id;
    $cart->save();
    return redirect('/product');
   
   }

  static function cartItem()
   {
    return Cart::count();
  
   }
   function cartList()
   {
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
   }

    function Remove($id)
   {
      Cart::destroy($id);
      return redirect('/cartlist');
   }
}
