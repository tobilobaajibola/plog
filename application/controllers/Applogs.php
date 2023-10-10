<?php

/**
 * 
 */
class Applogs extends CI_Controller
{
	
	function createtest(){
		     header('Content-Type: application/json; charset=utf-8');
        Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
        Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
        Header('Access-Control-Allow-Methods: GET,  POST'); //method allowed
		// var_dump($_POST);
		$type = $_POST['type'];
foreach ($type as $key => $value) {
		$message_data = array('destination' => $_POST['destination'][$key],
		 							'source' => $_POST['source'][$key],
		 							'text' => $_POST['destination'][$key],
		 							'datacoding' => $_POST['datacoding'][$key],
		 							'uniqueid'=>$_POST['uniqueid'][$key]);
		// post each array to database or to wherever then pass the response to another array
		$message_response[] = array('Errorcode' => '0',
									'ErrorDescription' => 'Success',
									'SMS'=>array('Errorcode'=> 0,
												'id' => 123,
												'uniqueid' => $message_data['uniqueid'],
											    'OriginatingAddress'=>'TAJBANK'));
	}

	echo json_encode($message_response);
	}

	function createlogs()
	{

		   
		   // var_dump($_REQUEST);
        header('Content-Type: application/json; charset=utf-8');
        Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
        Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
        Header('Access-Control-Allow-Methods: GET,  POST'); //method allowed
		$logdata = array('hostname' => $this->input->post('hostname'), 
						'ipaddress' =>  $this->input->post('ipaddress'), 
						'appid' =>  $this->input->post('appid'), 
						'service_id' =>  $this->input->post('service_id'), 
						'statusgroup' =>  $this->input->post('statusgroup'), 
						'statusdesc' =>  $this->input->post('message'), 
						'status' =>  $this->input->post('response')
						 );
		// var_dump($logdata);
		$this->Applog->insertlog($logdata);
	}


	function list_logs($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['log_list'] = $this->Applog->get_log_list($app_id, $service_id);
	$this->load->view('box/list_log', $data);
	}

	function list_service_log($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['log_service'] = $this->Applog->get_service_log_count($app_id, $service_id);
	$this->load->view('box/list_log_service', $data);
	}

	function list_log_category($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['list_log_category'] = $this->Applog->get_log_category($app_id, $service_id);
	$this->load->view('box/log_category', $data);
	}

// 	function list_log_category_per_hour(){
// 		$data['success_log_category'] = $this->Applog->get_log_category_perhour( '<= 299');
// 		$data['error_log_category'] = $this->Applog->get_log_category_perhour('>= 300');
// 		$log_categories = array();
// 		echo = '20, 22, 24, 21, 23, 26, 24, 23, 21, 24, 23, 22';
// 	$this->load->view('box/log_category_per_hour', $data);
// }



	function create_avail_logs()
	{
		   
			// get servers to monitor
			$service_link = $this->Serverlog->get_service_link();
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
  		  $connecttime = curl_getinfo($curl, CURLINFO_CONNECT_TIME_T );
		  curl_close($ch);

		  // if ($code !== 200) {
		  //   throw new LogicException("The URL doesn’t exists (more specifically isn’t reachable).");
		  // }
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
		  	$status_description = 'Cleint Error';
		  	$status = 'Error';
		  }
		  elseif(($statuscode <= 500) && ($statuscode >= 599)){
		  	$status_description = 'Server Error';
		  	$status = 'Error';
		  }
		  elseif($statuscode < 100){
		  	$status_description = 'Not reachable';
		  	$status = 'Warning';
		  	echo $statuscode;
		  }

		  // return true;
		$logdata = array('hostname' => $service_links['link_name'], 
						'ipaddress' =>  $service_links['link_ip'], 
						'appid' =>  $service_links['id'], 
						'service_id' =>  $service_links['id'], 
						'statusgroup' =>  $statuscode, 
						'statusdesc' => $status_description, 
						'status' =>   $status
						 );
		$this->Serverlog->insert_avail_log($logdata);
		// var_dump($logdata);
	}
			}
			
	}


	function list_avail_logs($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['log_list'] = $this->Applog->get_log_list($app_id, $service_id);
	$this->load->view('box/list_log', $data);
	}

	function list_avail_service_log($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['log_service'] = $this->Applog->get_service_log_count($app_id, $service_id);
	$this->load->view('box/list_log_service', $data);
	}


	function list_avail_log_category($app_id=NULL, $service_id=NULL){
	$data= array();
	$data['list_log_category'] = $this->Applog->get_log_category($app_id, $service_id);
	$this->load->view('box/log_category', $data);
	}


	function get_total_apps($app_id=NULL, $service_id=NULL){
	$data['total_log'] = $this->Applog->get_total_app($app_id, $service_id);
	echo $data['total_log']['count'];
	}

	function get_total_services($app_id=NULL, $service_id=NULL){
	$data['total_services'] = $this->Applog->get_total_services($app_id, $service_id);
	echo $data['total_services']['count'];
	}

	function get_total_logs($app_id=NULL, $service_id=NULL){
	$data['total_apps'] = $this->Applog->get_total_log($app_id, $service_id);
	echo $data['total_apps']['count'];
	}

	function get_perfomance($app_id=NULL, $service_id=NULL){
		// total log count * total success / 100
	$data['total_apps'] = $this->Applog->get_total_log($app_id, $service_id);
	echo round(($data['total_apps']['success_count']/$data['total_apps']['count'])*100).'%';

	}
}