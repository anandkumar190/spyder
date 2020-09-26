<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnduserController extends Controller
{
      

      public function store(Request $request)
      { 	
      	dd($request->toArray());
      }


}
