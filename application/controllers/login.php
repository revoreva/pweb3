<?php

class login extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('login_model');

	}
	//untuk mengakses : localhost/latihan/login
	function index()
	{
		if ($this->session->userdata('login')==TRUE){
			redirect('home');
		}
		else {
			$this->load->view('view_login');
		}
	}
	function do_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$auth = $this->login_model->login($username, $password);

		if($auth) {
			$data = array('username' => $username, 'login' => TRUE);
			$this->session->set_userdata($data);
			redirect('home');
		} else {
			$this->session->set_flashdata('pesan', 'username atau password anda salah');
			redirect('login');
		}
	}
	function do_logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>