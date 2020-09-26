
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Zone</h5>
					</div>


					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="{{url('home')}}">Dashboard</a></li>
							<li class="active"><span>Zone</span></li>
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
								<div class="clearfix"> <a href="{{url('zone/create')}}" class="btn btn-success btn-rounded pull-right"> add</a> </div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Name</th>
														<th>Alias</th>
														<th>Location</th>
														<th>Status</th>
														<th>Action</th>
														
													</tr>
												</thead>
<tbody>

@foreach($zones as $zone)

	<tr>
		<td>{{$zone->name}}</td>
		<td>{{$zone->alias}}</</td>
		<td>{{$zone->location}}</td>
		<td>@if($zone->status==1)
			<span class="label label-success">Active</span>
			@else
			<span class="label label-warning">Inactive</span>
           @endif 
		</td>
		<td>
			<a href="{{ url('zone/'.$zone->id.'/edit')}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
		 </a> 
		 <form id="zdelete{{$zone->id}}" action="{{url('zone/'.$zone->id)}}" method="post"> 
		 	<input type="hidden" name="_method" value="delete"/>
		 @csrf </form>

			<a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('zdelete{{$zone->id}}').submit();"  data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i></a>
		</td>

		
	</tr>

@endforeach

</tbody>
												<tfoot>
													<tr>
														<th>Name</th>
														<th>Alias</th>
														<th>Location</th>
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
