<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\order;
use App\Models\product;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function addRating(Request $req){
        $stars_rated=$req->input('product_rating');
        $product_id=$req->input('product_id');
        $product_check=product::where('id', $product_id)->where('status', '0')->first();
    
      if($product_check){
        $verified_purchase=order::where('orders.user_id', Auth::id())
        ->join('order_items', 'orders.id',  'order_items.order_id')
        ->where('order_items.product_id', $product_id)->get();
    

        if($verified_purchase->count() > 0){
            $existing_rating=Rating::where('user_id', Auth::id())->where('product_id', $product_id)->first();
            if($existing_rating){
                $existing_rating->stars_rated=$stars_rated;
                $existing_rating->update();
            }
            else{
                Rating::create([
                'user_id'=>Auth::id(),
                'product_id'=>$product_id,
                'stars_rated'=>$stars_rated,
               ]); 
            }
         return redirect()->back()->with('status', 'Thankyou for rating this product');
        }
else{
    return redirect()->back()->with('status', 'You cannot rate this product without purchase');
}
    }
    else{
        return redirect()->back()->with('status', 'The link you followed was broken');
    }
}
}

