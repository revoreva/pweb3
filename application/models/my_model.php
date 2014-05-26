<?php
	class My_Model extends CI_Model
	{
		function My_Model()
		{
			parent::__construct();
			$this->load->database('default', true);
		}
		function insert_data_db($data)
		{
			$this->db->insert('karyawan', $data);
		}
	}
?>