@extends('fronthand.layout.master')
@section('head')
<style type="text/css">
	.dimensions{width:25% !important;}
		.nity{width: 85% !important;;	}
</style>
@stop
@section('boday')

<div class="full_width destinaion_sorting_section">
	<div class="container">
		<div class="row space_100">
			<!-- right main start -->
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="tour_packages_right_section left_space_40">
					
					<div class="full_width sorting_flight_panel">
						<label class="sort_by">Sort by:</label>
						<div class="sorting_destination">
							<select class="form-control selectpicker" id="search_name">
								<option value="1">name</option>
								<option value="2">john</option>
								<option value="3">marry</option>
								<option value="4">raj</option>
							</select>
							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="sorting_destination">
							<select class="form-control selectpicker" id="search_price">
								<option value="rat1">Price</option>
								<option value="rat2">$100</option>
								<option value="rat3">$150</option>
								<option value="rat4">$200</option>
								<option value="rat5">$250</option>
							</select>
							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="sorting_destination">
							<select class="form-control selectpicker" id="search_duration">
								<option value="1">Duration</option>
								<option value="2">1 Day</option>
								<option value="3">2 Day</option>
								<option value="4">3 Day</option>
							</select>
							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="sorting_destination">
							<select class="form-control selectpicker" id="search_arrivals">
								<option value="1">Arrival</option>
								<option value="2">1</option>
								<option value="3">2</option>
								<option value="4">3</option>
							</select>
							<i class="fa fa-chevron-down"></i>
						</div>
						<!-- sorting list -->
						<!--     <div class="pull-right sort_list_grid">
											<a href="Flights-Grid-with-sidebar.html"><i class="fa fa-th-large"></i></a>
											<a href="Flights-List-view.html"><i class="fa fa-th-list active_sort"></i></a>
						</div> -->
						<!-- sorting list -->
					</div>
					<!--  sorting panel End -->
					<!-- sorting places section -->
<div class="full_width hotel_list_sorting">
	
	<!--sort_list start -->
	<div class="sorting_places_wrap  list_sorting_view">
		<div class="col-lg-2 col-md-2 col-sm-2 padding_none listlogo">
			<div class="thumb_wrape">
				<a href="#">
					<img src="http://placehold.it/330x244" alt="hotel thumb">
					<div class="overlay_title">
						<h4>emirates</h4>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10">
			<!-- Desc -->
			<div class="flight_grid_desc flight_list_desc">
				
				<!-- title End -->
				
				<!-- flight schedule -->
				<div class="flight_details_schedule">
					<div class="take_off_landing">
						<h5><a href="#">australia</a></h5>
						<div class="bottom_review_rating">
							<div class="rating_bottom">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<span class="review_right">
								<i class="fa fa-thumbs-up"></i> 52 Reviews
							</span>
						</div>
					</div>
					<div class="take_off_landing">
						<h5>Landing</h5>
						<p>22 Sep 2015 at 5.30am</p>
					</div>
					<div class="take_off_landing">
						<span class="doller">$150</span>
						<br/><span>/person</span>
						<p>22 Sep 2015 at 5.30am</p>
					</div>
					
					<div class="take_off_landing">
						<div class="total_time_schedule">Total Time : 48 hours, 30 Minutes</div>
						
						<a href="#" class=" btn btn-success ">
							Ship
						</a>
						
					</div>
					
				</div>
				<!-- flight schedule  final-->
				
				</div><!--  Desc End -->
			</div>
			</div><!--sort_list end-->
			<!--sort_list start -->
			<div class="sorting_places_wrap  list_sorting_view">
				<div class="col-lg-2 col-md-2 col-sm-2 padding_none listlogo">
					<div class="thumb_wrape">
						<a href="#">
							<img src="http://placehold.it/330x244" alt="hotel thumb">
							<div class="overlay_title">
								<h4>emirates</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10">
					<!-- Desc -->
					<div class="flight_grid_desc flight_list_desc">
						
						<!-- title End -->
						
						<!-- flight schedule -->
						<div class="flight_details_schedule">
							<div class="take_off_landing">
								<h5><a href="#">australia</a></h5>
								<div class="bottom_review_rating">
									<div class="rating_bottom">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<span class="review_right">
										<i class="fa fa-thumbs-up"></i> 52 Reviews
									</span>
								</div>
							</div>
							<div class="take_off_landing">
								<h5>Landing</h5>
								<p>22 Sep 2015 at 5.30am</p>
							</div>
							<div class="take_off_landing">
								<span class="doller">$150</span>
								<br/><span>/person</span>
								<p>22 Sep 2015 at 5.30am</p>
							</div>
							
							<div class="take_off_landing">
								<div class="total_time_schedule">Total Time : 48 hours, 30 Minutes</div>
								
								<a href="#" class=" btn btn-success ">
									Ship
								</a>
								
							</div>
							
						</div>
						<!-- flight schedule  final-->
						
						</div><!--  Desc End -->
					</div>
					</div><!--sort_list end-->
					<!--sort_list start -->
					<div class="sorting_places_wrap  list_sorting_view">
						<div class="col-lg-2 col-md-2 col-sm-2 padding_none listlogo">
							<div class="thumb_wrape">
								<a href="#">
									<img src="http://placehold.it/330x244" alt="hotel thumb">
									<div class="overlay_title">
										<h4>emirates</h4>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<!-- Desc -->
							<div class="flight_grid_desc flight_list_desc">
								
								<!-- title End -->
								
								<!-- flight schedule -->
								<div class="flight_details_schedule">
									<div class="take_off_landing">
										<h5><a href="#">australia</a></h5>
										<div class="bottom_review_rating">
											<div class="rating_bottom">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<span class="review_right">
												<i class="fa fa-thumbs-up"></i> 52 Reviews
											</span>
										</div>
									</div>
									<div class="take_off_landing">
										<h5>Landing</h5>
										<p>22 Sep 2015 at 5.30am</p>
									</div>
									<div class="take_off_landing">
										<span class="doller">$150</span>
										<br/><span>/person</span>
										<p>22 Sep 2015 at 5.30am</p>
									</div>
									
									<div class="take_off_landing">
										<div class="total_time_schedule">Total Time : 48 hours, 30 Minutes</div>
										
										<a href="#" class=" btn btn-success ">
											Ship
										</a>
										
									</div>
									
								</div>
								<!-- flight schedule  final-->
								
								</div><!--  Desc End -->
							</div>
							</div><!--sort_list end-->
							
							<!-- sorting places section -->
							<!-- pagination section -->
							<div class="full_width pagination_bottom">
								<ul class="pagination">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
								</ul>
							</div>
							<!-- pagination section -->
						</div>
										</div>
										<!-- right main start -->
									</div>
								</div>
							</div>
							</div><!--content body end-->
							@stop
							@section('footer')
							@stop