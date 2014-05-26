<?php
	class Register extends CI_Controller
	{
		function Register()
		{
			parent::__construct();
			//jangan lupa modelnya di load
			$this->load->model('My_Model');
			$this->load->library('form_validation');
		}

		function index()
		{

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() == false )
			{
				$this->load->view('register_form');
			}
			else
			{
				echo "success";
				$this->insert_data();
			}
		}
		function insert_data()
		{
			$nama = $this->input->post('nama');
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$data = array(
				'nama' => $nama,
				'username' => $user,
				'password' => $pass
			);
			$this->My_Model->insert_data_db($data);
		}
	}
?>