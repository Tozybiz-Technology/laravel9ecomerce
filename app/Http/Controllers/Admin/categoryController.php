<?php

namespace App\Http\Controllers\Admin;
use App\Models\category;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;



class categoryController extends Controller
{

        public function insert(Request $req){
            // return $req->input();
             $category=new category;  
             if($req->hasFile('image')){
              $file=$req->file('image');
              $ext=$file->getClientOriginalExtension();
              $filename=time().'.'.$ext;
              $file->move('images/category/',$filename);
              $category->image=$filename;
             }
             $category->name=$req->input('name');
             $category->slug=$req->input('slug');
             $category->description=$req->input('description');
             $category->status=$req->input('status')==TRUE? '1':'0';
             $category->popular=$req->input('popular')==TRUE? '1':'0';
             $category->meta_title=$req->input('meta_title');
             $category->meta_keywords=$req->input('meta_keywords');
             $category->meta_descrip=$req->input('meta_description');
             $category->save();  
             $req->session()->flash('status','Product categories added successfully');
             return redirect('admin.vendor');
           }    

           function viewData(){
           // $category=ministrie::take(6)->get();
           // $sermons=sermon::take(4)->get();
            //$ministry1=ministrie::take(3)->get();
            $category=category::all();
            $product=product::all();
           // $charits=charitie::all();
           // $imggalleries=imggallerie::all();
            return view('admin.vendor',compact('category', 'product'));
           }

           function catEdit($id){
            $data=category::find($id);
            return view('admin.catupdate', ['data'=>$data]);
           }
           function catUpdate(Request $req){
            $data=category::find($req->id);  
            if($req->hasFile('image')){
              $path='images/category/'.$data->image;
              if(File::exists($path)){
                File::delete($path);
              }
              $file=$req->file('image');
              $ext=$file->getClientOriginalExtension();
              $filename=time().'.'.$ext;
              $file->move('images/category/',$filename);
              $data->image=$filename;
             }
            $data->name=$req->name;
            $data->slug=$req->slug;
            $data->description=$req->description;
            $data->status=$req->status==TRUE? '1':'0';
            $data->popular=$req->popular==TRUE? '1':'0';
            $data->meta_title=$req->meta_title;
            $data->meta_descrip=$req->meta_description;
            $data->meta_keywords=$req->meta_keywords;
            $data->update();
            session()->flash('status','Product categories has been updated successfully');
            return redirect('admin.vendor');
           
        }
        function catDelete($id){
          $data=category::find($id);
          if($data->image){
            $path='images/category/'.$data->image;
            if(File::exists($path)){
              File::delete($path);
            }
          }
          $data->delete();
          session()->flash('alert','The record has been deleted successfully');
          return redirect('admin.vendor');
        }
         public function productSearch(){
          $products=product::select('product_name')->where('status', 0)->get();
          $data=[];
          foreach($products as $item){
            $data[]=$item['product_name'];
          }
          return $data;
         }

         public function searchAdd(Request $req){
          $searched_product=$req->input('productName');
          if($searched_product != ""){
           $product=product::where("product_name", "LIKE", "%$searched_product%")->first();
           if($product){
           // return redirect('product-single/'.$product->id);
           return redirect('product-details/'.$product->id);
           }
           else{
            return redirect()->back()->with("status", "No Products Matched Your Search");
           }
          }
          else{
            return redirect()->back();
          }

          
         }

          public function viewCategory(){
          $category=category::all()->paginate(4);
          $trending=category::where('popular', '1')->paginate(4);
          return view('category-view',compact('category', 'trending'));
         }

         public function categoryView($slug){
        if(category::where('slug', $slug)->exists()){
          $category=category::where('slug', $slug)->first();
          $products=product::where('cate_id', $category->id)->where('status', '0')->get();
          return view('single-category', compact('category', 'products'));
        }
        else{
          return redirect('/')->with('status', 'Slug does not exist');
        }
 
         }
    }
    

