<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\User;
use App\Models\product;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
     public function myOrder(){
        $orders=order::where('user_id', Auth::id())->get();
        return view('my-account', compact('orders'));

     }

     
     public function viewOrder($id){
      $orders=order::where('id', $id)->where('user_id', Auth::id())->first();
      return view('view-order', compact('orders'));

   }
}
