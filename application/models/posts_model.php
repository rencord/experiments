<?php
Class Posts_model extends CI_Model
{
	
	function __construct()
	{
	    parent::__construct();
	}
	
	function insert($post, $username)
	{
	$data = array(
		'post' => $post 
	);
		
		var_dump($username);
		$this->db->insert('post', $data);
//  		$this -> db -> query("insert into post (contenuto) value ('.$contenuto.');");
// 		$user_id = get_user($username);
		$user_id = $this->db->get_where('utenti', array('username' => $username));
// 		$post_id = get_post($contenuto);
		$post_id = $this->db->get_where('post', array('post' => $post));
		$user= $user_id->row()->id;
		$post= $post_id->row()->id;
		var_dump($post_id);
		var_dump($user_id);
		$data = array (
			'post' => $post,
			'username' => $user
			);
		$query = $this->db->insert('visualizza', $data);
// 		$query = $this -> db -> query('insert into visualizza (username, post) value ('.$user.' , '.$post.');');
		if($query)
	{
			return $query;
	}
		else
	{	
			return false;
	}

	}

	function get_user_id($username)
	{
		$query= $this->db->get_where('utenti', array('username' => $username) );
		foreach ($query->result() as $row)
			{
				$id = $row->id;
			}
	
		return $id;
	}
	
	function get_posts_id($username)
	{
		$query=$this->db->get_where('visualizza', array('username' => $username) );
		$i=0;
		foreach($query->result() as $row)

 			$posts[$i++]= $row->post;
		return $posts;
	}
	function get_posts($id)
	{
		$i=0;
		foreach ($id as $post_id){
			$query=$this->db->get_where('post', array('id' => $post_id) );
			foreach($query->result() as $row)
				$posts[$i++]= $row->post;		
		}
		return $posts;
	}
	
 
}
?>

 
