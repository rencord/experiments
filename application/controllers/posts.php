<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Posts extends CI_Controller {
	function __construct()
	 {
		parent::__construct();
		$this->load->model('posts_model');
	 }
	
	function index()
	{
		$contenuto= $this->input->post('post');
		$username= $this->input->post('user');
		var_dump($contenuto);
		var_dump($username);
		$this->posts_model->insert($contenuto,$username);
		redirect ('home', 'refresh');
	}
}
