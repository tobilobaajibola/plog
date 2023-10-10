	<!-- 
				HEADER 
				
				.header-match-aside-primary
			-->
			<header id="header" class="shadow-xs">


				<!-- NAVBAR -->
				<div class="container-fluid position-relative">

					<nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

						<div class="align-items-start">
							
							<!-- 
								sidebar toggler 
							-->
							<a href="#aside-main" class="btn-sidebar-toggle h-100 d-inline-block d-lg-none justify-content-center align-items-center p-2">
								<span class="group-icon">
									<i>
										<svg width="25" viewBox="0 0 20 20">
											<path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
											<path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
											<path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
											<path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
										</svg>
									</i>

									<i>
										<svg width="25" viewBox="0 0 47.971 47.971">
											<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
										</svg>
									</i>
								</span>
							</a>


							<!-- 
								Logo : height: 60px max
								visibility : mobile only
							-->
							
							<a class="navbar-brand aside-width border border-light bb--0 bt--0 b--0-xs h-100 d-lg-flex align-lg-items-center" href="<?php echo base_url();?>">
								<img src="<?php echo base_url();?>assets/images/logo/tajbank.png" width="100" height="40" alt="...">
							</a>

						</div>




						<!-- NAVIGATION -->
						<div class="collapse navbar-collapse" id="navbarMainNav">



							<!-- MOBILE MENU NAVBAR -->
							<div class="navbar-xs d-none">

								<!-- mobile menu button : close -->
								<button class="navbar-toggler pt-0" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
									<svg width="20" viewBox="0 0 20 20">
										<path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
									</svg>
								</button>

								<!-- 
									Optional Mobile Menu Logo 
									Logo : height: 70px max
								-->
								<a class="navbar-brand" href="<?php echo base_url();?>">
									<img src="<?php echo base_url();?>assets/images/logo/tajbank.png" width="110" height="70" alt="...">
								</a>

							</div>
							<!-- /MOBILE MENU NAVBAR -->



							<!-- Dropdowns -->
							<ul class="navbar-nav align-items-center">

							<li class="nav-item dropdown">

									<a href="#" class="nav-link nav-link-caret-hide dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavFeatures">
										<i class="fi fi-shield-ok float-start m-0"></i>
										<span>HOT LINK</span>
									</a>

									<div class="dropdown-menu dropdown-menu-hover w--300 p-0 border border-light overflow-hidden" aria-labelledby="mainNavFeatures">

										<div class="row no-gutters bg-gradient-secondary">


											<!-- REMOVE BAR IF NOT NEEDED -->
											<div class="col-2 d-none d-lg-block"><!-- empty -->
												
												<!-- text-rotate-90 , text-rotate-180 -->
												<p class="h6 font-weight-medium mb-0 text-white text-rotate-180 text-center position-absolute d-middle">
													KNOWLEGE SHARING
												</p>

											</div>

											<div class="col bg-white overflow-hidden">

												<ul class="mx-0 px-0 my-2">

													<li class="dropdown-item text-wrap">
														<a href="https://tajbankng.sharepoint.com/sites/SharepointDev/Pages/Project-Initiation.aspx" target="_blank" class="dropdown-link text-dark transition-hover-start p-3 line-height-1">
															<i class="fi fi-round-lightning float-start fs--25 mt--n2"></i>
															<span class="h5-xs d-block fs--18">Project</span>
															<span class="fs--11 text-muted text-uppercase">
																PROJECT AND INITIATIVES
															</span>
														</a>
													</li>

													<li class="dropdown-item text-wrap">
														<a href="https://tajbankng.sharepoint.com/sites/SharepointDev/Policies%20and%20SOPs/Forms/AllItems.aspx" target="_blank" class="dropdown-link text-dark transition-hover-start p-3 line-height-1">
															<i class="fi fi-graph float-start fs--25 mt--n2"></i>
															<span class="h5-xs d-block fs--18">Policies</span>
															<span class="fs--11 text-muted text-uppercase">
																POLICIES AND SOP's
															</span>
														</a>
													</li>

													<li class="dropdown-item text-wrap">
														<a href="https://tajbankng.sharepoint.com/sites/SharepointDev/Pages/survey.aspx" target="_blank" class="dropdown-link text-dark transition-hover-start p-3 line-height-1">
															<i class="fi fi-gps float-start fs--25 mt--n2"></i>
															<span class="h5-xs d-block fs--18">Survey</span>
															<span class="fs--11 text-muted text-uppercase">
																SURVEY/QUIZ
															</span>
														</a>
													</li>

												</ul>

												<div class="position-relative bg-theme-color-light py-4 px-3">

													<h6>Enterprise</h6>

													<ul class="mx-0 px-0">

														<li class="dropdown-item text-wrap bg-transparent">
															<a href="#!" class="dropdown-link bg-transparent text-dark px-2 py-1">
																<i class="fi fi-arrow-end"></i>
																QA Testing
															</a>
														</li>

														<li class="dropdown-item text-wrap bg-transparent">
															<a href="#!" class="dropdown-link bg-transparent text-dark px-2 py-1">
																<i class="fi fi-arrow-end"></i>
																API
															</a>
														</li>

													</ul>

												</div>

											</div>

										</div>

									</div>

								</li>


								<!--  -->
								<li class="nav-item dropdown">

									<a href="#!" class="nav-link nav-link-caret-hide dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavApps">
										<i class="fi fi-squared-dots float-start m-0"></i>
										<span>Apps</span>
									</a>

									<div class="dropdown-menu dropdown-menu-clean dropdown-menu-hover w--280 p-0 overflow-hidden" aria-labelledby="mainNavApps">

										<div class="bg-white">

											<!-- apps list -->
											<div class="max-h-50vh scrollable-vertical">
												<div class="overflow-hidden">
													<div class="row row-grid no-gutters p-0 m-0 list-unstyled b-0 ml--n1 mr--n1">

														<div class="col-6">
															<a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
																<i class="fi fi-support d-block fs--40"></i>
																<span class="d-block fs--15">Support</span>
															</a>
														</div>

														<div class="col-6">
															<a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
																<i class="fi fi-24 d-block fs--40"></i>
																<span class="d-block fs--15">Monitoring</span>
															</a>
														</div>

														
													</div>
												</div>
											</div>
											<!-- /apps list -->

											<div class="bg-theme-color-light shadow-dark-xs">

												<ul class="mx-0 px-0">

													<li class="dropdown-item text-wrap bg-transparent px-2 py-1">
														<a href="#!" class="dropdown-link bg-transparent text-dark py-3 px-3">
															<i class="fi fi-plus"></i>
															App Library
														</a>
													</li>

												</ul>

											</div>


										</div>

									</div>

								</li>



								<!--  -->
								<li class="nav-item dropdown">

									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavHome">
										Monitor
									</a>

									<ul class="dropdown-menu dropdown-menu-clean dropdown-menu-hover" aria-labelledby="mainNavHome">

										
										<li class="dropdown-item">
											<a class="dropdown-link" href="<?php echo base_url();?>">
												<i class="fi fi-user-plus"></i>
												Log Monitor
											</a>
										</li>
										<li class="dropdown-item">
											<a class="dropdown-link" href="<?php echo base_url();?>servicelinklogs">
												<i class="fi fi-users"></i>
												Service Monitor
											</a>
										</li>
										
									</ul>

								</li>

							</ul>
							<!-- /Dropdowns -->

						</div>
						<!-- /NAVIGATION -->



						<form 	action="index.html" 
							method="GET" 
							data-autosuggest="on" 

							data-mode="json" 
							data-json-max-results='10'
							data-json-related-title='Explore Smarty'
							data-json-related-item-icon='fi fi-star-empty'
							data-json-suggest-title='Suggestions for you'
							data-json-suggest-noresult='No results for'
							data-json-suggest-item-icon='fi fi-search'
							data-json-suggest-min-score='5'
							data-json-highlight-term='true'
							data-contentType='application/json; charset=utf-8'
							data-dataType='json'

							data-container="#sow-search-container" 
							data-input-min-length="2" 
							data-input-delay="100" 
							data-related-keywords="" 
							data-related-url="_ajax/search_suggestion_json_related.json" 
							data-suggest-url="_ajax/search_suggestion_json_suggest.json" 
							data-related-action="related_get" 
							data-suggest-action="suggest_get" 
							class="js-ajax-search sow-search sow-search-mobile-float d-flex-1-1-auto mx-4">
						<div class="sow-search-input w-100 d-flex align-items-center">

							<div class="input-group-over d-flex align-items-center w-100 h-100 rounded">

								<input placeholder="component search..." name="s" type="text" class="form-control-sow-search form-control form-control-pill b-0 bg-gray-100" value="" autocomplete="off">

								<span class="sow-search-buttons">

									<!-- search button -->
									<button type="submit" class="btn btn-primary btn-noshadow m-0 px-2 py-1 b-0 bg-transparent text-muted">
										<i class="fi fi-search fs--20"></i>
									</button>

									<!-- close : mobile only (d-inline-block d-lg-none) -->
									<a href="javascript:;" class="btn-sow-search-toggler btn btn-light btn-noshadow m-0 px-2 py-1 d-inline-block d-lg-none">
										<i class="fi fi-close fs--20"></i>
									</a>

								</span>

							</div>

						</div>

						<!-- search suggestion container -->
						<div class="sow-search-container rounded-xl w-100 p-0 hide shadow-md" id="sow-search-container">
							<div class="sow-search-container-wrapper rounded-xl">

								<!-- main search container -->
								<div class="sow-search-loader p-3 text-center hide">
									<i class="fi fi-circle-spin fi-spin text-muted fs--30"></i>
								</div>

								<!-- 
									AJAX CONTENT CONTAINER 
									SHOULD ALWAYS BE AS IT IS : NO COMMENTS OR EVEN SPACES!
								--><div class="sow-search-content rounded w-100 scrollable-vertical"></div>

							</div>
						</div>
						<!-- /search suggestion container -->

						<!-- 

							overlay combinations:
								overlay-dark opacity-* [1-9]
								overlay-light opacity-* [1-9]

						-->
						<div class="sow-search-backdrop overlay-dark opacity-3 hide"></div>

					</form>
					<!-- /SEARCH -->




					<!-- OPTIONS -->
					<ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

						

						<!-- OPTIONS -->
						<ul class="list-inline list-unstyled mb-0 d-flex align-items-end">


						
							<!-- account -->
							<li class="list-inline-item ml--6 mr--6 dropdown">

								<a href="#" id="dropdownAccountOptions" class="btn btn-sm btn-light dropdown-toggle btn-pill pl--12 pr--12" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
									
									<span class="group-icon m-0">
										<!-- <i class="fi fi-user-female"></i> -->
										<i class="fi w--15 fi-user-male"></i>
										<i class="fi w--15 fi-close"></i>
									</span>

									<span class="fs--14 d-none d-sm-inline-block font-weight-medium">
										<!-- //echo// $_SESSION['user_account']['username']; -->
										Welcome
											
										</span>
								</a>
								<div aria-labelledby="dropdownAccountOptions" class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-clean dropdown-menu-navbar-autopos dropdown-menu-invert dropdown-click-ignore p-0 mt--18 fs--15 w--300">
								
									
									<div class="dropdown-header fs--14 py-4">

										<!-- profile image -->
										<div class="w--60 h--60 rounded-circle bg-light bg-cover float-start" style="background-image:url('../../html_frontend/demo.files/images/icons/user80.png')"></div>
										
										<!-- initials - no image -->
										<!--
										<div data-initials="John Doe" data-assign-color="true" class="sow-util-initials bg-light rounded h5 w--60 h--60 d-inline-flex justify-content-center align-items-center rounded-circle float-start">
											<i class="fi fi-circle-spin fi-spin"></i>
										</div>
										-->

										<!-- user detail -->
										<span class="d-block font-weight-medium text-truncate fs--16">John Doe</span>
										<span class="d-block text-muted font-weight-medium text-truncate">john.doe@gmail.com</span>
										<small class="d-block text-muted"><b>Last Login:</b> 2019-09-03 01:48</small>

									</div>

									<div class="dropdown-divider"></div>

									<a href="#!" target="_blank" class="dropdown-item text-truncate font-weight-medium">
										Notes
										<small class="d-block text-muted">personal encypted notes</small>
									</a>

									<a href="#!" target="_blank" class="dropdown-item text-truncate font-weight-medium">
										<span class="badge badge-success float-end font-weight-normal mt-1">3 new</span>
										Messages
										<small class="d-block text-muted">internal messaging system</small>
									</a>

									<a href="#!" target="_blank" class="dropdown-item text-truncate font-weight-medium">
										<span class="badge badge-danger float-end font-weight-normal mt-1">1 unpaid</span>
										Invoices
										<small class="d-block text-muted">montly billing</small>
									</a>

									<a href="#!" class="dropdown-item text-truncate font-weight-medium">
										Account Settings
										<small class="d-block text-muted">profile, password and more...</small>
									</a>

									<a href="#!" class="dropdown-item text-truncate font-weight-medium">
										Upgrade
										<small class="d-block text-muted">upgrade your account</small>
									</a>

									<div class="dropdown-divider mb-0"></div>

									<a href="<?php echo base_url();?>logout" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore font-weight-medium pt-3 pb-3">
										<i class="fi fi-power float-start"></i>
										Log Out
									</a>
								</div>
								

							</li>

						</ul>
						<!-- /OPTIONS -->


					</nav>


					<!-- TOP NAVIGATION TOGGLER -->
					<button class="navbar-toggler shadow-xs h-auto w-auto m-0 btn btn-sm bg-white rounded-circle position-absolute end-0 mt-4 mb-1 ml--20 mr--20 z-index-2 d-none d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fi fi-bars"></i>
					</button>
					<!-- /TOP NAVIGATION TOGGLER -->

				</div>
				<!-- /NAVBAR -->

			</header>
			<!-- /HEADER -->

