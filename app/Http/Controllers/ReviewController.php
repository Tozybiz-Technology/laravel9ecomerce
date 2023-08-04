<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Review;
use App\Models\order;
use App\Models\product;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview($id){
    $product=product::where('id', $id)->where('status', '0')->first();
    if($product){
         $product_id=$product->id;
         $review=Review::where('user_id', Auth::id())->where('product_id', $product_id)->first();
         if($review){
          return view('reviews.editreview', compact('review'));
         }
         else{

         $verified_purchase=order::where('orders.user_id', Auth::id())
         ->join('order_items', 'orders.id',  'order_items.order_id')
         ->where('order_items.product_id', $product_id)->get();
         return view('reviews.review', compact('product', 'verified_purchase'));
         }
    }
    else{
        return redirect()->back()->with('status', 'The link you followed was broken');
    }
    }
    
    public function createReview(Request $req){
      $product_id=$req->input('product_id');
      $product=product::where('id', $product_id)->where('status', '0')->first();
      if($product){
       $user_review=$req->input('user_review');
       $new_review = Review::create([
        'user_id'=>Auth::id(),
        'product_id'=>$product_id,
        'user_review'=>$user_review,
       ]);
       $category_name=$product->categories->name;
       $product_slug=$product->slug;
       if($new_review){
        //$req->session()->flash('status','Agency registration done successfully');
       // return redirect('product-single/'.$category_name.'/'.$product_slug)->with('status', "Thankyou for writing a review");
       return redirect()->back()->with('status', 'Thankyou for writing a review');
      }
      }
      else{
        return redirect()->back()->with('status', 'The link you followed was broken');
      }

    }


public function editReview($id){
  $product=product::where('id', $id)->where('status', '0')->first();
  if($product){
    $product_id=$product->id;
    $review=Review::where('user_id', Auth::id())->where('product_id', $product_id)->first();
    if($review){
     return view('reviews.editreview', compact('review'));
    }
    else{
      return redirect()->back()->with('status', 'The link you followed was broken');
    }

  }
  else{
    return redirect()->back()->with('status', 'The link you followed was broken');
  }
}

public function updateReview(Request $req)
{
$user_review=$req->input('user_review');
if($user_review != ''){
  $review_id = $req->input('review_id');
  $review = Review::where('id', $review_id)->where('user_id', Auth::id())->first();
  if($review){
  $review->user_review = $req->input('user_review');
  $review->update();
 // return redirect('product-single/'.$review->product->categories->slug.'/'. $review->product->slug)->with('status', 'Review updated successfully');
 return redirect()->back()->with('status', 'Review updated successfully');
}
else{
  return redirect()->back()->with('status', 'The link you followed was broken');
}
}
else{
  return redirect()->back()->with('status', 'You cannot submit an empty review');
}

}
}
