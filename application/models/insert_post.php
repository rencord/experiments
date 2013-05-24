<?php
Class Insert_post extends CI_Model
{
	function insert($contenuto, $username)
	{
		
		var_dump($contenuto);
//  		$this->db->query('insert into post (post) values('$contenuto');');
		$this->db->insert('post', $contenuto);

 		
 		
// 		$user_id = get_user($username);
// 		$post_id = get_post($contenuto);
// 		$query = $this -> db -> query('insert into visualizza (username, post) value ('$username' , '$contenuto');');
		if($query)
	{
			return $query;
	}
		else
	{	
			return false;
	}

	}

	function get_user($username)
	{
		$query= $this->db->query('select id from utenti where username='$username';');
		return $query->id;
	}
	
	function get_post($post)
	{
		$query= $this->db->query('select id from post where post='$post';');
		return $query->result();
	}
 
}
?>

