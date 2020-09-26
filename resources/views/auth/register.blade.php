<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Spyder</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content=""/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('vendor/spyder.png')}}">
		<link rel="icon" href="{{asset('vendor/spyder.png')}}" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="{{asset('vendor/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
			<link href="{{asset('vendor/vendors/bower_components/bootstrap-table/dist/bootstrap-table.css')}}" rel="stylesheet" type="text/css"/>
		<!-- Custom CSS -->
		<link href="{{asset('vendor/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="{{asset('vendor/spyder.png')}}" alt="brand"/>
				<!-- 		<span class="brand-text">spyder</span> -->
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Already have an account?</span>
					<a class="inline-block btn btn-success btn-rounded btn-outline" href="{{URL('login')}}">Login</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign up to Spyder</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
			    	<div class="form-wrap">
						 <form method="POST" action="{{route('register')}}">
                                @csrf
									<div class="form-group">
										<label class="control-label mb-10" for="exampleInputName_1">Name</label>
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								  @error('name')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                        </span>
				                    @enderror
								</div>
									<div class="form-group">
										<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
										@error('email')
										    <span class="invalid-feedback" role="alert">
										       <strong>{{ $message }}</strong>
										    </span>
										@enderror
									</div>

									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Mobile Number</label>
										<input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}"  required autocomplete="mobile">

										@error('mobile')
										    <span class="invalid-feedback" role="alert">
										        <strong>{{ $message }}</strong>
										    </span>
										@enderror
									</div>

									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Company  Name</label>
										<input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name">

										@error('company_name')
										    <span class="invalid-feedback" role="alert">
										        <strong>{{ $message }}</strong>
										    </span>
										@enderror
									</div>

									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_2">GSTIN</label>
										<input id="gstin" type="text" class="form-control @error('gstin') is-invalid @enderror" name="gstin"  value="{{ old('gstin') }}"required autocomplete="gstin">

										@error('gstin')
										    <span class="invalid-feedback" role="alert">
										        <strong>{{ $message }}</strong>
										    </span>
										@enderror
									</div>

									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_2">CIN</label>
										<input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}" required autocomplete="cin">

										@error('cin')
										    <span class="invalid-feedback" role="alert">
										        <strong>{{ $message }}</strong>
										    </span>
										@enderror
									</div>


									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Country of Operation</label>
										<input id="countryofoperation" type="text" class="form-control @error('countryofoperation') is-invalid @enderror" name="countryofoperation" required autocomplete="countryofoperation" value="{{ old('countryofoperation') }}">

										@error('countryofoperation')
										    <span class="invalid-feedback" role="alert">
										        <strong>{{ $message }}</strong>
										    </span>
										@enderror
									</div>


									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

										@error('password')
										    <span class="invalid-feedback" role="alert">
										        <strong>{{ $message }}</strong>
										    </span>
										@enderror
									</div>



									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_3">Confirm Password</label>
										<input id="assword-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" >
									</div>
									<div class="form-group">
										<div class="checkbox checkbox-primary pr-10 pull-left">
											<input id="checkbox_2" required="" type="checkbox">
											<label for="checkbox_2"> I agree to all <span class="txt-primary">Terms</span></label>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group text-center">
										<button type="submit" class="btn btn-success btn-rounded">Register</button>
									</div>
					    </form>
				</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="{{asset('vendor/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('vendor/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('vendor/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{asset('vendor/dist/js/jquery.slimscroll.js')}}"></script>
		
		<!-- Init JavaScript -->
		<script src="{{asset('vendor/dist/js/init.js')}}"></script>

	</body>
</html>
