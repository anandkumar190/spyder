

@extends('layouts.vendorlayout')
@section('body')
<!-- Row -->
<div class="row">
	<div class="col-lg-3 col-xs-12">
		<div class="panel panel-default card-view  pa-0">
			<div class="panel-wrapper collapse in">
				<div class="panel-body  pa-0">
					<div class="profile-box">
						<div class="profile-cover-pic">
							<div class="fileupload btn btn-default">
								<span class="btn-text">edit</span>
								<input class="upload" type="file">
							</div>
							<div class="profile-image-overlay"></div>
						</div>
						<div class="profile-info text-center">
							<div class="profile-img-wrap">
								<img class="inline-block mb-10" src="{{asset('vendor/spyder.png')}}" alt="user"/>
								<div class="fileupload btn btn-default">
									<span class="btn-text">edit</span>
									<input class="upload" type="file">
								</div>
							</div>	
							<h6 class="block capitalize-font pb-20">{{$data->name}}</h6>
						</div>	
						<div class="social-info">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="col-lg-9 col-xs-12">
		<div class="panel panel-default card-view pa-0">
			<div class="panel-wrapper collapse in">
				<div  class="panel-body pb-0">
					<div  class="tab-struct custom-tab-1">
						<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
							<li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>profile</span></a></li>
						</ul>



						<div class="tab-content" id="myTabContent_8">
			
							<div  id="profile_8" class="tab-pane fade active in" role="tabpanel">
								<!-- Row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="">
											<div class="panel-wrapper collapse in">
												<div class="panel-body pa-0">
													<div class="col-sm-12 col-xs-12">
														<div class="form-wrap">
															<form action="#">
																<div class="form-body overflow-hide">
																	<div class="form-group">
																		<label class="control-label mb-10" for="exampleInputuname_01">Name</label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="icon-user"></i></div>
																			<input type="text" class="form-control" id="exampleInputuname_01" value="{{$data->name}}" readonly placeholder="willard bryant">
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="control-label mb-10" >Company Name</label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="icon-user"></i></div>
																			<input type="text" class="form-control" readonly value="{{$data->company_name}}"placeholder="willard bryant">
																		</div>
																	</div>



																	<div class="form-group">
																		<label class="control-label mb-10" >GST Number</label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="icon-user"></i></div>
																			<input type="text" class="form-control" readonly value="{{$data->gstin}}"placeholder="willard bryant">
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="control-label mb-10" >CIN Number</label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="icon-user"></i></div>
																			<input type="text" class="form-control" readonly value="{{$data->cin}}"placeholder="willard bryant">
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="control-label mb-10" for="exampleInputEmail_01">Email </label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																			<input type="email" class="form-control" readonly id="exampleInputEmail_01" 
                                                                              value="{{$data->email}}"
																			placeholder="xyz@gmail.com">
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="exampleInputContact_01">Contact number</label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="icon-phone"></i></div>
																			<input type="email" class="form-control" id="exampleInputContact_01"  readonly value="{{$data->mobile}}" placeholder="9293883334">
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="exampleInputpwd_01">Password</label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="icon-lock"></i></div>
																			<input type="password" class="form-control" id=" exampleInputpwd_01" value="{{$data->name}}"  readonly placeholder="Enter pwd" value="password">
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10">Gender</label>
																		<div>
																			<div class="radio">
																				<input type="radio" name="radio1" id="radio_01" value="option1" checked="">
																				<label for="radio_01">
																				M
																				</label>
																			</div>
																			<div class="radio">
																				<input type="radio" name="radio1" id="radio_02" value="option2">
																				<label for="radio_02">
																				F
																				</label>
																			</div>
																		</div>
																	</div>
<!-- 																	<div class="form-group">
																		<label class="control-label mb-10">Country</label>
																		<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																			<option value="Category 1">USA</option>
																			<option value="Category 2">Austrailia</option>
																			<option value="Category 3">India</option>
																			<option value="Category 4">UK</option>
																		</select>
																	</div> -->
																</div>
																<div class="form-actions mt-10">			*Note: if u want  change  profile contact Suppport Team<br>
																	<button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
																</div>				
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
		</div>
		
			
	</div>
</div>
<!-- /Row -->

@endsection