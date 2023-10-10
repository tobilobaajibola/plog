	<!-- LEFT -->
		<aside id="aside-main" class="aside-start bg-gradient-pink overlay-dark overlay-opacity-5 font-weight-light aside-hide-xs d-flex flex-column h-auto">



					<div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

						<!--

							All parent open navs are closed on click!
							To ignore this feature, add .js-ignore to .nav-deep
		
							Links height (paddings):
								.nav-deep-xs
								.nav-deep-sm
								.nav-deep-md  	(default, ununsed class)

							.nav-deep-hover 	hover background slightly different
							.nav-deep-bordered	bordered links


							++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
							IMPORTANT NOTE:
								Curently using ajax navigation!
								remove .js-ajax class to have regular links!
							++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
						-->
						<nav class="nav-deep nav-deep-dark nav-deep-hover pb-5">
							<ul class="nav flex-column">

								<li class="nav-item <?php if($this->uri->segment(2)== ""){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>">
										<i class="fi fi-dashboard"></i>
										<b>Dashboard</b>
									</a>
								</li>

								<?php
								if (!isset($_SESSION['user_account'])) {
								?>
								<li class="nav-item <?php if($this->uri->segment(2)== ""){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin">
										<i class="fi fi-dashboard"></i>
										<b>Statement</b>
									</a>
								</li>
								<li class="nav-item <?php if($this->uri->segment(2)== ""){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin">
										<i class="fi fi-dashboard"></i>
										<b>CRM</b>
									</a>
								</li>
								<li class="nav-item <?php if($this->uri->segment(2)== ""){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin">
										<i class="fi fi-dashboard"></i>
										<b>Report</b>
									</a>
								</li>
								<?php
								}
								else{
								?>
								
								<li class="nav-item">
									<a class="nav-link" href="#">
										<span class="group-icon float-end">
											<i class="fi fi-arrow-end-slim"></i>
											<i class="fi fi-arrow-down-slim"></i>
										</span>
										<i class="fi fi-folder-full"></i>
										<span class="badge badge-warning float-end fs--11 mt-1">new</span>
										Statement
									</a>
								
									<ul class="nav flex-column fs--15">

										<li class="nav-item <?php if($this->uri->segment(2)== "statementform"){echo "active";}?>">
										<a  class="nav-link js-ajax-modal" 	href="#"
											data-href="<?php echo base_url();?>viewstatement" 
											data-ajax-modal-size="modal-md" 
											data-ajax-modal-centered="true" 
											data-ajax-modal-callback-function=""
											>
										
											<b>Statement By Nuban</b>
										</a>
										</li>
									</ul>
								</li>
									<li class="nav-item">
									<a class="nav-link" href="#">
										<span class="group-icon float-end">
											<i class="fi fi-arrow-end-slim"></i>
											<i class="fi fi-arrow-down-slim"></i>
										</span>
										<i class="fi fi-users"></i>
										Customer/Account
									</a>
								
									<ul class="nav flex-column fs--15">

										
										<li class="nav-item <?php if($this->uri->segment(2)== "visitor_tag"){echo "active";}?>">
											<a  class="nav-link js-ajax-modal" 	href="#"
											data-href="<?php echo base_url();?>box/list_account" 
											data-ajax-modal-size="modal-lg" 
											data-ajax-modal-centered="true" 
											data-ajax-modal-callback-function=""
											>
													<b>Account Details Inline</b>
											</a>
										</li>
										<li class="nav-item <?php if($this->uri->segment(2)== "listaccount"){echo "active";}?>">
											<a class="nav-link js-ajax" href="<?php echo base_url();?>admin/listaccount">
												<b>Account Details Page</b>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										<span class="group-icon float-end">
											<i class="fi fi-arrow-end-slim"></i>
											<i class="fi fi-arrow-down-slim"></i>
										</span>
										<i class="fi fi-code"></i>
										Operator
									</a>
									<ul class="nav flex-column fs--15">
										<li class="nav-item">
											<a class="nav-link js-ajax" href="#">
												<b>Table of Code</b>
											</a>
										</li>
									</ul>
								</li>
								<!-- <li class="nav-title mt-5"></li> -->
								<li class="nav-item">
									<a class="nav-link" href="#">
										<span class="group-icon float-end">
											<i class="fi fi-arrow-end-slim"></i>
											<i class="fi fi-arrow-down-slim"></i>
										</span>
										<i class="fi fi-chart-up"></i>
										Reports
									</a>
									
									<ul class="nav flex-column fs--15">

										<li class="nav-item <?php if($this->uri->segment(2)== "report"){echo "active";}?>">
												<a class="nav-link js-ajax" href="<?php echo base_url();?>report">
													<i class="fi fi-user-plus"></i>
													<b>View Report</b>
												</a>
										</li>
										<li class="nav-item">
											<a  class="nav-link js-ajax-modal" 	href="#"
											data-href="<?php echo base_url();?>box/create_support_ticket_form" 
											data-ajax-modal-size="modal-md" 
											data-ajax-modal-centered="true" 
											data-ajax-modal-callback-function=""
											>
													<b>Request Report</b>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item <?php if($this->uri->segment(2)== "visitor"){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin/visitor">
										<i class="fi fi-user-plus"></i>
										<b>Statement</b>
									</a>
								</li>
								
								<li class="nav-item <?php if($this->uri->segment(2)== "logout"){echo "active";}?>">
									<a class="nav-link" href="<?php echo base_url();?>logout">
										<i class="fi fi-users"></i>
										<b>Logout</b>
									</a>
								</li>
								<?php
							}
							?>
							</ul>
						</nav>

					</div>

				</aside>
				