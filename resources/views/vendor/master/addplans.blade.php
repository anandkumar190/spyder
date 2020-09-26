
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add Plan</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="{{url('home')}}">Dashboard</a></li>
						
							<li class="active"><span>Add Plan</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->


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
			<form action="{{url('plan')}}" method="post">

				@csrf


				<div class="form-group">
					<label class="control-label mb-10 text-left">Plan Name </label>
					<input type="text"  name="plan_name" class="form-control" id="plan_name"   placeholder="Enter Plane Name" >
				</div>



				<div class="form-group">
					<label class="control-label mb-10 text-left">Base Charge (On Per Kg) </label>
					<input type="text"  name="base_charge" class="form-control" id="base_charge"   placeholder="0" >
				</div>


				<div class="form-group">
					<label class="control-label mb-10 text-left">Docket Charges	</label>
					<input type="text" name="docketcharges" class="form-control"  placeholder="0" id="docketcharges">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Fuel Surcharge	</label>
					<input type="text" name="fuel_surcharge" class="form-control"  placeholder="0" id="fuel_surcharge">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Handling charges	</label>
					<input type="text" name="handling_charges" class="form-control"  placeholder="0" id="handling_charges">
				</div>


				<div class="form-group">
					<label class="control-label mb-10 text-left">Invoice value </label>
					<input type="text" name="rikk_on_val" class="form-control"  placeholder="0">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Minimum charge in kgs </label>
					<input type="text" name="min_kg" class="form-control"placeholder="0"   >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">COD  </label>
					<input type="text" name="cod" class="form-control" placeholder="0">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">FOD  </label>
					<input type="text" name="Fod" class="form-control" placeholder="0">
				</div>


				<div class="form-group">
					<label class="control-label mb-10 text-left">Minumum ODA  </label>
					<input type="text" name="min_oda" class="form-control" placeholder="0">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">ODA (per kg) </label>
					<input type="text" name="per_kg_oda" class="form-control" placeholder="0">
				</div>


				<div class="form-group">
					<label class="control-label mb-10 text-left">MINIMUM FREIGHT</label>
					<input type="text" name="min_freight" class="form-control" placeholder="0">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Payment Terms</label>
				
				<select name="payment_terms" class="form-control" required  >
				<option  value="Credit" >Credit</option>
				<option  value="Prepaid" >Prepaid</option>
				<option value="FOD" >FOD</option>
				</select>

				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">GST (IN %) </label>
					<input type="text" name="gst" class="form-control"placeholder="0"  >
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left"> Status </label>
					<select name="Status"  class="form-control "required  >
					<option  value="1" >Active</option>
					<option value="0" >Deactive</option>
					</select>
				</div>

				<button type="submit" class="btn btn-success btn-anim disabled"><i class="icon-rocket"></i><span class="btn-text">Submit</span></button>

			</form>
		</div>
	</div>

			</div>
		</div>
	</div>
</div>

<!-- /Row -->

	   @endsection     
