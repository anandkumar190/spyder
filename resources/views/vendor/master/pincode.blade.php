
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Pincode</h5>
					</div>


					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="{{url('home')}}">Dashboard</a></li>
						
							<li class="active"><span>Pin code</span></li>
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
								
								<div class="clearfix">  <a href="{{url('pin-code/create')}}" class="btn btn-success btn-rounded pull-right"> add</a>  <button  class="btn btn-warning  btn-rounded " data-toggle="modal" data-target="#ImportModal"> Import</button>

								 </div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">


<table id="datable_1" class="table table-hover display  pb-30" >
	<thead>
		<tr>
			<th>Zone</th>
			<th>City</th>
			<th>Pincode</th>
			<th>Is Serviceable</th>
			<th>Is Cod</th>
			<th>Is Prepaid</th>
			<th>Is Delivery</th>
			<th>Is Pickup</th>
			<th>Is Oda</th>
			<th>Status</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($pincode_list as $pincode)

			<tr>
				<td>{{$pincode->name}}</td>
				<td>{{$pincode->city}}</</td>
				<td>{{$pincode->pincode}}</td>

				<td>@if($pincode->is_serviceable==1)
					<span class="label label-success">Yes</span>
					@else
					<span class="label label-warning">No</span>
		           @endif 
				</td>				
				<td>@if($pincode->is_cod==1)
					<span class="label label-success">Yes</span>
					@else
					<span class="label label-warning">No</span>
		           @endif 
				</td>				
				<td>@if($pincode->is_prepaid==1)
					<span class="label label-success">Yes</span>
					@else
					<span class="label label-warning">No</span>
		           @endif 
				</td>	
					<td>@if($pincode->is_delivery==1)
						<span class="label label-success">Yes</span>
						@else
						<span class="label label-warning">No</span>
			           @endif 
					</td>	
											
					<td>@if($pincode->is_pickup==1)
						<span class="label label-success">Yes</span>
						@else
						<span class="label label-warning">No</span>
			           @endif 
					</td>

						
					<td>@if($pincode->is_oda==1)
						<span class="label label-success">Yes</span>
						@else
						<span class="label label-warning">No</span>
			           @endif 
					</td>


				<td>@if($pincode->status==1)
					<span class="label label-success">Active</span>
					@else
					<span class="label label-warning">Inactive</span>
		           @endif 
				</td>				
				<td>
					<a href="{{ url('pin-code/'.$pincode->id.'/edit')}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
				 </a> 
				 <form id="zdelete{{$pincode->id}}" action="{{url('pin-code/'.$pincode->id)}}" method="post"> 
				 	<input type="hidden" name="_method" value="delete"/>
				 @csrf </form>

					<a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('zdelete{{$pincode->id}}').submit();"  data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i></a>
				</td>	
			</tr>

		@endforeach
		

	</tbody>
	<tfoot>
		<tr>
			<th>Zone</th>
			<th>City</th>
			<th>Pincode</th>
			<th>Is Serviceable</th>
			<th>Is Cod</th>
			<th>Is Prepaid</th>
			<th>Is Delivery</th>
			<th>Is Pickup</th>
			<th>Is Oda</th>
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



			

				<!-- Modal -->
				<div class="modal fade" id="ImportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Pincode Csv Import </h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				   <form action="/action_page.php">
				      <div class="modal-body">
				         <div class="container mt-3">
				             <input type="file" id="myFile" name="filename2">
				           
				         </div>

				      </div>
				      <div class="modal-footer">
				     <button type="submit" class="btn btn-primary pull-right">
				     Submit </button>
				      </div>
				    </form>
				    </div>
				  </div>
				</div>



	   @endsection     
