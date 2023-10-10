

				<!-- MIDDLE -->
				<div id="middle p--0" class="flex-fill">



					<!--
						PAGE TITLE
					-->
					<div class="page-title bg-transparent b-0">

						<h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">
							Dashboard
						</h1>
						
					</div>
					

					<!-- WIDGETS -->
					<div class="row gutters-sm">


						<!-- WIDGET : IMPORTS -->
						<div  class="col-12 col-xl-3 mb-3">
							<!-- start:portlet -->
							<div class="portlet">

								<div class="position-relative reveal-item bg-white shadow-lg rounded-xl p-5 p-md-3 py-xl-5 p-4-xs z-index-2">
										
										<h6 class="text-muted text-center font-weight-normal">
											MONTHLY REVENUE
										</h6>

										<div class="text-center mt-5">
<div class="bg-light p-2 mt-2 fs--14 rounded-xl">

								<div class="portlet-body">
										<div id="logcategory">

										</div>
									</div>
	                               
								</div>
							<!-- end:portlet -->
							</div>

									</div>
									<!-- /card rating -->

									<!-- link under -->
									<div class="fs--16 position-absolute left-0 right-0 bottom-0 z-index-1 pt-3 px-2">

										<div class="clearfix bg-light p-1 row-pill">
											<a href="#!" class="btn btn-pill btn-sm btn-success py-1 mb-0 float-start transition-hover-end" title="Detailed Revenue" aria-label="Detailed Revenue">View</a>
											<span class="d-block pt-1 pl-2 pr-2 text-muted text-truncate">
												view detailed revenue
											</span>
										</div>

									</div>
									<div class="card">
											 
<!-- save image button -->
<a href="#" data-chartjs-id="smartySimple" data-file-name="smartySimple" class="btn btn-sm btn-light rounded-circle chartjs-save float-end m-0" title="Save Chart" aria-label="Save Chart">
		<i class="fi fi-arrow-download m-0"></i>
</a>
<!-- /save image button -->




<!--
		
		data-chartjs-type="line|bar" 
		data-chartjs-grid="true|false|xAxes|yAxes" 
		data-chartjs-legend="false|top|bottom|left|right" 

		Color Examples
				Red:				rgb(255, 99, 132, 1)
				Orange:		 rgb(255, 159, 64, 1)
				Yellow:		 rgb(255, 205, 86, 1)
				Green:			rgb(75, 192, 192, 1)
				Blue:			 rgb(54, 162, 235, 1)
				Purple:		 rgb(153, 102, 255, 1)
				Grey:			 rgb(201, 203, 207, 1)
				
				To set opacity, change the last value (0 - 1). 
				Example:		rgb(255, 99, 132, 0.5)
				:: Use Smarty Colorpicker :)
-->
<canvas id="smartySimple" class="chartjs" 
		data-chartjs-dots="false" 
		data-chartjs-legend="top" 
		data-chartjs-grid="true" 
		data-chartjs-tooltip="false" 

		data-chartjs-title="Chart Title" 
		data-chartjs-xaxes-label="Month" 
		data-chartjs-yaxes-label="Visits" 
		data-chartjs-line-width="5" 

		data-chartjs-type="line" 
		data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]' 
		data-chartjs-datasets='[{																													 
				"label":								"Visits",
				"data":								 [20, 22, 24, 21, 23, 26, 24, 23, 21, 24, 23, 22],
				"fill":								 true,
				"backgroundColor":					"rgba(133, 145, 255, 0.5)"
		}]'></canvas>
																		
									</div>

</div>

						</div>

						<div class="col-12 col-xl-6 mb-3">
							<div class="row gutters-sm">

						<div class="col-12 col-md-6 col-xl-3 mb-3">

							<!-- small graph widget -->
							<div class="bg-white shadow-md text-dark p-5 rounded text-center">

								
								<h3 class="fs--20 mt-2">
									Application
								</h3>

							<p data-load-general-data="<?php echo base_url();?>applogs/get_total_apps<?php app_service_link($app, $service);?>"></p>



							</div>
							<!-- /small graph widget -->

						</div>



						<div class="col-12 col-md-6 col-xl-3 mb-3">

							<!-- small graph widget -->
							<div class="bg-warning shadow-md text-dark p-5 rounded text-center">

								<h3 class="fs--20 mt-2">
									Services
								</h3>

								<p data-load-general-data="<?php echo base_url();?>applogs/get_total_services<?php app_service_link($app, $service);?>"></p>


								

							</div>
							<!-- /small graph widget -->
							
						</div>
						<div class="col-12 col-md-6 col-xl-3 mb-3">

							<!-- small graph widget -->
							<div class="bg-white shadow-md text-dark p-5 rounded text-center">

								
								<h3 class="fs--20 mt-2">
									Traffic
								</h3>

								<p id="total_log">	</p>


							</div>
							<!-- /small graph widget -->

						</div>



						<div class="col-12 col-md-6 col-xl-3 mb-3">

							<!-- small graph widget -->
							<div class="bg-warning shadow-md text-dark p-5 rounded text-center">

								<h3 class="fs--20 mt-2">
									Performance
								</h3>

								<p data-load-general-data="<?php echo base_url();?>applogs/get_perfomance<?php app_service_link($app, $service);?>">
									
								</p>

								

							</div>
							<!-- /small graph widget -->
							
						</div>

					</div>
							<div class="portle">
								
								<div class="portlet-header">

									<div class="float-end dropdown">

										<a href="#!" class="btn btn-sm btn-light px-2 py-1 fs--15 mt--n3">
											View All
										</a>

									</div>


									<span class="d-block text-muted text-truncate font-weight-medium">
										Shop Imports	
									</span>

								</div>


																		
								<div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark p--0">

								<!-- content loaded via ajax! -->
								<div id="listlogservice"></div>
							</div>
								<!-- <div class="d-flex align-self-baseline w-100 py-2">
									<a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
										<i class="fi fi-arrow-end-slim"></i>
										<span>View All</span>
									</a>
								</div> -->
								<div class="card" data-load-general-data="<?php echo base_url().'applogs/list_log_category_per_hour'. app_service_link($app, $service);?>">
										




																		
								</div>
							</div>

						</div>
						<!-- /WIDGET : IMPORTS -->




						<!-- WIDGET : ORDERS -->
						<div class="col-12 col-xl-3 mb-3">

							<div class="portlet bg-dark">
								
								<div class="portlet-header">

									<div class="float-end dropdown">

										<!-- reload ajax content -->
										<a href="#!" id="summaryLogListReloadBtn" aria-label="Reload Content" class="btn btn-sm btn-light px-2 py-1 fs--15 mt--n3">
											<span class="group-icon">
												<i class="fi fi-circle-spin"></i>
												<i class="fi fi-circle-spin fi-spin"></i>
											</span>
										</a>

										<!-- dropdown -->
										<button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownLog" data-toggle="dropdownLog" aria-haspopup="true" aria-expanded="false">
											<span class="js-trigger-text">Recent</span>
											<i class="fi fi-arrow-down"></i>
										</button>

										<!--
											
											Note: .dropdown-menu-click-update
												is the key class to set the link active on click
												and close dropdown (if .dropdown-click-ignore is not set)
										
										-->
										<div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-click-update dropdown-menu-invert end-0 mt-2" aria-labelledby="dropdownLog">

											<div class="dropdown-header">
												Filter Notif.
											</div>

											<!--

												Note: these are working ajax links!
												html_frontend/documentation/plugins-sow-ajax-navigation.html

												Both plugins are working together:
													SOW : Ajax Navigation
													SOW : Ajax Content

												data-href used here, instead of href to hide
												the link from "open in new tab" actions

												NOTE: .js-ajax-text-update
													Used by SOW : Dropdown to update the text
													on button trigger! The button must have the same class!

											-->
											<a class="dropdown-item js-ajax" 
												href="#!"
												data-href="<?php echo base_url();?>applogs/list_logs" 
												data-ajax-target-container="#summaryLogList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												<span class="js-trigger-text">Recent</span>
											</a>

											<a class="dropdown-item js-ajax" 
												href="#!"
												data-href="<?php echo base_url();?>applogs/list_logs" 
												data-ajax-target-container="#summaryLogList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												<span class="js-trigger-text">Errors</span>
											</a>

											<a class="dropdown-item js-ajax" 
												href="#!"
												data-href="<?php echo base_url();?>applogs/list_logs" 
												data-ajax-target-container="#summaryLogList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												<span class="js-trigger-text">Warnings</span>
											</a>

											<small class="p-4 text-gray-500">* working ajax links</small>
										</div>
										<!-- /dropdown -->

									</div>


									<span class="d-block text-muted text-truncate font-weight-medium">
										Notifications	
									</span>

								</div>


								<!-- content loaded via ajax! -->
								<div id="summaryLogList" 
										data-ajax-url="<?php echo base_url();?>applogs/list_logs" 
										data-ajax-btn-reload="#summaryLogListReloadBtn" 
										class="js-ajax portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

									<!-- ajax content pushed here -->
									<div class="text-center p-5"><!-- loader indicator -->
										<i class="fi fi-circle-spin fi-spin fs--30 text-gray-300"></i>
									</div>

								</div>



								<!-- <div class="d-flex align-self-baseline w-100 py-2">
									<a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
										<i class="fi fi-arrow-end-slim"></i>
										<span>View All</span>
									</a>
								</div> -->
								<!-- save image button -->
<a href="#" data-chartjs-id="graphLineMixed" data-file-name="graphLineMixed" class="btn btn-sm btn-light rounded-circle chartjs-save float-end m-0" title="Save Chart" aria-label="Save Chart">
		<i class="fi fi-arrow-download m-0"></i>
</a>
<!-- /save image button -->




<!--
		
		data-chartjs-type="line|bar" 
		data-chartjs-grid="true|false|xAxes|yAxes" 
		data-chartjs-legend="false|top|bottom|left|right" 

		Color Examples
				Red:				rgb(255, 99, 132, 1)
				Orange:		 rgb(255, 159, 64, 1)
				Yellow:		 rgb(255, 205, 86, 1)
				Green:			rgb(75, 192, 192, 1)
				Blue:			 rgb(54, 162, 235, 1)
				Purple:		 rgb(153, 102, 255, 1)
				Grey:			 rgb(201, 203, 207, 1)
				
				To set opacity, change the last value (0 - 1). 
				Example:		rgb(255, 99, 132, 0.5)
				:: Use Smarty Colorpicker :)
-->
<canvas id="graphLineMixed" class="chartjs" 
		data-chartjs-dots="false" 
		data-chartjs-legend="top" 
		data-chartjs-grid="true" 
		data-chartjs-tooltip="true" 

		data-chartjs-title="Line Chart" 
		data-chartjs-xaxes-label="Month" 
		data-chartjs-yaxes-label="Visits vs Orders" 
		data-chartjs-line-width="5" 

		data-chartjs-type="line" 
		data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]' 
		data-chartjs-datasets='[{																													 
				"label":										"Visits",
				"data":										 [30, 32, 34, 31, 33, 36, 34, 63, 31, 64, 33, 32],
				"fill":										 true,
				"backgroundColor":					"rgba(201, 203, 207, 0.3)"
		},{																													 
				"label":										"Orders",
				"data":										 [20, 22, 24, 21, 23, 26, 24, 23, 21, 24, 23, 22],
				"fill":										 false,
				"backgroundColor":					"rgba(255, 99, 132, 0.6)"
		}]'
></canvas>
							</div>
							
						</div>
						<!-- /WIDGET : ORDERS -->

					</div>
					<!-- /WIDGETS -->


				</div>
				<!-- /MIDDLE -->

		
