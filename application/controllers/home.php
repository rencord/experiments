<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('posts_model');
	}

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$id = $this->posts_model->get_user_id($data['username']);
		$posts_id= $this->posts_model->get_posts_id($id);
		$posts= $this->posts_model->get_posts($posts_id);
		var_dump($posts);
		$data['posts'] = $posts;
		$this->load->helper(array('form'));
		$this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>

