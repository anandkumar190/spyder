
@extends('layouts.vendorlayout')
@section('body')

			<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add Zone</h5>
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
									<h6 class="panel-title txt-dark">Basic Form</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
	<div class="panel-body">
		<div class="form-wrap">
			<form>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Default Text <span class="help"> e.g. "john doe"</span></label>
					<input type="text" class="form-control" value="john doe...">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
					<input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Password</label>
					<input type="password" class="form-control" value="password">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Placeholder</label>
					<input type="text" class="form-control" placeholder="placeholder">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Text area</label>
					<textarea class="form-control" rows="5"></textarea>
				</div>
				<div class="form-group mt-30 mb-30">
					<label class="control-label mb-10 text-left">select</label>
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>

			</form>
		</div>
	</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->


@endsection     
