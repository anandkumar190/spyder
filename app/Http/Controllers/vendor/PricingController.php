<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ZoneModel;
use App\BasepriceModel;
use App\VasChargeModel;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;


class PricingController extends Controller
{
   public function pricelist()
   {
      $created_by=Auth::user()->id;
      $zones=ZoneModel::where('created_by','=',$created_by)->where('status','=','1')->pluck('name','id');

   $basecharge=BasepriceModel::where('created_by','=',$created_by)->get();

   $vascharge=VasChargeModel::where('created_by','=',$created_by)->first();

 $surface_charege=array();
 $air_charege=array();

  foreach ($basecharge as $value) {
       $surface_charege[$value->zone_from][$value->zone_to]=$value->s_price;
       $air_charege[$value->zone_from][$value->zone_to]=$value->a_price;
   } 
   
   	   return view('vendor/master/pricing',compact('zones','surface_charege','air_charege','vascharge'));
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
             'gst' => $request->gst,
             'min_freight' => $request->min_freight,
             ]

        );


       Alert::success('Vas Charges Upddted', 'Successfully');         
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
