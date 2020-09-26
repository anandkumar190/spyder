
@extends('layouts.vendorlayout')
@section('body')

@php

if($data->is_serviceable==1){
	$ys="selected";
	$ns="";
}else{
	$ys="";
	$ns="selected";
}

if($data->is_cod==1){
	$yc="selected";
	$nc="";
}else{
	$yc="";
	$nc="selected";
}

if($data->is_prepaid==1){
	$yp="selected";
	$np="";
}else{
	$yp="";
	$np="selected";
}

if($data->is_oda==1){
	$yoda="selected";
	$noda="";
}else{
	$yoda="";
	$noda="selected";
}

if($data->status==1){
	$active="selected";
	$inactive="";
}else{
	$active="";
	$inactive="selected";
}

@endphp
			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add Pincode</h5>
					</div>


					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="{{url('home')}}">Dashboard</a></li>
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
									<h6 class="panel-title txt-dark">Pincode Form</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">

	<div class="panel-body">
		<div class="form-wrap">
			<form action="{{url('pin-code/'.$data->id)}}" method="post">
				<input type="hidden" name="_method" value="put"/>
				@csrf

				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">Zone</label>
					<select name="zone" class="form-control">
                 @foreach($zones as $key=>$val)
                 @php $szone=$data->datazone_fk_id==$key?'selected':'';     @endphp 
						<option  {{$szone}} value="{{$key}}">{{$val}}</option>
                 @endforeach    
					</select>
				</div>


				<div class="form-group">
					<label class="control-label mb-10 text-left">city </label>
					<input type="text"  name="city" class="form-control" id="city" value="{{ $data->city}}"  placeholder="e.g. Zone1 ">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Pincode</label>
					<input type="text" name="Pincode" class="form-control"  value="{{ $data->pincode}}" placeholder="Pincode"  pattern="[0-9]{6}" id="zalias">
				</div>


				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">Serviceable</label>
					<select name="serviceable" class="form-control">
						<option {{$ys}} value="1">Yes</option>
						<option {{$ns}}  value="0">No</option>
					</select>
				</div>

				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">Cod</label>
					<select name="cod" class="form-control">
						<option {{$yc}} value="1">Yes</option>
						<option {{$nc}}value="0">No</option>
					</select>
				</div>


				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">Prepaid</label>
					<select name="prepaid" class="form-control">
						<option {{$yp}} value="1">Yes</option>
						<option {{$np}} value="0">No</option>
					</select>
				</div>


				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">Is oda</label>
					<select name="is_oda" class="form-control">
						<option {{$yoda}} value="1">Yes</option>
						<option {{$noda}} value="0">No</option>
					</select>
				</div>


				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">Status</label>
					<select name="status" class="form-control">
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				</div>


				<button type="submit" class="btn btn-success btn-anim disabled"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>

			</form>
		</div>
	</div>


			</div>
		</div>
	</div>
</div>

<!-- /Row -->


</script>

@endsection  

