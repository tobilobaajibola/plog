<?php 

class Servicelinklog extends CI_Model
{
	

	// -- list services and erro count 
	function get_service_link_log_count($app_id=NULL, $service_id=NULL){
		if (!empty($app_id)) {
		$app_id = 'and l.appid = '.$app_id;
	}
	if (!empty($service_id)) {
		$service_id = 'and l.service_id = '.$service_id;
	}
		$query   = $this->db->query(" SELECT a.app_name, s.app_id, s.service_id, s.link_name, a.hostip ipaddress, (select count(*) from alerts.service_link_log  where service_id = s.service_id)log_count, (select max(datetime) from alerts.service_link_log  where service_id = s.service_id )lastlog,
			(select count(*) from alerts.service_link_log  where service_id = s.service_id and statusgroup >= 200 and statusgroup <= 299)Success,
			(select count(*) from alerts.service_link_log  where service_id = s.service_id and statusgroup >= 300 and statusgroup <= 399)Warning,
			(select count(*) from alerts.service_link_log  where service_id = s.service_id and statusgroup >= 400 and statusgroup <= 599)Failure  
			FROM 
			alerts.application a,  alerts.service_link s
			where 
		    s.app_id = a.app_id
			$app_id $service_id ");
		return $query->result_array();
	}

	function get_service_link_log_category($app_id, $service_id){
				if (!empty($app_id)) {
				$app_id = 'and appid = '.$app_id;
					}
					if (!empty($service_id)) {
						$service_id = 'and service_id = '.$service_id;
					}
						$query = $this->db->query("
				SELECT count(*)Response_code, statusgroup,  (select group_color from alerts.status_group where group_code = service_link_log.statusgroup )status_color
				FROM alerts.service_link_log  
				where 
				datetime >= '2022-07-22'
				$app_id $service_id
				group by statusgroup;
				");
						return $query->result_array();
	}

	function get_service_link_log_list($app_id=NULL, $service_id=NULL){
			if (!empty($app_id)) {
				$app_id = 'and l.appid = '.$app_id;
			}
			if (!empty($service_id)) {
				$service_id = 'and l.service_id = '.$service_id;
			}
				$query   = $this->db->query("select *, (select app_name from alerts.application where app_id = l.appid)app_name, (select link_name from alerts.service_link where service_id = l.service_id and app_id = l.appid)link_name from alerts.service_link_log l where l.service_id = l.service_id 
		$app_id
		$service_id
		order by datetime desc
		limit 100");
				return $query->result_array();
			}





	// Availability

function insert_service_link_log($logdata)
	{
		 $this->load->database('default', TRUE)->insert('service_link_log', $logdata);
	}

	function get_service_link(){
		$query_service_link   = $this->db->query("select * from alerts.service_link");
		return $query_service_link->result_array();

	}

}