<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH . "third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
      	function ext_view($view, $vars = array(), $return = FALSE) {
	    $this->_ci_view_paths = array(TEMPLATE_PATH => TRUE) + $this->_ci_view_paths;
	    // var_dump(method_exists($this, '_ci_object_to_array'));
	    if (method_exists($this, '_ci_object_to_array')){
			return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
		} else {
			return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_prepare_view_vars($vars), '_ci_return' => $return));
		}
	}
}
