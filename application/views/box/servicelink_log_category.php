	<?php
		$chat_array  = array();
		foreach ($list_log_category as $list_log_categories) {		
			$chat_array[] = '{
				"label": "'.$list_log_categories['statusgroup'].'",
				"data": "'.$list_log_categories['Response_code'].'",
				"color": "#'.$list_log_categories['status_color'].'"
			}';
		}
		?>
<div class="bg-light p-2 mt-2 fs--14 rounded-xl">
	<div class="flot-chart h--400" 
		
		data-flot-type="pie" 
		data-flot-legend-show="true" 

		data-flot-click="modal" 
		data-flot-click-url="_ajax/modal_flot.html?demo=true" 
		data-flot-modal-size="modal-lg" 
		data-flot-modal-backdrop="static" 
		data-flot-modal-centered="true" 

		data-flot-id="pie_example1"
		data-flot-pie-data='[<?php echo implode( ', ', $chat_array );?>]'
		>
	</div>

</div>

<script src="<?php echo base_url();?>assets/js/core.min.js"></script>
