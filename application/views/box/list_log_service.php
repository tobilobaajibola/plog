
<div id="clipboard_7" class="p--5 bg-white rounded">
		<table class="table table-striped bg-primary-soft">
			<thead>
				<tr>
					<th scope="col">Application</th>
					<th scope="col">Service</th>
					<th scope="col">IP</th>
					<th scope="col">Total</th>
					<th scope="col">Success</th>
					<th scope="col">Warning</th>
					<th scope="col">Failure</th>
					<th scope="col">Lastlog</th>
				</tr>
			</thead>

			<tbody>
				<?php
				foreach($log_service as $log_services) {
				?>
				<tr>
					<th scope="row"><a href="<?php echo base_url().'app/'.$log_services['app_id'];?>"><?php echo $log_services['app_name'];?></a></th>
					<td><a href="<?php echo base_url().'app/'.$log_services['app_id'].'/'.$log_services['service_id'];?>"><?php echo $log_services['service_name'];?></a></td>
					<td class="text-info"><?php echo $log_services['ipaddress'];?></td>
					<td class="text-info"><?php echo $log_services['log_count'];?></td>
					<td class="text-success bold"><?php echo round(($log_services['Success']/$log_services['log_count'])*100);?>%</td>
					<td class="text-warning bold"><?php echo round(($log_services['Warning']/$log_services['log_count'])*100);?>%</td>
					<td class="text-danger bold"><?php echo round(($log_services['Failure']/$log_services['log_count'])*100);?>%</td>
					<td class="text-danger bold fs--12"><?php echo timeago($log_services['lastlog']);?></td>
				</tr>
				<?php
			}
				?>
		</table>
	</div>
