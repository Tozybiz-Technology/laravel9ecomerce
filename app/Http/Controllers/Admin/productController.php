<?php

namespace App\Http\Controllers\Admin;
use App\Models\product;
use App\Models\category;
use App\Models\Review;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class productController extends Controller
{
  public function add(){
    $category=category::all();
    return view('admin.add-product',compact('category'));

  }  

  public function insert(Request $req){
    // return $req->input();
     $product=new product;  
     $category=new category;
     if($req->hasFile('image')){
      $file=$req->file('image');
      $ext=$file->getClientOriginalExtension();
      $filename=time().'.'.$ext;
      $file->move('images/products/',$filename);
      $product->image=$filename;
     }
     $product->cate_id=$category->id;
     $product->cate_id=$req->input('catname');
     $product->product_name=$req->input('product_name');
     $product->slug=$req->input('slug');
     $product->small_description=$req->input('small_description');
     $product->description=$req->input('description');
     $product->price=$req->input('price');
     $product->discount_price=$req->input('discount_price');
     $product->quantity=$req->input('quantity');
     $product->available_time=$req->input('available_time');
     $product->status=$req->input('status')==TRUE? '1':'0';
     $product->featured=$req->input('featured')==TRUE? '1':'0';
     $product->bestseller=$req->input('bestseller')==TRUE? '1':'0';
     $product->mostpopular=$req->input('mostpopular')==TRUE? '1':'0';
     $product->trending=$req->input('trending')==TRUE? '1':'0';
     $product->meta_title=$req->input('meta_title');
     $product->meta_keywords=$req->input('meta_keywords');
     $product->meta_description=$req->input('meta_description');
     $product->save();  
     $req->session()->flash('status','Products added successfully');
     return redirect('admin.vendor');
   }    

  /*public function viewData(){
   $product=product::join('categories', 'categories.id', '=', 'products.cate_id')
    ->get(['products.id','products.product_name','categories.name','products.description','products.price','products.discount_price']);
  return view('admin.vendor', compact('product'));
   }*/


   function prodEdit($id){
    $products=product::find($id);
    return view('admin.product-edit',compact('products'));
   }

   function prodUpdate(Request $req){
    $products=product::find($req->id);  
    if($req->hasFile('image')){
      $path='images/products/'.$products->image;
      if(File::exists($path)){
         File::delete($path);
      }
      $file=$req->file('image');
      $ext=$file->getClientOriginalExtension();
      $filename=time().'.'.$ext;
      $file->move('images/products/',$filename);
      $products->image=$filename;
     }
     $products->product_name=$req->input('product_name');
     $products->slug=$req->input('slug');
     $products->small_description=$req->input('small_description');
     $products->description=$req->input('description');
     $products->price=$req->input('price');
     $products->discount_price=$req->input('discount_price');
     $products->quantity=$req->input('quantity');
     $products->available_time=$req->input('available_time');
     $products->status=$req->input('status')==TRUE? '1':'0';
     $products->featured=$req->input('featured')==TRUE? '1':'0';
     $products->bestseller=$req->input('bestseller')==TRUE? '1':'0';
     $products->mostpopular=$req->input('mostpopular')==TRUE? '1':'0';
     $products->trending=$req->input('trending')==TRUE? '1':'0';
     $products->meta_title=$req->input('meta_title');
     $products->meta_keywords=$req->input('meta_keywords');
     $products->meta_description=$req->input('meta_description');
     $products->save();  
     $req->session()->flash('status','Products Updated successfully');
     return redirect('admin.vendor');
   
}
function proDelete($id){
  $products=product::find($id);
  if($products->image){
    $path='images/products/'.$products->image;
    if(File::exists($path)){
      File::delete($path);
    }
  }
  $products->delete();
  session()->flash('alert','The record has been deleted successfully');
  return redirect('admin.vendor');
}
public function productShow(){
  $new_arrivals=product::where('mostpopular', '1')->take(4)->get();
  $trending=product::where('trending', '1')->take(4)->get();
  $bestsellers=product::where('bestseller', '1')->take(4)->get();
  $featured=product::where('featured', '1')->take(4)->get();
  $popular_product=product::all()->where('trending', '1');
  $quickview=product::all();
  //$othermin=ministrie::all();
  //$upevents=upevent::take(3)->get();
 // $sermons=sermon::take(4)->get();
  return view('furniture',compact('new_arrivals', 'trending', 'bestsellers', 'featured', 'popular_product', 'quickview'));
 }
 
 public function shopProduct(){
  $shop=product::all()->paginate(8);
  return view('shop',compact('shop'));
 }

 public function productView($id){
  $shareComponent = \Share::page(
    'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
    'Your share text comes here',
)
->facebook()
->twitter()
->linkedin()
->telegram()
->whatsapp()        
->reddit();

 /* if(category::where('slug',  $cate_slug)->exists())
  if(category::where('slug',  $prod_slug)->exists())
  {
    $products=product::where('slug', 'prod_slug')->first();
    return view('product-single', compact('products'));

  }
  else{
    return redirect('/')->with('status', 'The link  was broken');
  }
  else{
    return redirect('/')->with('status', 'The link  was broken');
  }*/
$products=product::find($id);
$ratings=Rating::where('product_id', $products->id)->get();
$rating_sum=Rating::where('product_id', $products->id)->sum('stars_rated');
$user_rating=Rating::where('product_id', $products->id)->where('user_id', Auth::id())->first();
$reviews=Review::where('product_id', $products->id)->get();
$trending=product::where('trending', '1')->take(4)->get();
if($ratings->count() > 0){
$rating_value=$rating_sum/$ratings->count();
}
else{
  $rating_value=0;
}
 return view('product-single', compact('products', 'ratings', 'rating_value', 'user_rating', 'reviews', 'shareComponent','trending'));
 }
}
/*public function shopProduct(){
  if(category::where('slug', $slug)->exists()){
    $category=category::where('slug', $slug);
    $products=product::where('cate_id', $category->id)->where('status', '0')->get();
    return view('shop', compact('category', 'products'));
  }
  else{
    return redirect('/')->with('status', 'Slug does not exist');
  }
 /* $shop=product::all();
  return view('shop',compact('shop'));
 }*/
