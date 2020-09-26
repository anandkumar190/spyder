<!DOCTYPE html>
<!-- 
Template Name: Travelite - Tours and Travels Online Booking HTML
Version: 1.0.0
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>Spyder</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Spyder" />
	<meta name="keywords" content="Spyder">
	<meta name="author" content="Spyder" />
	<meta name="MobileOptimized" content="320">
	<!--srart theme style -->
	<link href="{{asset('fronthand/css/main.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('fronthand/css/akcss.css')}}" rel="stylesheet" type="text/css" />
	<!-- end theme style -->
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
	<link rel="icon" type="image/ico" href="favicon.ico" />

   @section('head')
       
     @show

</head>

<body class="travel_home">
<!--Page loading start-->
<div class="travel_page_loader">
 <div class="travel_loading_bar_wrapper">
     <div class="travel_loading_bar">
         <span class="from"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.053,4.626c6.334,0,11.488,5.166,11.488,11.514c0,6.35-5.153,11.515-11.488,11.515c-6.335,0-11.489-5.166-11.489-11.515C3.564,9.792,8.718,4.626,15.053,4.626 M15.053,1.26c-8.201,0-14.849,6.661-14.849,14.881c0,8.22,14.849,32.359,14.849,32.359s14.849-24.14,14.849-32.359S23.255,1.26,15.053,1.26z M17.197,21.558v1.444h1.701V6.772h-7.69V7.7h6.876v1.186h-6.876v14.115h1.776v-1.443L17.197,21.558L17.197,21.558z M15.718,10.146h2.292v2.298h-2.292V10.146z M15.7,14.108h2.292v2.299H15.7V14.108z M15.7,18.037h2.292v2.295H15.7V18.037z M12.133,10.146h2.292v2.298h-2.292V10.146z M12.114,14.108h2.292v2.299h-2.292V14.108z M12.114,20.333v-2.295h2.292v2.295H12.114z M17.197,23.188v-0.186h-4.213v0.186H8.695v1.631h12.717v-1.631H17.197z"/></svg></span>
            <span class="to">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.001,3.636c6.369,0,11.55,5.193,11.55,11.577c0,6.383-5.181,11.58-11.55,11.58c-6.372,0-11.551-5.197-11.551-11.58C3.45,8.829,8.629,3.636,15.001,3.636 M15.001,0.25C6.753,0.25,0.07,6.952,0.07,15.213c0,8.265,14.931,32.537,14.931,32.537s14.93-24.272,14.93-32.537C29.931,6.952,23.244,0.25,15.001,0.25z M13.871,20.894l1.182-0.003V20.88h-0.005l0.005-0.038V20.62c-0.013-0.187,0-1.001,0-1.001c-0.118-1.364-0.671-3.527-2.869-4.981c-0.042-0.025-1.077-0.676-1.439-2.202c-0.355-1.505,0.07-3.29,1.265-5.305c-1.594,1.002-2.658,2.775-2.658,4.803c0,1.745,0.795,3.307,2.034,4.343c0,0,0.39,0.301,0.506,0.378C14.083,18.362,13.871,20.894,13.871,20.894z M17.594,14.451c0.013-0.002,1.19-0.681,1.269-2.161c0.086-1.549-0.23-3.436-1.508-5.498C16.72,6.497,16.02,6.32,15.283,6.283v12.016C15.612,17.022,15.927,15.552,17.594,14.451z M11.364,12.256c0.082,1.476,1.257,2.156,1.27,2.161c1.666,1.102,1.983,2.571,2.312,3.847V6.248c-0.738,0.036-1.436,0.214-2.071,0.508C11.6,8.819,11.282,10.707,11.364,12.256z M17.354,6.787v0.004l0.031,0.012L17.354,6.787z M18.113,7.107c1.295,2.104,1.836,3.727,1.465,5.288c-0.357,1.523-1.395,2.176-1.438,2.201c-2.14,1.412-2.718,3.504-2.856,4.873v1.423h1.237c0,0-0.03-2.824,1.757-4.35c1.617-1.093,2.369-2.708,2.369-4.606C20.646,9.819,19.823,8.08,18.113,7.107z M15.252,20.911h0.032v-0.02h-0.031L15.252,20.911z M13.695,24.404h3.116v-3.116h-3.116V24.404z"/></svg></span>
         <div class="travel_loading_bar_overlay" style="width:0%;">
             <span class="pointer"><img src="images/icon/loading_plane.svg" alt="" /></span>
             <span class="pointer_val">0%</span>    
            </div>
        </div>
    </div>
</div>
<!--Page loading end-->
	<!--Page main section start-->
	<div id="travel_wrapper">
		<!--Header start-->
		<header id="header_wrapper">
			<div class="header_top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<p><i class="fa fa-phone"></i> For Support? Call Us: <span>+1 758-673-	</span></p>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="top_menu">
								<ul>
									<li><a href="">My Account</a></li>
									<li class="Travelite_login_alert"><a href="#">Login</a></li>
									<li class="Travelite_signup_alert"><a href="#">Signup</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- popup form Start -->
			<div class="full_width login_wrapper">
				<div class="row">
					<div class="container">
						<div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
							<!-- login form start -->
							<div class="popup_alert_main Travelite_login_form">
								<div class="login_heading"> login <span class="close_btn"><i class="fa fa-times"></i></span> </div>
								<div class="popup_inner">
									<form>

									<input type="email" name="emaillogin" placeholder="Email Id" class="input_login">

									<input type="password" name="passlogin" placeholder="Password" class="input_login">

									<input type="checkbox" id="login_check" name="checkbox" class="checkbox_login">
                                       
                                    <input type="submit"  id="loginbtn" name="submit">


									<label for="login_check" class="remember_me">Remember me</label>

										<a href="#" class="forgot_link">Forget password?</a> 
									
									</form>
									<div class="have_an_acnt">
										<p>Dont have an account? <a href="#">Sign up</a></p>
									</div>
									<div class="or_line"> <span>(OR)</span> </div>
									<div class="social_links_login">
										<ul>
											<li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
											<li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
										</ul>
									</div> 
								</div>
							</div>
							<!-- login form  End -->
							<!-- signup form start -->
							<div class="popup_alert_main Travelite_signup_form">
								<div class="login_heading"> signup <span class="close_btn"><i class="fa fa-times"></i></span> </div>
								<div class="popup_inner">

									<form class="signup_form" ac>
										<input type="text" name="fname" placeholder="First Name" class="input_login">

										<input type="text" name="lname" placeholder="Last Name" class="input_login">

										<input type="email" name="emaillogin" placeholder="Email Id" class="input_login">

										<input type="password" name="pass" placeholder="Password" class="input_login">

										<input type="password" name="conf_pass" placeholder="Confirm Password" class="input_login">

										<input type="checkbox" id="signup_check" name="checkbox" class="checkbox_login">

										<label for="signup_check" class="remember_me">I agree the Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</label>
										<input type="submit" value="SIGN UP" class="sub_signup"> 
								 </form>

					<!-- 		 <div class="or_line"> <span>(OR)</span> </div>
									 <div class="social_links_login">
										<ul>
											<li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
											<li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
										</ul>
								 </div> -->


									<div class="already_member"> already member? <a href="#">login here</a></div>
								</div>
							</div>
							<!-- signup form  End -->
						</div>
					</div>
				</div>
			</div>



			<!-- popup form  End -->
			<div class="header_bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2">
							<div class="travel_logo">
								<a href="{{url('/')}}"><img class="brand-img" src="{{asset('vendor/spyder.png')}}" alt="brand"/> </a> 
							</div>
						</div>
						<div class="col-md-10 col-sm-10">
							<a href="javascript:;" class="menu-toggle"></a>
							<div class="main_menu">
								<ul>
									<li class="active"><a href="">surface</a></li>
									<li><a href="">Air</a></li>
									<li><a href="">Full Truck</a></li>
									<li><a href="">Part Track</a></li>
									<li><a href="">Train </a></li>
									<li><a href="">Ecommerce</a></li>
									<li><a href="">Warehousing </a></li>
									<li><a href="">International</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
		<!--Header end-->
		<!--content body start-->

        @section('boday')
            
          @show



	<!--content body end-->
	<!--footer start-->
	<footer id="footer_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<aside class="widget widget_text">
						<a href="Home_01.html"><img src="svg/Logo.svg" alt="footer logo" /></a> 
						<p>In 2015, We launched Travellers with the belief that other travellers would share our desire to experience authentic adventures in a responsible and sustainable manner.
							<br>
							<br> We've grown from a one-man show to a company of over 50 world wide, and from a handful of trips in all over the world.</p> <a href="">Read More <i class="fa fa-angle-right"></i></a> </aside>
<!-- 					<aside class="widget widget_tag_cloud">
						<h4 class="widget-title">Tags</h4>
						<div class="tagcloud"> <a href="">Travel</a> <a href="">Booking</a> <a href="">Hotels</a> <a href="">Cars</a> <a href="">Flights</a> <a href="">Tours</a> </div>
				     	</aside> -->
				</div>

		<div class="col-md-4">
			<aside class="widget widget_text">
				<a href="Home_01.html"><img src="svg/Logo.svg" alt="footer logo" /></a> 
				<p>In 2015, We launched Travellers with the belief that other travellers would share our desire to experience authentic adventures in a responsible and sustainable manner.
					<br>
					<br> We've grown from a one-man show to a company of over 50 world wide, and from a handful of trips in all over the world.</p> <a href="">Read More <i class="fa fa-angle-right"></i></a> </aside>
<!-- 					<aside class="widget widget_tag_cloud">
				<h4 class="widget-title">Tags</h4>
				<div class="tagcloud"> <a href="">Travel</a> <a href="">Booking</a> <a href="">Hotels</a> <a href="">Cars</a> <a href="">Flights</a> <a href="">Tours</a> </div>
			</aside> -->
		</div>

	<div class="col-md-4">
		<aside class="widget widget_text">
			<a href="Home_01.html"><img src="svg/Logo.svg" alt="footer logo" /></a> 
			<p>In 2015, We launched Travellers with the belief that other travellers would share our desire to experience authentic adventures in a responsible and sustainable manner.
				<br>
				<br> We've grown from a one-man show to a company of over 50 world wide, and from a handful of trips in all over the world.</p> <a href="">Read More <i class="fa fa-angle-right"></i></a> </aside>
<!-- 					<aside class="widget widget_tag_cloud">
			<h4 class="widget-title">Tags</h4>
			<div class="tagcloud"> <a href="">Travel</a> <a href="">Booking</a> <a href="">Hotels</a> <a href="">Cars</a> <a href="">Flights</a> <a href="">Tours</a> </div>
		</aside> -->
	</div>




			</div>
		</div>
	</footer>
	<!--footer end-->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6"> <span>Stay Connected with Us - </span> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> <a href=""><i class="fa fa-rss"></i></a> </div>
				<div class="col-md-6 col-sm-6 text-right"> <span>Travellers@2016. All Right Reserved</span> </div>
			</div>
		</div>
	</div>

	<!--Page main section end-->
	<!--main js file start-->
	<script type="text/javascript" src="{{asset('fronthand/js/jquery-1.11.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/bootstrap-select.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/datetimepicker/jquery.datetimepicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/parallax/jquery.parallax-1.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/owl/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/isotope/jquery.isotope.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/bxslider/jquery-bxslider.js')}}"></script>
	<!-- pie chart js -->
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/pie-circle/circles.js')}}"></script>
	<!-- pie chart js -->
	<!--counter js-->
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/counter/jquery.countTo.js')}}">
	</script>
	<!--counter js-->
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/counter/jquery.countdown.js')}}">
	</script>
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/revolution/js/jquery.themepunch.tools.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/revolution/js/jquery.themepunch.revolution.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/revolution/js/revolution.extension.layeranimation.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/revolution/js/revolution.extension.navigation.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/revolution/js/revolution.extension.slideanims.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/revolution/js/revolution.extension.actions.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/revolution/js/revolution.extension.parallax.min.js')}}">
	</script>
	<!-- REVOLUTION JS FiLES -->
	<!-- video_popup -->
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/video-popup/jquery.magnific-popup.js')}}">
	</script>
	<!-- video_popup -->
	<!-- slick slider -->
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/slick/jquery-migrate-1.2.1.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('fronthand/js/plugin/slick/slick.min.js')}}"></script>
	<!-- slick slider -->
	<!-- video player js -->
	<script src="{{asset('fronthand/js/plugin/video_player/mediaelement-and-player.min.js')}}"></script>
	<!-- video player js -->
	<!-- pricefilter -->
	<script src="{{asset('fronthand/js/plugin/jquery-ui/jquery-ui.js')}}"></script>
	<!-- pricefilter-->
	<script type="text/javascript" src="{{asset('fronthand/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('fronthand/js/akjs.js')}}"></script>
	<!--main js file end-->

	@section('footer')
	    
	@show

</body>

</html>