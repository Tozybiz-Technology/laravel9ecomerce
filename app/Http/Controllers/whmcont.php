<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\subscriber;
use App\Models\ministrie;
use App\Models\sermon;
use App\Models\event;
use App\Models\charitie;
use App\Models\evcategorie;
use App\Models\year;
use App\Models\month;
use App\Models\day;
use App\Models\week;
use App\Models\compaign;
use App\Models\upevent;
use App\Models\imggallerie;
class whmcont extends Controller
{
   
    function ckeckLogin(){
        if(Auth::guest()){
         return redirect()->route('login');
        }
        $data=user::all();
        return view('checkout',compact('data'));
       }  
}


