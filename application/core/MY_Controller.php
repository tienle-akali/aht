<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	function __construct() {
		parent::__construct ();
		
		// set header charset of ouput is UTF-8
		$this->output->set_header ('Content-Type: text/html; charset=UTF-8');
	}
	

	protected function queryApi($method, $function, array $data = array(), array $options = array()) {
		
		// load url from config
		$url = $theme = $this->config->item('server_api_url');
		// execute query api via services server
		$result = false;
		if($method == METHOD_GET) {
			
			$result = $this->restclient->get($url . $function, $data, $options);
			
			
		}
		
		elseif($method == METHOD_POST) {
			$result = $this->restclient->post($url . $function, $data, $options);
		}
		elseif($method == METHOD_PUT) {
			$result = $this->restclient->put($url . $function, $data, $options);
		}
		elseif($method == METHOD_DELETE) {
			$result = $this->restclient->delete($url . $function, $data, $options);
		}
		//$this->restclient->debug();
		
		// return data or boolean
		return $result;
	}
}