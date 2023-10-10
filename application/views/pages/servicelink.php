		<span data-load-general-data="<?php echo base_url();?>servicemonitor<?php app_service_link($app, $service);?>"></span>


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

								

								<div class="portlet-body">
										<div id="servicelinklogcategory">

										</div>
									</div>
	                               
								</div>
							<!-- end:portlet -->

						</div>

						<div class="col-12 col-xl-6 mb-3">
							<div class="portlet">
								
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
								<div id="listlogservicelink"></div>
							</div>
								<!-- <div class="d-flex align-self-baseline w-100 py-2">
									<a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
										<i class="fi fi-arrow-end-slim"></i>
										<span>View All</span>
									</a>
								</div> -->

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
												data-href="<?php echo base_url();?>servicelinklogs/list_servicelink_logs<?php app_service_link($app, $service);?>" 
												data-ajax-target-container="#summaryservicelinkLogList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												<span class="js-trigger-text">Recent</span>
											</a>

											<a class="dropdown-item js-ajax" 
												href="#!"
												data-href="<?php echo base_url();?>servicelinklogs/list_servicelink_logs<?php app_service_link($app, $service);?>" 
												data-ajax-target-container="#summaryservicelinkLogList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												<span class="js-trigger-text">Errors</span>
											</a>

											<a class="dropdown-item js-ajax" 
												href="#!"
												data-href="<?php echo base_url();?>servicelinklogs/list_servicelink_logs<?php app_service_link($app, $service);?>" 
												data-ajax-target-container="#summaryservicelinkLogList" 
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
								<div id="summaryservicelinkLogList" 
										data-ajax-url="<?php echo base_url();?>servicelinklogs/list_servicelink_logs<?php app_service_link($app, $service);?>" 
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

							</div>

						</div>
						<!-- /WIDGET : ORDERS -->

					</div>
					<!-- /WIDGETS -->


				</div>
				<!-- /MIDDLE -->

		
