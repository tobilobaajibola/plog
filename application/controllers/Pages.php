<?php
/**
 * 
 */
class Pages extends CI_Controller
{

	function homepage($app=NULL, $service=NULL)
	{
	$data= array();
	$data['app'] = $app;
	$data['service'] = $service;
	$data['page_layout']= 'pages/index';
	$this->load->view('page_layout', $data);
	}
	
	function view_pages($app=NULL, $service=NULL)
	{
	$data= array();
	$data['app'] = $app;
	$data['service'] = $service;
	$data['page_layout']= 'pages/index';
	$this->load->view('page_layout', $data);
	}


   function servicelinkpage($app=NULL, $service=NULL)
	{
	$data= array();
	$data['app'] = $app;
	$data['service'] = $service;
	$data['page_layout']= 'pages/servicelink';
	$this->load->view('page_layout', $data);
	}

}
?>