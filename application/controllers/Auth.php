<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$this->template->display('auth/dashboard');
	}

	public function table()
	{
		$this->template->display('auth/table');
	}

	public function forms()
	{
		$this->template->display('auth/forms');
	}

	public function charts()
	{
		$this->template->display('auth/charts');
	}

	public function login()
	{
		$this->load->view('auth/login');
	}
}
