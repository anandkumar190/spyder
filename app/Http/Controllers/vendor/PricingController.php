<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ZoneModel;
use App\BasepriceModel;
use App\VasChargeModel;
use App\HandlingChargesModel;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;


class PricingController extends Controller
{
   public function pricelist()
   {
      $created_by=Auth::user()->id;
      $zones=ZoneModel::where('status','=','1')->pluck('name','id');

   $HandlingCharges=HandlingChargesModel::where('created_by','=',$created_by)->get();
 
/* dd($HandlingCharges);
*/
   $basecharge=BasepriceModel::where('created_by','=',$created_by)->get();

   $vascharge=VasChargeModel::where('created_by','=',$created_by)->first();

 $surface_charege=array();
 $air_charege=array();


 
 

  foreach ($basecharge as $value) {
       $surface_charege[$value->zone_from][$value->zone_to]=$value->s_price;
       $air_charege[$value->zone_from][$value->zone_to]=$value->a_price;
   } 
   
   	   return view('vendor/master/pricing',compact('zones','surface_charege','air_charege','vascharge','HandlingCharges'));
   }


   public function surfaceprice(Request $request)
   {
   	 
        $s_price=$request->sprice;
        $created_by=Auth::user()->id;
/*BasepriceModel*/
   foreach ($s_price as $from_zone => $val) {
              foreach ($val as $to_zone => $value) {
                 
                 BasepriceModel::updateOrInsert(

                      ['zone_from' => $from_zone,
                       'zone_to' => $to_zone,
                       'created_by' => $created_by],

                      ['s_price' => $value]

                 );
              }
           }

      
           Alert::success(' Surface Price Upddted', 'Successfully');         
             return redirect('pricing');
   }


   


   public function airprice(Request $request)
   {
   	        $s_price=$request->aprice;
              $created_by=Auth::user()->id;

      /*BasepriceModel*/
         foreach ($s_price as $from_zone => $val) {
                    foreach ($val as $to_zone => $value) {
                       
                      BasepriceModel::updateOrInsert(

                            ['zone_from' => $from_zone,
                             'zone_to' => $to_zone,
                             'created_by' => $created_by],

                            ['a_price' => $value]

                       );
                    }
                 }

                 Alert::success(' Air Price Upddted', 'Successfully');         
                   return redirect('pricing');
                 }



   public function vascharges(Request $request)
   {
     $created_by=Auth::user()->id;

       VasChargeModel::updateOrInsert(

             ['created_by' => $created_by],

             ['fuel_surcharge' => $request->fulesurcharge,
             'docket_charge' => $request->docketcharges,
             'risk_on_val' => $request->rikk_on_val,
             'oda_min' => $request->min_oda,
             'min_weight' => $request->min_kg,
             'payment_term' => $request->payment_terms,
             'oda_pkg' => $request->per_kg_oda,
             'min_freight' => $request->min_freight,
             'fod' => $request->fod,
             'cod' => $request->cod,
             'gst' => $request->gst,
             'owner_risk_kg' => $request->owner_risk_kg,
             'owner_risk_min' => $request->owner_risk_min,
             'carrier_risk_kg' => $request->carrier_risk_kg,
             'carrier_risk_min' => $request->carrier_risk_min,
             'opu_kg' => $request->opu_kg,
             'opu_min' => $request->opu_min,
             'ossh_kg' => $request->ossh_kg,
             'ossh_min' => $request->ossh_min,
             'ossh_max' => $request->ossh_max,
             'daspat_kg' => $request->daspat_kg,
             'daspat_min' => $request->daspat_min,
             'sezd_kg' => $request->sezd_kg,
             'sezd_min' => $request->sezd_min,
             'csd_kg' => $request->csd_kg,
             'csd_min' => $request->csd_min,
             'gcd_kg' => $request->gcd_kg,
             'gcd_min' => $request->gcd_min,
             'hfd' => $request->hfd,
             'green_tax_kg' => $request->green_tax_kg,
             'green_tax_min' => $request->green_tax_min,
             'demurrage' => $request->demurrage,
             'm_charges' => $request->m_charges,
             ]

        );




       Alert::success('Vas Charges Updated', 'Successfully');         
         return redirect('pricing');
       }
   



  public function handlingcharge(Request $request)
  {
   
    $created_by=Auth::user()->id;

     $result=HandlingChargesModel::where('created_by','=',$created_by)->delete();
    


             foreach ($request->chargekg as $key => $value) {
             
                 $obj=new HandlingChargesModel;
                 $obj->min=$request->minwt[$key];
                 $obj->max=$request->maxwt[$key];
                 $obj->price=$value;
                 $obj->created_by=$created_by;
                 $obj->save();
             }

             Alert::success('Handling charges Updated', 'Successfully');         
               return redirect('pricing');
        

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
