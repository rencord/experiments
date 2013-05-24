<?php 

	class Avvocato_model extends CI_Model
	{

		public function __construct()
		{
			$this->load->database();
			
		}
		
		public function get_cl()
		{
			$query = $this->db->query("select * from clienti");
			$res = $query->result_object();
			return $res;
		}
		public function get_cli($id)
		{
			$query = $this->db->query("select * from clienti where id=$id ");
			$res = $query->result_object();
			return $res;
		}
		public function set_cl()
		{
			$data = array (
			'nome' => $this->input->post('nome'),
			'cognome' => $this->input->post('cognome'),
			'telefono' => $this->input->post('telefono')
			);
		
			return $this->db->insert('clienti', $data);
		}
		public function delete_cl()
		{
			$value=$this->input->post('id');
			return $this->db->query("delete from clienti where id=$value " );
		}
		
		public function modify_cl()
		{
			$value=$this->input->post('id');
			return $this->db->query();
		}
		
		public function update_cl()
		{
			$id= $this->input->post('id');
			$n=$this->input->post('nome');
			$c=$this->input->post('cognome');
			$t=$this->input->post('telefono');
// 			$data = array(
// 				$n => $nome,
// 				$c => $cognome,
// 				$t => $telefono
// 			);
// 			$this->db->where('id', $id);
// 			$this->db->update('clienti', $data);
			$ris= $this->db->query("update clienti set nome='$n', cognome='$c', telefono='$t' where id=$id");
			return $ris;
			
		}
	}
?>