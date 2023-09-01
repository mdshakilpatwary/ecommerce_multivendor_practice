<?php

namespace App\Http\Controllers\Backend\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VendorController extends Controller
{
    public function index(){
        return view('backend.vendor.vendorDashboard');
    }


    // Vendor logout controller part
    public function vendorlogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
