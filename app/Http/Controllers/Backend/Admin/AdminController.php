<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    public function index(){
        $userinfo =User::find(Auth::user()->id);
      
        return view('backend.admin.adminDashboard', compact('userinfo'));
    }
    public function adminProfile(){
        $userinfo =User::find(Auth::user()->id);
      
        return view('backend.admin.adminProfile', compact('userinfo'));
    }
    public function adminProfileUpdate(Request $rqst , $id){
        $userinfo =User::find($id);
        $userinfo->name = $rqst->name;
        $userinfo->phone = $rqst->phone;
        $userinfo->address = $rqst->address;
        $userinfo->update();

      
        return back();
    }


    //Admin logout controller part
    public function adminlogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
