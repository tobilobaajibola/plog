<?php

/**
 * 
 */
class Servicelinklogs extends CI_Controller
{


	function create_servicelink_logs()
	{
		   
			// get servers to monitor
			$service_link = $this->Servicelinklog->get_service_link();
			if(!empty($service_link)){
			foreach ($service_link as $service_links) {
			$url = $service_links['link_url'];
		   // var_dump($_REQUEST);
      		$ch = curl_init($url);
		 	 curl_setopt_array($ch, [
		    CURLOPT_AUTOREFERER    => true,
		    CURLOPT_CONNECTTIMEOUT => 5,
		    CURLOPT_ENCODING       => "",
		    CURLOPT_FOLLOWLOCATION => true,
		    CURLOPT_MAXREDIRS      => 1,
		    CURLOPT_NOBODY         => true,
		    CURLOPT_SSL_VERIFYHOST => false,
		    CURLOPT_SSL_VERIFYPEER => false,
		    CURLOPT_TIMEOUT        => 5,
		    // It's very important to let other webmasters know who's probing their servers.
		    CURLOPT_USERAGENT      => "Mozilla/5.0 (compatible; StackOverflow/0.0.1; +https://codereview.stackexchange.com/)",
		  ]);
		  curl_exec($ch);
		  $statuscode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  $primary_ip = curl_getinfo($ch, CURLINFO_PRIMARY_IP );
		  curl_close($ch);

		  // if ($code !== 200) {
		  //   throw new LogicException("The URL doesn’t exists (more specifically isn’t reachable).");
		  // }
		  if($statuscode !== 0){
		  if (($statuscode >= 100) && ($statuscode <= 199)){
		  	$status_description = '';
		  	$status = 'Warning';
		  }
		  elseif(($statuscode >= 200) && ($statuscode <=299)){
		  	$status_description = 'Successful';
		  	$status = 'Success';
		  } 
		  elseif(($statuscode >= 300) && ($statuscode <=399)){
		  	$status_description = 'Redirection';
		  	$status = 'Error';
		  }
		  elseif(($statuscode >= 400) && ($statuscode <=499)){
		  	$status_description = 'Client Error';
		  	$status = 'Error';
		  }
		  elseif(($statuscode <= 500) && ($statuscode >= 599)){
		  	$status_description = 'Server Error';
		  	$status = 'Error';
		  }
		}
		else{
		  	$status_description = 'Not reachable';
		  	$status = 'Danger'; 	
		  	$statuscode = 400;
		  }


		  // return true;
		$logdata = array('hostname' => $service_links['link_name'], 
						'ipaddress' =>  $service_links['link_ip'], 
						'appid' =>  $service_links['app_id'], 
						'service_id' =>  $service_links['service_id'], 
						'statusgroup' =>  $statuscode, 
						'statusdesc' => $status_description, 
						'status' =>   $status
						 );
		$this->Servicelinklog->insert_service_link_log($logdata);
		// var_dump($logdata);
	}
			}
			
	}


	function list_servicelink_logs($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['log_list'] = $this->Servicelinklog->get_service_link_log_list($app_id, $service_id);
	$this->load->view('box/servicelink_list_log', $data);
	}

	function list_servicelink_service_log($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['log_service'] = $this->Servicelinklog->get_service_link_log_count($app_id, $service_id);
	// foreach ($data['log_service'] as $log_services) {
	// echo $log_services['Success'] .'</br>';
	// 	// code...
	// }
	// $log_services['log_count']
	$this->load->view('box/list_log_servicelink', $data);
	}

	function list_servicelink_log_category($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['list_log_category'] = $this->Servicelinklog->get_service_link_log_category($app_id, $service_id);
	// var_dump($data['list_log_category']);
	$this->load->view('box/servicelink_log_category', $data);
	}
}