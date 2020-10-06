
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Edit Plan</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="{{url('home')}}">Dashboard</a></li>
						
							<li class="active"><span>Edit Plan</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->


				@php

				if($data->status==1){
					$active="selected";
					$inactive="";
				}else{
					$active="";
					$inactive="selected";
				}

				$Credit='';
				$Prepaid='';
				$FOD='';
				switch ($data->payment_term) {
				  case 'Credit':
				    $Credit="selected";
				    break;
				  case 'Prepaid':
				    $Prepaid="selected";				 
				    break;
				  case 'FOD':
				    $FOD="selected";
				    break;

				  default:
				    $Credit='';
				    $Prepaid='';
				    $FOD='';
				}

				@endphp





				<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Charges</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">

	<div class="panel-body">
		<div class="form-wrap">
			<form action="{{url('plan/'.$data->id)}}" method="post">
				@csrf


				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Plan Name </label>
					<input type="text"  name="plan_name" value="{{$data->name}}" class="form-control" id="plan_name"   placeholder="Enter Plane Name" >
				</div>



				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Base Charge (On Per Kg) </label>
					<input type="text"  name="base_charge" value="{{$data->base_charge}}" class="form-control" id="base_charge"    >
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Handling charges</label>
					<input type="text" name="handling_charges" value="{{$data->handling_charges}}"  class="form-control"   id="handling_charges">
				</div>



				<div class="form-group  col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Fuel Surcharge </label>
					<input type="text"  name="fulesurcharge" class="form-control" id="fulesurcharge"   placeholder="0" value="{{@$data->fuel_surcharge}}" >
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Docket Charges	</label>
					<input type="text" name="docketcharges" class="form-control"value="{{@$data->docket_charge}}"  placeholder="0" id="zalias">
				</div>


				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Owner Risk(Per kg)</label>
					<input type="text" name="owner_risk_kg" class="form-control" value="{{@$data->owner_risk_kg}}"placeholder="0">
				</div>
				
				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Owner Risk (Min) </label>
					<input type="text" name="owner_risk_min" class="form-control" value="{{@$data->owner_risk_min}}"placeholder="0">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Carrier Risk (Per kg) </label>
					<input type="text" name="carrier_risk_kg" class="form-control" value="{{@$data->carrier_risk_kg}}"placeholder="0">
				</div>
				
				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Carrier Risk (min) </label>
					<input type="text" name="carrier_risk_min" class="form-control" value="{{@$data->carrier_risk_min}}"placeholder="0">
				</div>
				
				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Minimum charge in kg </label>
					<input type="text" name="min_kg" class="form-control"placeholder="0" value="{{@$data->min_weight}}">
				</div>



				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Minumum ODA  </label>
					<input type="text" name="min_oda" class="form-control" placeholder="0" value="{{@$data->oda_min}}">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">ODA (per kg) </label>
					<input type="text" name="per_kg_oda" class="form-control" placeholder="0" value="{{@$data->oda_pkg}}">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">FOD </label>
					<input type="text" name="fod" class="form-control" placeholder="0" value="{{@$data->fod}}">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left"> COD </label>
					<input type="text" name="cod" class="form-control" placeholder="0" value="{{@$data->cod}}">
				</div>


				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">MINIMUM FREIGHT</label>
					<input type="text" name="min_freight" class="form-control" placeholder="0" value="{{@$data->min_freight}}">
				</div>
<!--  new  -->

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Outstation pick-up (per kg)</label>
	<input type="text" name="opu_kg" class="form-control" placeholder="0" value="{{@$data->opu_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Outstation pick-up (min)</label>
	<input type="text" name="opu_min" class="form-control" placeholder="0" value="{{@$data->opu_min}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (per kg) </label>
	<input type="text" name="ossh_kg" class="form-control" placeholder="0" value="{{@$data->ossh_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (Min) </label>
	<input type="text" name="ossh_min" class="form-control" placeholder="0" value="{{@$data->ossh_min}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (Max) </label>
	<input type="text" name="ossh_max" class="form-control" placeholder="0" value="{{@$data->ossh_max}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Delivery as per appointed time (Per kg) </label>
	<input type="text" name="daspat_kg" class="form-control" placeholder="0" value="{{@$data->daspat_kg}}">
</div>
<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Delivery as per appointed time(Min)</label>
	<input type="text" name="daspat_min" class="form-control" placeholder="0" value="{{@$data->daspat_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Special Eco Zone Delivery (Per kg) </label>
	<input type="text" name="sezd_kg" class="form-control" placeholder="0" value="{{@$data->sezd_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Special Eco Zone Delivery (Min)</label>
	<input type="text" name="sezd_min" class="form-control" placeholder="0" value="{{@$data->sezd_min}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Canteen (CSD) Delivery (Per kg) </label>
	<input type="text" name="csd_kg" class="form-control" placeholder="0" value="{{@$data->csd_kg}}">
</div>
<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Canteen (CSD) Delivery (Min)</label>
	<input type="text" name="csd_min" class="form-control" placeholder="0" value="{{@$data->csd_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Govt Compound Delivery (Per kg )</label>
	<input type="text" name="gcd_kg" class="form-control" placeholder="0" value="{{@$data->gcd_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Govt Compound Delivery(Min)</label>
	<input type="text" name="gcd_min" class="form-control" placeholder="0" value="{{@$data->gcd_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Higher Floor Delivery</label>
	<input type="text" name="hfd" class="form-control" placeholder="0" value="{{@$data->hfd}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Green Tax (per kg)</label>
	<input type="text" name="green_tax_kg" class="form-control" placeholder="0" value="{{@$data->green_tax_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Green Tax (Min) </label>
	<input type="text" name="green_tax_min" class="form-control" placeholder="0" value="{{@$data->green_tax_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Demurrage</label>
	<input type="text" name="demurrage" class="form-control" placeholder="0" value="{{@$data->demurrage}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Payment Terms</label>
	<select name="payment_terms" class="form-control" required="">
						<option value="Credit" selected="">Credit</option>
						<option value="Prepaid">Prepaid</option>
						<option value="FOD">FOD</option>
						</select>
</div>



<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6">
	<label class="control-label mb-10 text-left">Miscellaneous Charges</label>
	<input type="text" name="m_charges" class="form-control" placeholder="0" value="{{@$data->m_charges}}">

</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">GST (IN %) </label>
	<input type="text" name="gst" class="form-control"placeholder="0"  value="{{@$data->gst}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left"> Status </label>
	<select name="Status"  class="form-control "required  >
	<option  value="1" {{$active}} >Active</option>
	<option value="0"   {{$inactive}} >Deactive</option>
	</select>
</div>



<!-- end  -->


<button type="submit" class="btn btn-success btn-anim disabled" style="margin:30px" ><i class="icon-rocket"></i><span class="btn-text">Update</span></button>
		

			</form>
		</div>
	</div>

			</div>
		</div>
	</div>
</div>

<!-- /Row -->


	   @endsection     
