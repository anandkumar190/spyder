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
						<!-- <span class="brand-text">Spyder</span> -->
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-success  btn-rounded btn-outline" href="{{url('register')}}">Sign Up</a>
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
											<h3 class="text-center txt-dark mb-10">Sign in to Spyder</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	

		<div class="form-wrap">
			<form method="POST" action="{{ route('login') }}">
				    @csrf
				<div class="form-group">
					<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
					    <span class="invalid-feedback" role="alert">                                    <strong>{{ $message }}</strong>
					    </span>
					@enderror
				</div>
				<div class="form-group">
					<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
					<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{ route('password.request') }}">forgot password ?</a>
					<div class="clearfix"></div>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					@error('password')
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $message }}</strong>
					    </span>
					@enderror

				</div>
				
				<div class="form-group">
					<div class="checkbox checkbox-primary pr-10 pull-left">
						<input id="checkbox_2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
						<label for="checkbox_2"> Keep me logged in</label>
	                {{ __('Remember Me') }}

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-success  btn-rounded">sign in</button>
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