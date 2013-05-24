<?php

class Avvocato extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('avvocato_model');
	}
	public function index()
	{
		$data['bucchi']= 'attaccante';
		$data['name'] = 'World';
// 		var_dump($row);
		$this->load->view('avvocato/templates/header');
		$this->load->view('avvocato/index', $data);
		$this->load->view('avvocato/templates/footer');
	
		
	}
	
	public function crea()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nome','Nome', 'required');
		$this->form_validation->set_rules('cognome','Cognome', 'required');
		
		if($this->form_validation->run() === FALSE)
		 {
			$this->load->view('avvocato/templates/header');
			$this->load->view('avvocato/crea');
			$this->load->view('avvocato/templates/footer');
		 }
		 else
		 {
		 
			$this->avvocato_model->set_cl();
			$this->load->view('avvocato/successo');
			
			
			}
	}
	
	public function visualizza()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');	
		$data['cl']=$this->avvocato_model->get_cl();
		$this->load->view('avvocato/templates/header');
		$this->load->view('avvocato/visualizza',$data);
		$this->load->view('avvocato/templates/footer');
	}
	
	public function delete()
	{
		$ris = $this->avvocato_model->delete_cl();
		if($ris)
		{
			$this->load->view('avvocato/templates/header');
			$this->load->view('avvocato/visualizza');
			$this->load->view('avvocato/templates/footer');
		}
		else
			$this->load->view('avvocato/fail');
	}
  
	public function modify()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$id = $this->input->post('id');
		$data['cliente']= $this->avvocato_model->get_cli($id);
		if($data)
		{
			$this->load->view('avvocato/templates/header');
			$this->load->view('avvocato/modify', $data);
			$this->load->view('avvocato/templates/footer');
		}
		else
			$this->load->view('avvocato/fail');
		
	}
	public function modified()
	{
		$ris=$this->avvocato_model->update_cl();
		if($ris)
		{
			$this->load->view('avvocato/templates/header');
			$this->load->view('avvocato/visualizza');
			$this->load->view('avvocato/templates/footer');
		}
		else
			$this->load->view('avvocato/fail');
	}
}



?>