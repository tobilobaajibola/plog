<?php 

class Applog extends CI_Model
{
	
	function insertlog($logdata)
	{
		 $this->load->database('default', TRUE)->insert('status_log', $logdata);
	}

	// -- list services and erro count 
	function get_service_log_count($app_id=NULL, $service_id=NULL){
		if (!empty($app_id)) {
		$app_id = 'and l.appid = '.$app_id;
	}
	if (!empty($service_id)) {
		$service_id = 'and l.service_id = '.$service_id;
	}
		$query   = $this->db->query(" SELECT a.app_name, s.app_id, s.service_id, s.service_name, a.hostip ipaddress, count(*)log_count, (select max(datetime) from alerts.status_log  where service_id = l.service_id )lastlog,
			(select count(*) from alerts.status_log  where service_id = l.service_id and statusgroup >= 200 and statusgroup <= 299)Success,
			(select count(*) from alerts.status_log  where service_id = l.service_id and statusgroup >= 400 and statusgroup <= 499)Warning,
			(select count(*) from alerts.status_log  where service_id = l.service_id and statusgroup >= 500 and statusgroup <= 599)Failure  
			FROM 
			alerts.application a,  alerts.service s, alerts.status_log l
			where 
			l.datetime >= '2022-07-22'
			and l.service_id = s.service_id
			and l.appid = s.app_id
			and l.appid = a.app_id
			and s.app_id = a.app_id
			$app_id $service_id
			group by s.service_id, a.app_id
			order by datetime desc ");
		return $query->result_array();
	}

	function get_log_category($app_id, $service_id){
				if (!empty($app_id)) {
				$app_id = 'and appid = '.$app_id;
					}
					if (!empty($service_id)) {
						$service_id = 'and service_id = '.$service_id;
					}
						$query = $this->db->query("
				SELECT count(*)Response_code, statusgroup,  (select group_color from alerts.status_group where group_code = status_log.statusgroup )status_color
				FROM alerts.status_log  
				where 
				datetime >= '2022-07-22'
				$app_id $service_id
				group by statusgroup;
				");
						return $query->result_array();
	}

	function get_log_list($app_id=NULL, $service_id=NULL){
			if (!empty($app_id)) {
				$app_id = 'and l.appid = '.$app_id;
			}
			if (!empty($service_id)) {
				$service_id = 'and l.service_id = '.$service_id;
			}
				$query   = $this->db->query("select *,  a.app_name, s.service_name from 
		alerts.application a,  alerts.service s, alerts.status_log l
		where
		l.service_id = s.service_id
		and l.appid = s.app_id
		and l.appid = a.app_id
		and s.app_id = a.app_id
		$app_id
		$service_id
		order by datetime desc
		limit 100");
				return $query->result_array();
			}


	// get the total traffic within a period
	function get_total_log($app_id=NULL, $service_id=NULL){
		if (!empty($app_id)) {
				$app_id = 'and appid = '.$app_id;
			}
			if (!empty($service_id)) {
				$service_id = 'and service_id = '.$service_id;
			}
		$query   = $this->db->query("select count(rowid)as count , (select count(*) from alerts.status_log  where  statusgroup >= 200 and statusgroup <= 299 $app_id $service_id)success_count from alerts.status_log where appid > 0 $app_id $service_id ");
		return $query->row_array();
	}

	function get_total_app(){
	
		$query   = $this->db->query("select count(app_id) as count from  alerts.application");
		return $query->row_array();
	}

	function get_total_services(){

		$query   = $this->db->query("select count(service_id) as count from alerts.service");
		return $query->row_array();
	}

		function get_log_category_perhour($statusgroup){
		$query = $this->db->query("
SELECT count(*)Response_code, statusgroup,  (select group_color from alerts.status_group where group_code = status_log.statusgroup )status_color
FROM alerts.status_log where statusgroup  $statusgroup
group by statusgroup, hour(datetime);
");
		return $query->result_array();
	}





}