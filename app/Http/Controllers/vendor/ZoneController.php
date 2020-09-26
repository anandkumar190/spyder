<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\ZoneModel;
use RealRashid\SweetAlert\Facades\Alert;


class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $zones=ZoneModel::where('created_by','=',Auth::user()->id)->get();
        return view('vendor/master/Zone',compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor/master/addzone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
   $zone_count=ZoneModel::where('created_by','=',Auth::user()->id)->get()->count();

       $request->validate([
           'name' => 'required' ,
           'location' => 'required' ,
           'alias' => 'required' ,
       ]);

   if($zone_count < 25){
          $obj = new ZoneModel();
          $obj->name = $request->name;
          $obj->alias = $request->alias;
          $obj->location = $request->location;
          $obj->status = $request->status;
          $obj->created_by = Auth::user()->id;
          $obj->count = $zone_count++;

          if($obj->save()){
          Alert::success(' Zone Saved', 'Successfully');         
            return redirect('zone');
          }
          else{
            Alert::error('Not Saved', 'Something wrong');
            return redirect('zone');
          }
      }else{
         Alert::warning('Not Saved', 'zone number exceed');
               return redirect('zone');
      }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    $data=ZoneModel::where('id','=',$id)->get()->first();
      return view('vendor/master/edit_zone',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'name' => 'required' ,
           'location' => 'required' ,
           'alias' => 'required' ,
       ]);


        $obj = ZoneModel::find($id);
        $obj->name = $request->name;
        $obj->alias = $request->alias;
        $obj->location = $request->location;
        $obj->status = $request->status;

        if($obj->save()){
        Alert::success(' Zone Updated', 'Successfully');          
           return redirect('zone');
        }else{
            Alert::error('Zone not Updated', 'Something wrong');
           return redirect('zone');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result=ZoneModel::find($id)->delete();
      if($result){
         Alert::success(' Zone Deleted', 'Successfully');
        return redirect('zone');  
      }else{
        Alert::error(' Zone Not Deleted', 'Something wrong');
         return redirect('zone');  
      }
        

    }
      
  }

