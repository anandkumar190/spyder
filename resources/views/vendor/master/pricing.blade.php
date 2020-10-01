
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Pricing</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="{{url('home')}}">Dashboard</a></li>
						
							<li class="active"><span>Pricing</span></li>
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
									<h6 class="panel-title txt-dark">By Surface prices </h6>
								    </div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
<div class="panel-body">
	<div class="table-wrap mt-40">
		<div class="table-responsive">
			<form action="{{url('surface-price')}}" method="post">
				@csrf

			<table class="table mb-0">
				<thead>
				  <tr>
				  <th>Zone</th>	
				@foreach($zones as $tokey=>$toval)  	
					<th>{{$toval}}</th>
                @endforeach

				  </tr>
				</thead>
				<tbody>
	           @foreach($zones as $fmkey=>$fmval)
				  <tr>
				  	 <td>{{$fmval}}</td>
					    @foreach($zones as $tokey=>$toval) 
	                      <td><input class="sprice" type="text" name="sprice[{{$fmkey}}][{{$tokey}}]" value="{{@$surface_charege[$fmkey][$tokey]}}" ></td>
	                    @endforeach        
  				  </tr>
               @endforeach

				</tbody>
			</table>

			<button type="submit" class="btn btn-success btn-anim disabled"><i class="icon-rocket"></i><span class="btn-text">Update</span></button>

		</form>
		</div>
	</div>
</div>

							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->

								<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
                           	<div class="pull-left">
									<h6 class="panel-title txt-dark">By Air prices </h6>
								    </div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
	<div class="panel-body">
		<div class="table-wrap mt-40">
			<div class="table-responsive">
			<form action="{{url('air-prices')}}" method="post">
				@csrf
				<table class="table mb-0">
					<thead>
					  <tr>
					  <th>Zone</th>	
					@foreach($zones as $tokey=>$toval)  	
						<th>{{$toval}}</th>
	                @endforeach
					  </tr>
					</thead>
					<tbody>
		           @foreach($zones as $fmkey=>$fmval)
					  <tr>
					  	 <td>{{$fmval}}</td>
					  @foreach($zones as $tokey=>$toval) 
	                     <td><input class="sprice" type="text" name="aprice[{{$fmkey}}][{{$tokey}}]" value="{{@$air_charege[$fmkey][$tokey]}}"></td>
	                  @endforeach
	  				  </tr>
	               @endforeach
					</tbody>
				</table>

				<button type="submit" class="btn btn-success btn-anim disabled"><i class="icon-rocket"></i><span class="btn-text">Update</span></button>

			</form>	
			</div>
		</div>
	</div>

						   </div>
						</div>	
					</div>
				</div>
				<!-- /Row -->


				<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">VAS Charges</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">

	<div class="panel-body">
		<div class="form-wrap">
			<form action="{{url('vas-charges')}}" method="post">
				@csrf
				<div class="form-group  col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Fuel Surcharge </label>
					<input type="text"  name="fulesurcharge" class="form-control" id="fulesurcharge"   placeholder="0" value="{{@$vascharge->fuel_surcharge}}" >
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Docket Charges	</label>
					<input type="text" name="docketcharges" class="form-control"value="{{@$vascharge->docket_charge}}"  placeholder="0" id="zalias">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Risk on Minimum Value on Owner Risk </label>
					<input type="text" name="rikk_on_val" class="form-control" value="{{@$vascharge->risk_on_val}}"placeholder="0">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Minimum charge in kgs </label>
					<input type="text" name="min_kg" class="form-control"placeholder="0" value="{{@$vascharge->min_weight}}">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">GST (IN %) </label>
					<input type="text" name="gst" class="form-control"placeholder="0"  value="{{@$vascharge->gst}}">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Minumum ODA  </label>
					<input type="text" name="min_oda" class="form-control" placeholder="0" value="{{@$vascharge->oda_min}}">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">ODA (per kg) </label>
					<input type="text" name="per_kg_oda" class="form-control" placeholder="0" value="{{@$vascharge->oda_pkg}}">
				</div>


				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">MINIMUM FREIGHT</label>
					<input type="text" name="min_freight" class="form-control" placeholder="0" value="{{@$vascharge->min_freight}}">
				</div>
<!--  new  -->

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Outstation pick-up (per kg)</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Outstation pick-up (min)</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (per kg) </label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (Min) </label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (Max) </label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Delivery as per appointed time (Per kg) </label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>
<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Delivery as per appointed time(Min)</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Special Eco Zone Delivery (Per kg) </label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Special Eco Zone Delivery (Min)</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Canteen (CSD) Delivery (Per kg) </label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>
<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Canteen (CSD) Delivery (Min)</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Govt Compound Delivery (Per kg )</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Govt Compound Delivery(Min)</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Higher Floor Delivery</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Green Tax (per kg)</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Green Tax (Min) </label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Demurrage</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="0" value="{{@$vascharge->payment_term}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Payment Terms</label>
	<select name="payment_terms" class="form-control" required="">
						<option value="Credit" selected="">Credit</option>
						<option value="Prepaid">Prepaid</option>
						<option value="FOD">FOD</option>
						</select>
</div>



<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
	<label class="control-label mb-10 text-left">Miscellaneous Charges</label>
	<input type="text" name="payment_terms" class="form-control" placeholder="Payment Terms" value="{{@$vascharge->payment_term}}">
</div>




<!-- end  -->



<button type="submit" class="btn btn-success btn-anim disabled" ><i class="icon-rocket"></i><span class="btn-text">Update</span></button>
		

			</form>
		</div>
	</div>

			</div>
		</div>
	</div>
</div>

<!-- /Row -->

	   @endsection     
