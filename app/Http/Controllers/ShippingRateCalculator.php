<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ZoneModel;
use App\BasepriceModel;
use App\VasChargeModel;
use App\HandlingChargesModel;

use App\PlaneModel;
use App\PincodeModel;
use App\User;

use RealRashid\SweetAlert\Facades\Alert;

class ShippingRateCalculator extends Controller
{
    public function scalculator(Request $request)
    {
           
       $plan_weight=10;//$plan_weight_CFT
       $which_plan=18;


  $spyderplan = PlaneModel::where('id','=',$which_plan)->where('status','=',1)->first();
          

       $is_return=$request->isReturn;
       $actual_weight=$request->weight;
       $measurement_in=$request->measurement_in; /*cm=0,INCH=1,*/
       
       $is_fod=$request->is_fod;
       $fod_declared=$request->fod_declared;
       $is_cod=$request->is_cod;
       $declared=$request->declared;
       $risk=$request->risk; /*ownwer=0,carrier=1,*/


       $dimensional_weight=($request->length*$request->breadth*$request->height);
       if ($dimensional_weight>0) {/*dimensional weight calculator*/

       	  if ($measurement_in==0){
       	  	$dimensional_weight=$dimensional_weight/27000*$plan_weight;
       	  }
       	  elseif($measurement_in==1){
             $dimensional_weight=$dimensional_weight/1728*$plan_weight;
       	  }
       }  
     $weight=$actual_weight>$dimensional_weight ? $actual_weight : $dimensional_weight;

/*-------------weight fro calculation---------------------*/
		     
		$air_price = array();
		$sur_price = array();

		$all_sur_charges = array();
		$all_air_charges = array();

		$pickup_serviceable=$this->is_pickup_serviceable($request->pickupcode)->toArray();
         $delivery_serviceable=$this->is_delivery_serviceable($request->deliverycode)->toArray();

  /*  $pickup_serviceable=PincodeModel::select('created_by')
        ->where('pincode','=',$request->pickupcode)
        ->where('is_pickup','=',1)
        ->groupBy('created_by')
        ->pluck('created_by');

        $delivery_serviceable=PincodeModel::select('created_by') 
        ->where('pincode','=',$request->deliverycode)
        ->where('is_delivery','=',1)
        ->groupBy('created_by')
        ->pluck('created_by'); 
*/


/*        $vendor_serviceable=PincodeModel::select('created_by')
        ->whereIn('pincode',[$request->pickupcode,$request->deliverycode])
        ->groupBy('created_by')
        ->pluck('created_by');*/




  if(empty($pickup_serviceable)){
       return "not pickup pincode serviceable";
  }
  if(empty($delivery_serviceable)){
       return "not delivery pincode serviceable";
  }

$vendor_serviceable=array_intersect($pickup_serviceable,$delivery_serviceable);

/* Zone fo pincode vendor wise  */	

		$pickup=PincodeModel::select('created_by','pincode','zone_fk_id')
		->where('pincode','=',$request->pickupcode)
		->pluck('zone_fk_id','created_by');

		$delivery=PincodeModel::select('created_by','pincode','zone_fk_id')
		->where('pincode','=',$request->deliverycode)
		->pluck('zone_fk_id','created_by');


/*check ODA  pincode */

		$isods_D_pin=PincodeModel::select('created_by','is_oda')
		->where('pincode','=',$request->deliverycode)
		->whereIn('created_by',$vendor_serviceable)
		->pluck('is_oda','created_by');

		$isods_P_pin=PincodeModel::select('created_by','is_oda')
		->where('pincode','=',$request->pickupcode)
		->whereIn('created_by',$vendor_serviceable)
		->pluck('is_oda','created_by');

/*risk on value carrier or ownwer */

	if ($risk==1) {
			  
					$risk_kg=VasChargeModel::whereIn('created_by',$vendor_serviceable)
					->pluck('carrier_risk_kg','created_by');
           
                   $spyderrisk_kg=$spyderplan->carrier_risk_kg;
                   $spyderrisk_min=$spyderplan->carrier_risk_min;

					$risk_min=VasChargeModel::whereIn('created_by',$vendor_serviceable)
					->pluck('carrier_risk_min','created_by');
			    
			}else{
				$risk_kg=VasChargeModel::whereIn('created_by',$vendor_serviceable)
				->pluck('owner_risk_kg','created_by');

				$risk_min=VasChargeModel::whereIn('created_by',$vendor_serviceable)
				->pluck('owner_risk_min','created_by');

				$spyderrisk_kg=$spyderplan->owner_risk_kg;
				$spyderrisk_min=$spyderplan->owner_risk_min;

			}
			       




/*print_r($owner_risk_kg);
echo "owner_risk_kg";
print_r($owner_risk_min);
echo "owner_risk_min";
print_r($carrier_risk_kg);
echo "carrier_risk_kg";
print_r($carrier_risk_min);
echo "carrier_risk_min";
*/


$nullhandling=HandlingChargesModel::whereIn('created_by',$vendor_serviceable)->where('min','=',0)
	->pluck('max','created_by');


		           
		$fuel_surcharges=VasChargeModel::whereIn('created_by',$vendor_serviceable)
			->pluck('fuel_surcharge','created_by');

		$docket_charge=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('docket_charge','created_by');

		$min_weight=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('min_weight','created_by');

		$oda_pkg=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('oda_pkg','created_by');   

		$oda_min=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('oda_min','created_by');

		$min_freight=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('min_freight','created_by');

		$all_cod=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('cod','created_by');


		$gst=VasChargeModel::whereIn('created_by',$vendor_serviceable)
		->pluck('gst','created_by');

	/*	dd($vendor_serviceable);*/

	/*spyderplan->*/
	/*	dd($spyderplan);*/
		   foreach ($vendor_serviceable as $key => $value){
		   		
		    	$vendor_base_charge=BasepriceModel::select('s_price','a_price')->where('zone_from','=',$pickup[$value])->where('zone_to','=',$delivery[$value])->where('created_by','=',$value)->first();
                 
     
            
                 /*--------------------------Check minimum weight---------------*/
                      $weight=$weight>$min_weight[$value] ? $weight : $min_weight[$value];
                 /*----------------------------------------------------------------*/

                 $sur_parce=$vendor_base_charge->s_price+$spyderplan->base_charge;
                 $air_parce=$vendor_base_charge->a_price+$spyderplan->base_charge;

                 $air_price[$value]=number_format($sur_parce*$weight,2);
                 $sur_price[$value]=number_format($air_parce*$weight,2);

			       $all_sur_charges[$value]['freight']=$sur_price[$value]=$sur_price[$value]>$min_freight[$value] ? $sur_price[$value]:$min_freight[$value];
			       $all_air_charges[$value]['freight']=$sur_price[$value]=$air_price[$value]>$min_freight[$value] ? $air_price[$value]:$min_freight[$value];
           
                   

                /*----------------Fuel-Surcharge-%------------------*/

              $total_fuel_surcharge=$fuel_surcharges[$value]*$spyderplan->fuel_surcharge;
              $total_fuel_surcharge= $total_fuel_surcharge>0 ? ($total_fuel_surcharge/100) : 0;
   


                   $total_fuel_surcharge=$fuel_surcharges[$value]+$total_fuel_surcharge;

                   $air_fuel_surcharge=@$air_price[$value]*@$total_fuel_surcharge;
                   $sur_fuel_surcharge=@$sur_price[$value]*@$total_fuel_surcharge;

           $all_air_charges[$value]['fuel_surcharge']=$air_fuel_surcharge=$air_fuel_surcharge>0 ? ($air_fuel_surcharge/100) : 0;
            $all_sur_charges[$value]['fuel_surcharge']= $sur_fuel_surcharge= $sur_fuel_surcharge>0 ? ($sur_fuel_surcharge/100) : 0;
                         

                 $air_price[$value]=number_format($air_price[$value]+$air_fuel_surcharge,2);
                 $sur_price[$value]=number_format($sur_price[$value]+$sur_fuel_surcharge,2);


                /*-----------------------------------------------------*/



       /*--------------- Docket Charges-----------------------------*/

       $all_sur_charges[$value]['docket_charges'] = $all_air_charges[$value]['docket_charges'] = $total_cn=$docket_charge[$value]+$spyderplan->docket_charge;
        
                      
            $air_price[$value]=$air_price[$value]+$total_cn;
            $sur_price[$value]=$sur_price[$value]+$total_cn;

        /*-----------------------------------------------------------*/



               /*---------------------Oda Charge ------------------------*/
                                 /*oda_min[$value]*/
                                 /*oda_pkg[$value]*/

				if($isods_D_pin[$value]!=1 or $isods_P_pin[$value]!=1){
				       $total_oda=$oda_pkg[$value]+$spyderplan->oda_pkg; 	
				       $total_oda_min=$oda_pkg[$value]+$spyderplan->oda_min; 	

                  $oda=$total_oda*$weight;

    			$all_sur_charges[$value]['docket_charges'] = $all_air_charges[$value]['docket_charges'] = $oda=$oda>$total_oda_min?$oda:$total_oda_min;  
                  $air_price[$value]=$air_price[$value]+$oda;
                  $sur_price[$value]=$sur_price[$value]+$oda;
				}else{

					$air_price[$value]=$air_price[$value]+0;
					$sur_price[$value]=$sur_price[$value]+0;

				 
				}

                /*-----------------------------------------------------------------*/


/*-------------------------------- Insurance  --------------------------------------*/
/*$risk_kg
$risk_min
$spyderrisk_kg
$spyderrisk_min

*/

/*print_r($spyderrisk_kg);
dd($spyderrisk_min);*/

		$totalrisk_kg=$spyderrisk_kg+$risk_kg[$value];
		$totalrisk_min=$spyderrisk_min+$risk_min[$value];

				$totalrisk_kg=@$totalrisk_kg*@$declared;

				$totalrisk_kg = $totalrisk_kg/100; 

		   $all_sur_charges[$value]['Insurance'] = $all_air_charges[$value]['Insurance'] = $Insurance=  $totalrisk_min>$totalrisk_kg ? $totalrisk_min: 0;

		      
		$air_price[$value]=number_format($air_price[$value]+$Insurance,2);
		$sur_price[$value]=number_format($sur_price[$value]+$Insurance,2);


/*----------------------------------------------------------------------*/


/*----------------------------------COD---------------------------------------------*/
  
  if($request->is_cod){
  	$totalcod=$spyderplan->cod+$all_cod[$value];
  	$final_cod=@$totalcod*@$declared;
 $all_sur_charges[$value]['cod'] = $all_air_charges[$value]['cod']=$final_cod = $final_cod/100;   

  	$air_price[$value]=number_format($air_price[$value]+$final_cod,2);
  	$sur_price[$value]=number_format($sur_price[$value]+$final_cod,2);
  }else{
              /* No Cod*/
               $all_sur_charges[$value]['cod'] = $all_air_charges[$value]['cod']=0;
  }
 


/*-------------------------------------------------------------------------------*/



    /*------------------------------GST ---------------------------------*/
      
       $all_air_charges[$value]['Insurance']=$agst=($air_price[$value]*$gst[$value])/100;
      $all_sur_charges[$value]['Insurance'] =$agst=($sur_price[$value]*$gst[$value])/100;



         $air_price[$value]=number_format($air_price[$value]+$agst,2);
         $sur_price[$value]=number_format($sur_price[$value]+$agst,2);

    /*-----------------------------------------------------------------*/
                  
		   }

		   $vendorname=User::select('company_name','id')->whereIn('id',$vendor_serviceable)->pluck('company_name','id');


		print_r($air_price);
		print_r($sur_price);

		print_r($all_air_charges);
		print_r($all_sur_charges);


   return view('welcome',compact('air_price','sur_price','vendorname'));
    }




 public function is_pickup_serviceable($pincode)
 {
   	$pickup_serviceable=PincodeModel::select('created_by') /*make function */
 	->where('pincode','=',$pincode)
 	->where('is_pickup','=',1)
 	->groupBy('created_by')
 	->pluck('created_by');

 	return $pickup_serviceable;
 
 }


 public function is_delivery_serviceable($pincode)
 {
   	
   	$delivery_serviceable=PincodeModel::select('created_by') /*make function*/
   	->where('pincode','=',$pincode)
   	->where('is_delivery','=',1)
   	->groupBy('created_by')
   	->pluck('created_by');
   	
 	return $delivery_serviceable;
 
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
