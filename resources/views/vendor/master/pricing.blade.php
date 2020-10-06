
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
					<label class="control-label mb-10 text-left">Owner Risk(Per kg)</label>
					<input type="text" name="owner_risk_kg" class="form-control" value="{{@$vascharge->owner_risk_kg}}"placeholder="0">
				</div>
				
				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Owner Risk (Min) </label>
					<input type="text" name="owner_risk_min" class="form-control" value="{{@$vascharge->owner_risk_min}}"placeholder="0">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Carrier Risk (Per kg) </label>
					<input type="text" name="carrier_risk_kg" class="form-control" value="{{@$vascharge->carrier_risk_kg}}"placeholder="0">
				</div>
				
				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Carrier Risk (min) </label>
					<input type="text" name="carrier_risk_min" class="form-control" value="{{@$vascharge->carrier_risk_min}}"placeholder="0">
				</div>
				
				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">Minimum charge in kg </label>
					<input type="text" name="min_kg" class="form-control"placeholder="0" value="{{@$vascharge->min_weight}}">
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
					<label class="control-label mb-10 text-left">FOD </label>
					<input type="text" name="fod" class="form-control" placeholder="0" value="{{@$vascharge->fod}}">
				</div>

				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left"> COD </label>
					<input type="text" name="cod" class="form-control" placeholder="0" value="{{@$vascharge->cod}}">
				</div>


				<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<label class="control-label mb-10 text-left">MINIMUM FREIGHT</label>
					<input type="text" name="min_freight" class="form-control" placeholder="0" value="{{@$vascharge->min_freight}}">
				</div>
<!--  new  -->

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Outstation pick-up (per kg)</label>
	<input type="text" name="opu_kg" class="form-control" placeholder="0" value="{{@$vascharge->opu_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Outstation pick-up (min)</label>
	<input type="text" name="opu_min" class="form-control" placeholder="0" value="{{@$vascharge->opu_min}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (per kg) </label>
	<input type="text" name="ossh_kg" class="form-control" placeholder="0" value="{{@$vascharge->ossh_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (Min) </label>
	<input type="text" name="ossh_min" class="form-control" placeholder="0" value="{{@$vascharge->ossh_min}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Odd Shape Shipment Handling (Max) </label>
	<input type="text" name="ossh_max" class="form-control" placeholder="0" value="{{@$vascharge->ossh_max}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Delivery as per appointed time (Per kg) </label>
	<input type="text" name="daspat_kg" class="form-control" placeholder="0" value="{{@$vascharge->daspat_kg}}">
</div>
<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Delivery as per appointed time(Min)</label>
	<input type="text" name="daspat_min" class="form-control" placeholder="0" value="{{@$vascharge->daspat_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Special Eco Zone Delivery (Per kg) </label>
	<input type="text" name="sezd_kg" class="form-control" placeholder="0" value="{{@$vascharge->sezd_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Special Eco Zone Delivery (Min)</label>
	<input type="text" name="sezd_min" class="form-control" placeholder="0" value="{{@$vascharge->sezd_min}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Canteen (CSD) Delivery (Per kg) </label>
	<input type="text" name="csd_kg" class="form-control" placeholder="0" value="{{@$vascharge->csd_kg}}">
</div>
<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Canteen (CSD) Delivery (Min)</label>
	<input type="text" name="csd_min" class="form-control" placeholder="0" value="{{@$vascharge->csd_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Govt Compound Delivery (Per kg )</label>
	<input type="text" name="gcd_kg" class="form-control" placeholder="0" value="{{@$vascharge->gcd_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Govt Compound Delivery(Min)</label>
	<input type="text" name="gcd_min" class="form-control" placeholder="0" value="{{@$vascharge->gcd_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Higher Floor Delivery</label>
	<input type="text" name="hfd" class="form-control" placeholder="0" value="{{@$vascharge->hfd}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Green Tax (per kg)</label>
	<input type="text" name="green_tax_kg" class="form-control" placeholder="0" value="{{@$vascharge->green_tax_kg}}">
</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Green Tax (Min) </label>
	<input type="text" name="green_tax_min" class="form-control" placeholder="0" value="{{@$vascharge->green_tax_min}}">
</div>


<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">Demurrage</label>
	<input type="text" name="demurrage" class="form-control" placeholder="0" value="{{@$vascharge->demurrage}}">
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
	<input type="text" name="m_charges" class="form-control" placeholder="0" value="{{@$vascharge->m_charges}}">

</div>

<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
	<label class="control-label mb-10 text-left">GST (IN %) </label>
	<input type="text" name="gst" class="form-control"placeholder="0"  value="{{@$vascharge->gst}}">
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



				<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Handling Charges</h6>
					</div>
					<div class="clearfix">Weight. per Box </div>
				</div>
				<div class="panel-wrapper collapse in">

	<div class="panel-body">
		<div class="form-wrap">
			<form action="{{url('handling-charges')}}" method="post">
				@csrf

						<div id="inputFormRow">
							
							<div class="form-group  col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
								<label class="control-label mb-10 text-left"> Min Wt. per Box </label>
								<input type="text"  name="minwt[]" class="form-control" id="fulesurcharge"    value="{{@$HandlingCharges[0]->min}}" placeholder="0"  required  >
							</div>

							<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
								<label class="control-label mb-10 text-left">Upto Wt </label>
								<input type="text" name="maxwt[]" class="form-control"value="{{@$HandlingCharges[0]->max}}"  placeholder="0" required>
							</div>


							<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
								<label class="control-label mb-10 text-left">Charge/Kg</label>
								<input type="text" name="chargekg[]" class="form-control" value="{{@$HandlingCharges[0]->price}}"placeholder="0" required>
							</div>
						

				         </div>

@foreach($HandlingCharges as $key => $handlcharge)

@php
if($key==0){
	continue;
}
@endphp
	<div id="inputFormRow">
		
		<div class="form-group  col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
			
			<input type="text"  name="minwt[]" class="form-control" id="fulesurcharge"    value="{{$handlcharge->min}}"  required  >
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
			
			<input type="text" name="maxwt[]" class="form-control"value="{{$handlcharge->max}}"  placeholder="0" required>
		</div>
		<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
			<input type="text" name="chargekg[]" class="form-control" value="{{$handlcharge->price}}"placeholder="0" required>
		</div>
		<div class="form-group col-lg-1 col-md-1 col-sm-1 col-xs-1 "><span id="removeRow" type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></span>
	    </div>
</div>

 @endforeach


	            <div id="newRow"></div>
			            <button id="addRow" type="button" class="btn pull-right btn-info">Add Row</button>


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

<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
var html = '';

html += '<div id="inputFormRow">';
html += '<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">';
html += '<input type="text"  name="minwt[]"                                    class="form-control"id="fulesurcharge"  placeholder="0" value="" required >';
html += '</div>';

html += '<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">';
html += '<input type="text" name="maxwt[]" class="form-control"value=""  placeholder="0" required >';
html += '</div>';

html += '<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3 ">';
html += '<input type="text" name="chargekg[]" class="form-control" value=""placeholder="0" required >';
html += '</div>';

html += '<div class="form-group col-lg-1 col-md-1 col-sm-1 col-xs-1 ">';
html += '<span id="removeRow" type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></span>';
html += '</div>';

      

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });

    
</script>



	   @endsection     
