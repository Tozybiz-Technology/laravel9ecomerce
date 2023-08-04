<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class cartController extends Controller
{
   /* public function addCart(Request $req){
        $product_id=$req->input('product_id');
        $product_qty=$req->input('product_qty');
        if(auth::check()){
          $prod_check=product::where('id',$product_id)->first();
          if($prod_check){
            if(cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                return response()->json(['status'=>$prod_check->name." Alredy Added to Cart"]);
            }
            else{
                $cart_item=new cat();
                $cart_item->prod_id=$product_id;
                $cart_item->user_id=auth::id();
                $cart_item->prod_qty=$product_qty;
                $cart_item->save();
                return response()->json(['status'=>$prod_check->name." Added to Cart"]);

            }
          }
        }
        else{
            return response()->json(['status'=>"Login to continue"]);
        }

    }*/
   public function addCart(Request $req,$id){
        if(Auth::id()){

           $user=Auth::user();
           $product=product::find($id);
           $cart=new cart;
           $cart->name=$user->name;
           $cart->user_id=$user->id;
           $cart->email=$user->email;
           $cart->product_title=$product->product_name;
           if($product->discount_price!=null){
             $cart->price=$product->discount_price * $req->quantity;
           }
           else{
            $cart->price=$product->price * $req->quantity;
           }
           
           $cart->image=$product->image;
           $cart->product_id=$product->id;
           $cart->quantity=$req->quantity;
           $cart->save();
           return redirect('cart-2');
        }

        else{

              return redirect('login');
        }

    }

    public function viewCart(){
        $cartitems=cart::where('user_id', Auth::id())->get();
        return view('cart-2', compact('cartitems'));
    }

    function deleteCart($id){
      $carts=cart::find($id);
     
      $carts->delete();
      session()->flash('alert','The record has been deleted successfully');
      return redirect()->back();
    }
}
