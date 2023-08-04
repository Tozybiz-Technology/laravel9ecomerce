<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function Users(){
        $users=User::all();
        return view('admin.users', compact('users'));

    }

    public function viewUser($id){
        $users=User::find($id);
        return view('admin.view-users', compact('users'));

    }
}
