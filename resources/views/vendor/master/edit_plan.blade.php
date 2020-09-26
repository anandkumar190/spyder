
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
  	     	<input type="hidden" name="_method" value="put"/>
				@csrf


				<div class="form-group">
					<label class="control-label mb-10 text-left">Plan Name </label>
					<input type="text"  name="plan_name" value="{{$data->name}}" class="form-control" id="plan_name"   placeholder="Enter Plane Name" >
				</div>



				<div class="form-group">
					<label class="control-label mb-10 text-left">Base Charge (On Per Kg) </label>
					<input type="text"  name="base_charge" value="{{$data->base_charge}}" class="form-control" id="base_charge"    >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Docket Charges	</label>
					<input type="text" name="docketcharges" value="{{$data->docket_charge}}" class="form-control"   id="docketcharges">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Fuel Surcharge	</label>
					<input type="text" name="fuel_surcharge" value="{{$data->fuel_surcharge}}" class="form-control"   id="fuel_surcharge">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Handling charges</label>
					<input type="text" name="handling_charges" value="{{$data->handling_charges}}"  class="form-control"   id="handling_charges">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Invoice value </label>
					<input type="text" name="rikk_on_val" value="{{$data->risk_on_val}}" class="form-control"  >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Minimum charge in kgs </label>
					<input type="text" name="min_kg" value="{{$data->min_weight}}" class="form-control"   >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">COD</label>
					<input type="text" name="cod" value="{{$data->cod}}" class="form-control" >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">FOD</label>
					<input type="text" name="Fod" value="{{$data->fod}}" class="form-control" >
				</div>


				<div class="form-group">
					<label class="control-label mb-10 text-left">Minumum ODA  </label>
					<input type="text" name="min_oda" value="{{$data->oda_min}}"  class="form-control" >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">ODA (per kg) </label>
					<input type="text" name="per_kg_oda" value="{{$data->oda_pkg}}"  class="form-control" >
				</div>


				<div class="form-group">
					<label class="control-label mb-10 text-left">MINIMUM FREIGHT</label>
					<input type="text" name="min_freight" value="{{$data->min_freight}}" class="form-control" >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Payment Terms</label>
		

					<select name="payment_terms" class="form-control" required  >
					<option  value="Credit" {{$Credit}} >Credit</option>
					<option  value="Prepaid" {{$Prepaid}} >Prepaid</option>
					<option value="FOD"  {{$FOD}} >FOD</option>
					</select>
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">GST (IN %) </label>
					<input type="text" name="gst" value="{{$data->gst}}"  class="form-control" >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left"> Status </label>
					<select name="Status"  class="form-control "required  >
					<option  value="1" {{$active}} >Active</option>
					<option value="0"   {{$inactive}} >Deactive</option>
					</select>
				</div>

				<button type="submit" class="btn btn-success btn-anim disabled"><i class="icon-rocket"></i><span class="btn-text">update</span></button>

			</form>
		</div>
	</div>

			</div>
		</div>
	</div>
</div>

<!-- /Row -->

	   @endsection     
