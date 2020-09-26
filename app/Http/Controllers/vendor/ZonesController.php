<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    
   public function zonslist(Request $request)
   {
    Alert::success('Success Title', 'Success Message');

   	  return view('vendor/master/Zone');
   }


  public function addZons(Request $request)
  {
  	  return view('vendor/master/addzone');
  }


  public function editZons(Request $request)
  {
  	# code...
  }


  public function deleteZons(Request $request)
  {
  	# code...
  }

  public function activate(Request $request)
  {
  	# code...
  }
  public function deactivate(Request $request)
  {
  	# code...
  }





}
