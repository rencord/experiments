<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Insert_post extends CI_Controller {
	function __construct()
	{
	parent::__construct();
	}
	function index()
	{
		$contenuto=$this->input->post('post');
		$username= $this->input->post('user');
		var_dump($contenuto);
// 		$res = $this->load->model('Insert_post',$contenuto, $username);
// 		redirect ('home' , 'refresh');
	
	}
		
}