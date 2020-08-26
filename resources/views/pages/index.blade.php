<!DOCTYPE html>
<html>
<head>
	<title>Stylist @ Home</title>
    <link rel="shortcut icon" type="image/png" href="favicon.webp">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/css/bootstrap-datetimepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/css/selectbox.css')}}">


	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/css/gsdk-bootstrap-wizard.css')}}" /> -->

	<link rel="stylesheet" type="text/css" href="{{asset('css/css/common.css')}}">
</head>
<body>
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-2"><a href="javascript:void(0);" id="logo"><img src="images/logo.svg" class="fw"></a></div>
			
			<div class="col-md-6">
				<h1>Stylist @ Home</h1>
			</div>

			<div class="col-md-3">
				<a href="https://www.darlingafrica.com/" target="_blank" id="back">BACK TO WEBSITE</a>
			</div>
		</div>
	</div>
</header>

<section class="fw txc" id="main">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-5" style="padding: 0px">
			<div id="sidebar">
				<img src="images/Banner.png">
				<div class="col-md-12">
					<div id="sidebar_desc">
						<!-- <h2></h2> -->
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam metus turpis, ornare vel varius fermentum, auctor sed ligula. Maecenas a diam sem. Vivamus dignissim, sapien nec accumsan sodales, dolor eros aliquam ligula, ac vulputate mi libero vel odio. Sed vel turpis nisi. Proin et enim id ligula convallis porttitor nec et nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam metus turpis, ornare vel varius fermentum, auctor sed ligula. Maecenas a diam sem. Vivamus dignissim, sapien nec accumsan sodales, dolor eros aliquam ligula, ac vulputate mi libero vel odio. Sed vel turpis nisi. Proin et enim id ligula convallis porttitor nec et nunc.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-7" style="padding: 0px">



	<div id="content">
		
			<div class="col-md-6">


			<p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam metus turpis, ornare vel varius fermentum, auctor sed ligula consectetur.</p>

            <!--     Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="" method="" autocomplete="off">

						<div class="wizard-navigation" style="display: none;">
							<ul>
	                            <li><a href="#location_products" data-toggle="tab">01</a></li>
	                            <li><a href="#timeslots" data-toggle="tab">02</a></li>
	                            <li><a href="#personal_details" data-toggle="tab">03</a></li>
	                        </ul>
						</div>

                        <div class="tab-content">

                            <div class="tab-pane" id="location_products">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<select>
												<option value="">Select Location</option>
												<option value="Location 01">Location 01</option>
												<option value="Location 02">Location 02</option>
												<option value="Location 03">Location 03</option>
											</select>
											<span class="icon location"></span>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group">
											<select>
												<option value="">Select Services</option>
												<option value="Braiding">Braiding</option>
												<option value="Croaching">Croaching</option>
												<option value="Weaving">Weaving</option>
												<option value="Hair Treatment">Hair Treatment</option>
												<option value="Hair Relaxation">Hair Relaxation</option>
											</select>
											<span class="icon service"></span>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group">
											<select>
												<option value="">Select Product</option>
												<option value="Havana Twist">Havana Twist</option>
												<option value="Bantu Locs">Bantu Locs</option>
												<option value="Brazilian Wave">Brazilian Wave</option>
											</select>
											<span class="icon product"></span>
										</div>
									</div>
								</div>
                            </div>


                            <div class="tab-pane" id="timeslots">

								<div class="row">
									
									<div class="col-md-12">
										<p class="timeslot_para">Please select your preferred timeslots:</p>
									</div>

									<div class="col-md-12">
										<div class="date_time">
											<div class="input-group">
												<input type="text" name="preferred_date" placeholder="Select Date" class="input-field preferred_date">
												<span class="icon date"></span>
											</div>
										</div>
										<div class="date_time time_filed">
											<div class="input-group">
												<select>
													<option value="">Timeslot</option>
													<option value="9am to 10am">9am to 10am</option>
													<option value="10am to 11am">10am to 11am</option>
													<option value="11am to 12pm">11am to 12pm</option>
													<option value="12pm to 1pm">12pm to 1pm</option>
													<option value="1pm to 2pm">1pm to 2pm</option>
													<option value="2pm to 3pm">2pm to 3pm</option>
													<option value="3pm to 4pm">3pm to 4pm</option>
													<option value="4pm to 5pm">4pm to 5pm</option>
												</select>
												<span class="icon time"></span>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="date_time">
											<div class="input-group">
												<input type="text" name="preferred_date" placeholder="Select Date" class="input-field preferred_date">
												<span class="icon date"></span>
											</div>
										</div>
										<div class="date_time time_filed">
											<div class="input-group">
												<select>
													<option value="">Timeslot</option>
													<option value="9am to 10am">9am to 10am</option>
													<option value="10am to 11am">10am to 11am</option>
													<option value="11am to 12pm">11am to 12pm</option>
													<option value="12pm to 1pm">12pm to 1pm</option>
													<option value="1pm to 2pm">1pm to 2pm</option>
													<option value="2pm to 3pm">2pm to 3pm</option>
													<option value="3pm to 4pm">3pm to 4pm</option>
													<option value="4pm to 5pm">4pm to 5pm</option>
												</select>
												<span class="icon time"></span>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="date_time">
											<div class="input-group">
												<input type="text" name="preferred_date" placeholder="Select Date" class="input-field preferred_date">
												<span class="icon date"></span>
											</div>
										</div>
										<div class="date_time time_filed">
											<div class="input-group">
												<select>
													<option value="">Timeslot</option>
													<option value="9am to 10am">9am to 10am</option>
													<option value="10am to 11am">10am to 11am</option>
													<option value="11am to 12pm">11am to 12pm</option>
													<option value="12pm to 1pm">12pm to 1pm</option>
													<option value="1pm to 2pm">1pm to 2pm</option>
													<option value="2pm to 3pm">2pm to 3pm</option>
													<option value="3pm to 4pm">3pm to 4pm</option>
													<option value="4pm to 5pm">4pm to 5pm</option>
												</select>
												<span class="icon time"></span>
											</div>
										</div>
									</div>

								</div>

                            </div>


                            <div class="tab-pane" id="personal_details">

								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<input type="text" name="fullname" placeholder="Name" class="input-field">
											<span class="icon name"></span>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group">
											<input type="text" name="email" placeholder="Email" class="input-field">
											<span class="icon email"></span>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group">
											<input type="text" name="mobile" placeholder="Mobile" class="input-field">
											<span class="icon mobile"></span>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<textarea placeholder="Address" class="input-field"></textarea>
											<span class="icon address"></span>
										</div>
									</div>
								</div>
                            </div>


                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->

            <div id="success_msg">
            	<p>The form has been successfully submitted</p>
            </div>


					</div>
			</div>


		</div>

	</div>
</div>



</section>


<footer class="fw">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<p>&copy;2020 DARLING</p>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="{{asset('js/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/js/jquery.selectBox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/js/moment-with-locales.js')}}"></script>
<script type="text/javascript" src="{{asset('js/js/bootstrap-datetimepicker.js')}}"></script>


<script src="{{asset('js/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('js/js/gsdk-bootstrap-wizard.js')}}"></script>
<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{asset('js/js/jquery.validate.min.js')}}"></script>


<script type="text/javascript" src="{{asset('js/js/main.js')}}"></script>

</body>
</html>