
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Edit Zone</h5>
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
									<h6 class="panel-title txt-dark">Zone Form</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								
	<div class="panel-body">
		<div class="form-wrap">
			<form action="{{url('zone/'.$data->id)}}" method="post">
				<input type="hidden" name="_method" value="put"/>
				@csrf
				<div class="form-group">
					<label class="control-label mb-10 text-left">Name </label>
					<input type="text"   name="name" class="form-control" id="zname" onchange="zalias1()"  placeholder="e.g. Zone1 " value="{{$data->name}}">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Alias</label>
					<input type="text" name="alias" class="form-control" placeholder="alias" id="zalias" value="{{$data->alias}}">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Location </label>
					<input type="text" name="location" class="form-control" value="{{$data->location}}" placeholder="e.g. punjab,haryana,rajasthan">
				</div>

@php

if($data->status==1){
	$active="selected";
	$inactive="";
}else{
	$active="";
	$inactive="selected";
}

@endphp
				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">Status</label>
					<select name="status" class="form-control">
						<option {{$active}} value="1">Active</option>
						<option {{$inactive}}value="0">Inactive</option>
					</select>
				</div>


				<button type="submit" class="btn btn-success btn-anim disabled"><i class="icon-rocket"></i><span class="btn-text">Update</span></button>

			</form>
		</div>
	</div>

			</div>
		</div>
	</div>
</div>

<!-- /Row -->

<script type="text/javascript">
	//$(document).ready(function(){
	//	alert('test');
	//});

	function zalias1(){
	  var x = document.getElementById("zname").value;
	  var x = x.toLowerCase(); 
	  x = x.split(" ") ;
	  x = x.join('-'); 
	   document.getElementById("zalias").value=x;
	}

</script>

@endsection  

