<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require COMMON_PATH . "controllers/Common_Controller.php";
class Post extends Common_Controller {
	function __construct() {
      	parent::__construct();
      	$this->load->model('Post_model');
      	$this->header = $this->Post_model->load_css();
      	$this->footer = $this->Post_model->load_js();
    }
	public function index()
	{
		$this->data = array(
			'view' => 'post/index',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function search()
	{
		$this->data = array(
			'view' => 'post/search',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function search2()
	{
		$this->data = array(
			'view' => 'post/search2',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function dashboard()
	{
		$this->data = array(
			'view' => 'post/dashboard',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}

	public function login()
	{
		$this->data = array(
			'view' => 'post/login',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function register()
	{
		$this->data = array(
			'view' => 'post/register',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function post()
	{
		$this->data = array(
			'view' => 'post/post',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function contact()
	{
		$this->data = array(
			'view' => 'post/contact',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function sell()
	{
		$this->data = array(
			'view' => 'post/sell',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
	public function adv()
	{
		$this->data = array(
			'view' => 'post/adv',
			'data' => 'bbbb'
		);
		$this->load_template($this->header, $this->data, $this->footer);
	}
}