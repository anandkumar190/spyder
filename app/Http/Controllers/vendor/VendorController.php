<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class VendorController extends Controller
{
    public function index()
    {
    	return view('vorder/black');
    }

    public function black()
    {
      return view('vendor\signup');
    }




    public function vendor_profile()
    {
    	$data = Auth::user();
          return view('vendor\vendor_profile',compact('data'));
    }

   


}
