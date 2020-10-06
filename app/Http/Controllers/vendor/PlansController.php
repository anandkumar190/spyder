<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PlaneModel;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=PlaneModel::get();   
/*        dd($data);*/


        return view('vendor/master/plans',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('vendor/master/addplans');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       $obj = new PlaneModel;
       $obj->name=$request->plan_name; 
       $obj->base_charge=$request->base_charge;
       $obj->fod=$request->Fod;
       $obj->cod=$request->cod; 
       $obj->fuel_surcharge=$request->fuel_surcharge; 
       $obj->docket_charge=$request->docketcharges; 
       $obj->handling_charges=$request->handling_charges; 
        $obj->oda_min=$request->min_oda; 
       $obj->min_weight=$request->min_kg; 
       $obj->min_freight=$request->min_freight; 
       $obj->payment_term=$request->payment_terms; 
       $obj->oda_pkg=$request->per_kg_oda; 
       $obj->gst=$request->gst; 
       $obj->owner_risk_kg = $request->owner_risk_kg;
       $obj->owner_risk_min = $request->owner_risk_min;
       $obj->carrier_risk_kg = $request->carrier_risk_kg;
       $obj->carrier_risk_min = $request->carrier_risk_min;
       $obj->opu_kg = $request->opu_kg;
       $obj->opu_min = $request->opu_min;
       $obj->ossh_kg = $request->ossh_kg;
       $obj->ossh_min = $request->ossh_min;
       $obj->ossh_max = $request->ossh_max;
       $obj->daspat_kg = $request->daspat_kg;
       $obj->daspat_min = $request->daspat_min;
       $obj->sezd_kg = $request->sezd_kg;
       $obj->sezd_min = $request->sezd_min;
       $obj->csd_kg = $request->csd_kg;
       $obj->csd_min = $request->csd_min;
       $obj->gcd_kg = $request->gcd_kg;
       $obj->gcd_min = $request->gcd_min;
       $obj->hfd = $request->hfd;
       $obj->green_tax_kg = $request->green_tax_kg;
       $obj->green_tax_min = $request->green_tax_min;
       $obj->demurrage = $request->demurrage;
       $obj->m_charges = $request->m_charges;

       $obj->status=$request->Status; 


     if($obj->save()){

      Alert::success(' Plan Saved', 'Successfully');  
       return  redirect('plan');
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
      
        $data=PlaneModel::where('id','=',$id)->first();
       return view('vendor/master/edit_plan',compact('data'));
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
         $obj =  PlaneModel::find($id);
         $obj->name=$request->plan_name; 
         $obj->base_charge=$request->base_charge;
         $obj->fod=$request->Fod;
         $obj->cod=$request->cod; 
         $obj->fuel_surcharge=$request->fuel_surcharge; 
         $obj->docket_charge=$request->docketcharges; 
         $obj->handling_charges=$request->handling_charges; 
         $obj->oda_min=$request->min_oda; 
         $obj->min_weight=$request->min_kg; 
         $obj->min_freight=$request->min_freight; 
         $obj->payment_term=$request->payment_terms; 
         $obj->oda_pkg=$request->per_kg_oda; 
         $obj->gst=$request->gst; 
         $obj->owner_risk_kg = $request->owner_risk_kg;
         $obj->owner_risk_min = $request->owner_risk_min;
         $obj->carrier_risk_kg = $request->carrier_risk_kg;
         $obj->carrier_risk_min = $request->carrier_risk_min;
         $obj->opu_kg = $request->opu_kg;
         $obj->opu_min = $request->opu_min;
         $obj->ossh_kg = $request->ossh_kg;
         $obj->ossh_min = $request->ossh_min;
         $obj->ossh_max = $request->ossh_max;
         $obj->daspat_kg = $request->daspat_kg;
         $obj->daspat_min = $request->daspat_min;
         $obj->sezd_kg = $request->sezd_kg;
         $obj->sezd_min = $request->sezd_min;
         $obj->csd_kg = $request->csd_kg;
         $obj->csd_min = $request->csd_min;
         $obj->gcd_kg = $request->gcd_kg;
         $obj->gcd_min = $request->gcd_min;
         $obj->hfd = $request->hfd;
         $obj->green_tax_kg = $request->green_tax_kg;
         $obj->green_tax_min = $request->green_tax_min;
         $obj->demurrage = $request->demurrage;
         $obj->m_charges = $request->m_charges;

         $obj->status=$request->Status; 


       if($obj->save()){

        Alert::success(' Plan Updated', 'Successfully');  
         return  redirect('plan');
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
         $result=PlaneModel::where('id','=',$id)->delete();
       if($result){
          Alert::success(' Plne Deleted', 'Successfully');

         return redirect('plan');  
       }else{
       
         Alert::error(' Plan Not Deleted', 'Something wrong');
          return redirect('plan');  
       }
    }
}
