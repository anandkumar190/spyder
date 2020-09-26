<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class VendoerChangesController extends Controller
{
     public function allvendor()
     {
     	 $vendorlist = User::where('user_type','=','2')->get();

            	 return view('vendor/master/allvendor',compact('vendorlist'));
     
   


     }
}
