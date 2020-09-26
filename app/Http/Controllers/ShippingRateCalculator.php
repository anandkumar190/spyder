<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ZoneModel;
use App\BasepriceModel;
use App\VasChargeModel;
use App\PincodeModel;
use App\User;

use RealRashid\SweetAlert\Facades\Alert;

class ShippingRateCalculator extends Controller
{
    public function scalculator(Request $request)
    {
          /* dd($request->toArray());*/
          
       $is_return=$request->isReturn;
       $actual_weight=$request->weight;

       $dimensional_weight=($request->length*$request->breadth*$request->height);

       if ($dimensional_weight>0) {
       	$dimensional_weight=$dimensional_weight/1728;
       }
       
     $weight=$actual_weight>$dimensional_weight ? $actual_weight : $dimensional_weight;

/*-------------weight fro calculation---------------------*/
		     
		$air_price = array();
		$sur_price = array();

        $vendor_serviceable=PincodeModel::select('created_by')
        ->whereIn('pincode',[$request->pickupcode,$request->deliverycode])
        ->groupBy('created_by')
        ->pluck('created_by');


		$pickup=PincodeModel::select('created_by','pincode','zone_fk_id')
		->where('pincode','=',$request->pickupcode)
		->pluck('zone_fk_id','created_by');

		$delivery=PincodeModel::select('created_by','pincode','zone_fk_id')
		->where('pincode','=',$request->deliverycode)
		->pluck('zone_fk_id','created_by');

		$isods_D_pin=PincodeModel::select('created_by','is_oda')
		->where('pincode','=',$request->deliverycode)
		->whereIn('created_by',$vendor_serviceable)
		->pluck('is_oda','created_by');

		           
		$fuel_surcharge=VasChargeModel::whereIn('created_by',$vendor_serviceable)
			->pluck('fuel_surcharge','created_by');

		$docket_charge=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('docket_charge','created_by');

		$min_weight=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('min_weight','created_by');

		$gst=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('gst','created_by');

		$oda_pkg=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('oda_pkg','created_by');   

		$risk_on_val=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('risk_on_val','created_by');

		$oda_min=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('oda_min','created_by');

		$min_freight=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('min_freight','created_by');



		   foreach ($vendor_serviceable as $key => $value){
		   		
		    	$vendor_base_charge=BasepriceModel::select('s_price','a_price')->where('zone_from','=',$pickup[$value])->where('zone_to','=',$delivery[$value])->where('created_by','=',$value)->first();
                 
     
            
                 /*--------------------------Check minimum weight---------------*/
                      $weight=$weight>$min_weight[$value] ? $weight : $min_weight[$value];
                 /*----------------------------------------------------------------*/

                 $air_price[$value]=$vendor_base_charge->s_price*$weight;
                 $sur_price[$value]=$vendor_base_charge->a_price*$weight;

                
                /*----------------Fuel-Surcharge-%------------------*/
                   $fuel_surcharge=@$air_price[$value]*@$fuel_surcharge[$value];

                    $fuel_surcharge= $fuel_surcharge>0 ? ($fuel_surcharge/100) : 0;

                 $air_price[$value]=$air_price[$value]+$fuel_surcharge;
                 $sur_price[$value]=$sur_price[$value]+$fuel_surcharge;


                /*-----------------------------------------------------*/



                /*--------------- Docket Charges-----------------------------*/
                      
                      $air_price[$value]=$air_price[$value]+$docket_charge[$value];
                      $sur_price[$value]=$sur_price[$value]+$docket_charge[$value];

                /*-----------------------------------------------------------*/


               /*---------------------Oda Charge ------------------------*/
                                 /*oda_min[$value]*/
                                 /*oda_pkg[$value]*/

				if($isods_D_pin[$value]==0){
					$air_price[$value]=$air_price[$value]+0;
					$sur_price[$value]=$sur_price[$value]+0;
				}else{
				  $oda=$oda_pkg[$value]*$weight;

				  $oda=$oda>$oda_min[$value]?$oda:$oda_min[$value];  

				  $air_price[$value]=$air_price[$value]+$oda;
				  $sur_price[$value]=$sur_price[$value]+$oda;

				 
				}

                /*-----------------------------------------------------------------*/




                /*------------------------------GST ---------------------------------*/
                  
                  $agst=($air_price[$value]*$gst[$value])/100;
                  $agst=($sur_price[$value]*$gst[$value])/100;



			         $air_price[$value]=$air_price[$value]+$agst;
			         $sur_price[$value]=$sur_price[$value]+$agst;

                /*-----------------------------------------------------------------*/
                  
		   }

		   $vendorname=User::select('company_name','id')->whereIn('id',$vendor_serviceable)->pluck('company_name','id');



   return view('welcome',compact('air_price','sur_price','vendorname'));
    }





		public function dash_board()
		{
		   return view('vendor\dashboard');
		}

		public function surface_price()
		{
		   return view('fronthand\price_list');
		}
}
