<?php 
class Login extends CI_Controller
{
	function __construct()
	 {
		parent::__construct();
	 }
	 
	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('login/login_view');
	}
}