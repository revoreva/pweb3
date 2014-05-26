<?php
class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function login($username, $password)
	{
		$result = $this->db->get_where('karyawan', 
			array(
				'username' => $username,
				'password' => $password));
		if ($result->num_rows() > 0)
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}
}
?>