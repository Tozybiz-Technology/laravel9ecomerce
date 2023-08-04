<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\product;
use App\Models\order;
use App\Models\User;
use App\Models\orderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
class checkoutController extends Controller
{
    public function productCheckout(){
        $old_cartitems=cart::where('user_id', Auth::id())->get();
        foreach($old_cartitems as $cart){
            if(!product::where('id', $cart->product_id)->where('quantity', '>=', $cart->quantity)->exists())
            {
             $removeItem=cart::where('user_id',Auth::id())->where('product_id',$cart->product_id)->first();
             $removeItem-> delete();
    }
              
        }
       $cartitems=cart::where('user_id', Auth::id())->get();
        return view('checkout', compact('cartitems'));
    }

    public function placeOrder(Request $req){
        $order=new order();
        $order->user_id=Auth::id();
        $order->fname=$req->input('fname');
        $order->lname=$req->input('lname');
        $order->email=$req->input('email');
        $order->phone=$req->input('phone');
        $order->country=$req->input('country');
        $order->city=$req->input('city');
        $order->zipcode=$req->input('zipcode');
        $order->address=$req->input('faddress');
        $order->status=$req->input('status')==TRUE? '1':'0';
        $COD=$req->input('payment_mode');
        //cash on delivery payment mode
        if($COD == "COD" ){
          $order->payment_mode=$COD;      
          }
          //stripe payment mode
          $stripe=$req->input('payment_mode');
          if($stripe == "stripe" ){
            $order->payment_mode=$stripe;      
            }
         
          //pesapal payment mode
         $pesapal=$req->input('payment_mode');
        if($pesapal == "pesapal" ){
          $order->payment_mode=$pesapal;      
          }
       
         //To calculate the total price
         $total=0;
        $cartitems_total=cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod){
          if($prod->products->discount_price!=null){
                $total += $prod->products->discount_price * $prod->quantity;   
              }
              else{
                $total += $prod->products->price * $prod->quantity;
              }
           }
          $order->total_price = $total;
          $order->tracking_no= 'sharma'.rand(1111,9999);
          $order->save();

         $cartitems=cart::where('user_id', Auth::id())->get();
         
         foreach($cartitems as $cart){
         orderItem::create([
            'order_id'=>$order->id,
            'product_id'=>$cart->product_id,
            'quantity'=>$cart->quantity,
            'price'=>$cart->price
         ]);
         $prod=product::where('id', $cart->product_id)->first();
         $prod->quantity=$prod->quantity-$cart->quantity;
         $prod->update();
        }

     if(Auth::user()->address==NULL){
        $user=User::where('id', Auth::id())->first();
        $user->name=$req->input('fname');
        $user->lname=$req->input('lname');
        //$user->email=$req->input('email');
        $user->phone=$req->input('phone');
        $user->country=$req->input('country');
        $user->city=$req->input('city');
        $user->zipcode=$req->input('zipcode');
        $user->address=$req->input('faddress');
        $user->update();
     } 
     $cartitems=cart::where('user_id', Auth::id())->get();
     cart::destroy($cartitems);
   /*  if($req->input('payment_mode') == "payed by paypal" ){
      return response()->json(['status' => 'Order placed successfully']);
     }*/
     return redirect('shop')->with('status', 'Order placed successfully');

    }
    

}
