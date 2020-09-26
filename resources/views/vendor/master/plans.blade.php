
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">User Plans</h5>
					</div>


					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="{{url('home')}}">Dashboard</a></li>
						
							<li class="active"><span> Plans </span></li>
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
<!-- 								<div class="pull-left">
									<h6 class="panel-title txt-dark">data Table</h6>
								</div> -->
								
								<div class="clearfix"> <a href="{{url('plan/create')}}" class="btn btn-success btn-rounded pull-right"> add</a> </div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">


<table id="datable_1" class="table table-hover display  pb-30" >
	<thead>
		<tr>
			<th>Nmae</th>
			<th>Base Charges</th>
			<th>Docket Charges</th>
			<th>Handling Charges</th>
			<th>MINIMUM FREIGHT</th>
			<th>ODA Charges </th>
			<th>Insurance</th>
			<th>Status</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
   @foreach($data as $val)
			<tr>
				<td>{{$val->name}}</td>
				<td>{{$val->base_charge}}</td>
				<td>{{$val->docket_charge}}</td>
				<td>{{$val->handling_charges}}</td>
				<td>{{$val->min_freight}}</td>
				<td>{{$val->oda_min}}</td>
				<td>{{$val->risk_on_val}}</td>
				<td>
                 @if($val->status==1)
                 			<span class="label label-success">Active</span>
                 			@else
                 			<span class="label label-warning">Inactive</span>
                            @endif 
				</td>			
				<td> 			<a href="{{ url('plan/'.$val->id.'/edit')}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
		 </a> 
		 <form id="zdelete{{$val->id}}" action="{{url('plan/'.$val->id)}}" method="post"> 
		 	<input type="hidden" name="_method" value="delete"/>
		 @csrf </form>

			<a href="{{url('plan/'.$val->id)}}" onclick="event.preventDefault();document.getElementById('zdelete{{$val->id}}').submit();"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i></a>

		</td>			
			</tr>
@endforeach

	</tbody>


	<tfoot>
		<tr>
        	<th>Nmae</th>
			<th>Base Charges</th>
			<th>Docket Charges</th>
			<th>Handling Charges</th>
			<th>MINIMUM FREIGHT</th>
			<th>ODA Charges </th>
			<th>Insurance</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</tfoot>
</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->

	   @endsection     
