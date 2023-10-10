<!-- task list -->
											<div id="task_list_today" class="max-h-500 scrollable-vertical scrollable-styled-dark align-self-baseline h-100 max-h-500 w-100 ">

										
												<?php 
												foreach ($log_list as $log_lists) {
												if($log_lists['statusgroup'] == '200'){
													$status_color = 'success';
												}
												elseif ($log_lists['statusgroup'] == '400') {
													$status_color = 'danger';
												}
												elseif ($log_lists['statusgroup'] == '500') {
													$status_color = 'danger';
												}
												else{
													$status_color = 'secondary-soft';
												}
												?>

												<!-- item -->
												<div class="border-bottom border-light">
													<div class="d-flex align-items-center p-2 border-left border-<?php echo $status_color;?> bw--3">

														

														<div class="flex-fill text-truncate line-height-1">
															<a href="<?php echo base_url().'app/'.$log_lists['app_id'].'/'.$log_lists['service_id'];?>" class="text-<?php echo $status_color;?>"><?php echo '['.$log_lists['status'] .'] '. $log_lists['statusdesc'];?></a>
															<a href="#!" class="fs--13 d-block text-white p--2">From <?php echo $log_lists['app_name'].' - ('.$log_lists['service_name'].') - '.$log_lists['ipaddress'];?></a>
															<!-- <p class="mb--0">30 min. ago</p> -->
														
															<p class="p--1 mb--0 text-small float-end"><?php echo timeago($log_lists['datetime']);?></p>
																</div>
														</div>

												</div>
												<!-- /item -->
												<?php 
											}
											?>



											</div>
											<!-- /task list -->
