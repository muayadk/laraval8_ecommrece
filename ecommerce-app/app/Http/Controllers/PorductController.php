<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use Session;
use Illuminate\Support\facades\DB;
class PorductController extends Controller
{
    //

    function index()
    {
        $data =  Product::all();
        return view('index',['products'=>$data]);
    }


     function catProduct($name)
    {
       // return $data =  Product:: where('category','like','%'.$name.'%')
       // ->get();
       // 
     //echo "hell".$name;
          $products =DB::table('categories')
            ->join('products','categories.cat_name','=','products.category')
            ->where('categories.cat_name',$name)
            ->select('products.*')
            ->get();

            return view('category',['products'=>$products]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['productdetail'=>$data]);
    }

    function search(Request $req)
    {
        $data = Product::
        where('productName','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }


    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
          $cart = new Cart;
          $cart->user_id=$req->session()->get('user')['id'];
          $cart->product_id=$req->product_id;
          $cart->save();
          return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
       
    }

    // cart list function 
    static function cartItem(){

        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();

    }

  // cart list fuction
        function cartList()
        {
            if(!Session::has('user'))
            {
              return redirect('/login');
            }
            $userId=Session::get('user')['id'];
            $products =DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();

            return view ('cartlist',['products'=>$products]);

        }

     // remove cart item
     function removeCart($id)

     {
         Cart::destroy($id);
         return redirect('cartlist');
     }


     function orderNow()
     {

            $userId=Session::get('user')['id'];
           $total =DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');

            
            return view ('ordernow',['total'=>$total]);
     }

     function orderPlace(Request $req){

       // return $req->input();
        $userId=Session::get('user')['id'];
       $allCart=Cart::where('user_id',$userId)->get();
       foreach($allCart as $cart)
       {
           $order =new Order;
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->status="pending";
           $order->payment_method=$req->payment;
           $order->payment_status="pending";
           $order->address=$req->address;
           $order->save();
           Cart::where('user_id',$userId)->delete();

       }

       return redirect('/');

     }

     function myOrder()
    {
        if(!Session::has('user'))
            {
              return redirect('/login');
            }
         $userId=Session::get('user')['id'];
            $myorder =DB::table('orders')
           ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();

            
            return view ('myorder',['orders'=>$myorder]);
    }

}
