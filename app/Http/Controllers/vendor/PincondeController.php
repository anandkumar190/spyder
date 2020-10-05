<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\ZoneModel;
use App\PincodeModel;
use RealRashid\SweetAlert\Facades\Alert;


class PincondeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allzones=ZoneModel::where('status','=','1')->pluck('name','id');
        $pincode_list=PincodeModel::select('zones.name','pincodes.city','pincodes.is_delivery','pincodes.is_pickup','pincodes.is_serviceable','pincodes.is_cod','pincodes.is_prepaid','pincodes.status','pincodes.pincode','pincodes.id','pincodes.is_oda')->join('zones','pincodes.zone_fk_id','=','zones.id')->where('pincodes.created_by','=',Auth::user()->id)->get();

     return view('vendor/master/pincode',compact('pincode_list','allzones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones=ZoneModel::where('status','=','1')->pluck('name','id');
        return view('vendor/master/addpincode',compact('zones'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

          $request->validate([
                'zone' => 'required',
                'city' => 'required',
                'Pincode' => 'required|numeric' ,
                'serviceable' => 'required' ,
                'cod' => 'required' ,
                'is_oda' => 'required' ,
                'is_pickup' => 'required' ,
                'is_delivery' => 'required' ,
                'prepaid' => 'required' ,
                'status' => 'required' ,
            ]);




               $obj = new PincodeModel();
               $obj->zone_fk_id = $request->zone;
               $obj->city = $request->city;
               $obj->pincode = $request->Pincode;
               $obj->is_serviceable  = $request->serviceable;
               $obj->is_cod  = $request->cod;
               $obj->is_prepaid  = $request->prepaid;
               $obj->is_oda  = $request->is_oda;           
               $obj->is_pickup  = $request->is_pickup;
               $obj->is_delivery  = $request->is_delivery;
               $obj->status  = $request->status;
               $obj->created_by = Auth::user()->id;
               
               if($obj->save()){
                 Alert::success(' pincode Saved', 'Successfully');
                 return redirect('pin-code');
               }
               else{
                 Alert::error('Not Saved', 'Something wrong');
                 return redirect('pin-code');
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
       $zones=ZoneModel::where('status','=','1')->pluck('name','id'); 

         $data=PincodeModel::where('created_by','=',Auth::user()->id)->where('id','=',$id)->first();
      
        return view('vendor/master/edit_pincode',compact('zones','data'));

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
                  'zone' => 'required',
                  'city' => 'required',
                  'Pincode' => 'required|numeric' ,
                  'serviceable' => 'required' ,
                  'cod' => 'required' ,
                  'is_oda' => 'required' ,
                  'is_pickup' => 'required' ,
                  'is_delivery' => 'required' ,
                  'prepaid' => 'required' ,
                  'status' => 'required' ,
          ]);



             $obj = PincodeModel::find($id);
             $obj->zone_fk_id = $request->zone;
             $obj->city = $request->city;
             $obj->pincode = $request->Pincode;
             $obj->is_serviceable  = $request->serviceable;
             $obj->is_cod  = $request->cod;
             $obj->is_prepaid  = $request->prepaid;
             $obj->is_oda  = $request->is_oda;
             $obj->is_pickup  = $request->is_pickup;
             $obj->is_delivery  = $request->is_delivery;
             $obj->status  = $request->status;
                          
             if($obj->save()){
               Alert::success(' pincode Updated', 'Successfully');
               return redirect('pin-code');
             }
             else{
               Alert::error('Not Updated', 'Something wrong');
               return redirect('pin-code');
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
         $result=PincodeModel::find($id)->delete();
       if($result){
          Alert::success(' Pincode Deleted', 'Successfully');
         return redirect('pin-code');  
       }else{
         Alert::error(' Pincode Not Deleted', 'Something wrong');
          return redirect('pin-code');  
       }
    }




    
    public function Importpincode(Request $request)
     {
      // File Details 
/*       $filename = $file->getClientOriginalName();
       $extension = $file->getClientOriginalExtension();
       $tempPath = $file->getRealPath();
       $fileSize = $file->getSize();
       $mimeType = $file->getMimeType();
*/
    $notsave = array();
   $decision = array('yes' =>1,'no'=>0,);

      $request->validate([ 
        'zone'=>'required',
        'filename'=>'required|mimes:csv,txt',
       ]);


       $zoneid=$request->zone;    
       $authid=Auth::user()->id;    
      $allpin=file($request->filename->getRealPath());
      $allpin=array_slice($allpin,1);      
      foreach ($allpin as $key => $value) {

             $row=explode(",", $value);
        /*        print_r($row);*/

                $row[2]= $decision[strtolower($row[2])];
                $row[3]= $decision[strtolower($row[3])];
                $row[4]= $decision[strtolower($row[4])];
                $row[5]= $decision[strtolower($row[5])];
                $row[6]= $decision[strtolower($row[6])];
                $row[7]= $decision[strtolower($row[7])];



             $obj = new PincodeModel();
             $obj->zone_fk_id = $zoneid;
             $obj->city = $row[0];
             $obj->pincode = $row[1];
             $obj->is_serviceable  = $row[2];
             $obj->is_pickup  = $row[3];
             $obj->is_delivery  = $row[4];
             $obj->is_cod  = $row[5];
             $obj->is_prepaid  = $row[6];
             $obj->is_oda  = $row[7];           
             $obj->status  = 1;
             $obj->created_by = $authid;

              if($obj->save()){
              $success_var=1;
              }else{
                
                $notsave[]=$row[1];
                $success_var=0; 
              }
      
      }


      if ($success_var) {
        Alert::success('all pincodes imported', 'Successfully');
        return redirect('pin-code'); 
      }else{
        Alert::error(' Pincodes Not imported', $notsave);
         return redirect('pin-code');  
            
      }
         
  } 
    




}
