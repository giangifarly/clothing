<?php

class User_control extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}


	//function for processing login form
	public function login_process()
	{
		$username = $this->input->post('username');
		$email	  = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$get_id	  = $this->session->userdata('id');

		$result = $this->m_user->check_user($username, $email, $password);

		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$id = $row->id;
				$nama_lengkap = $row->nama_lengkap;
				$username = $row->username;
				$password = $row->password;
				$email = $row->email;
				$level = $row->level;
				$image = $row->image;
			}

			$newdata = array(
				'id' => $id,
				'nama_lengkap' => $nama_lengkap,
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'level' => $level,
				'image' => $image
			);

			$this->session->set_userdata($newdata);
			$this->m_user->retrieve_data()->result();

			//if ($this->session->userdata('level') == 1) {
			//	$this->m_user->retrieve_data()->result();
			//	redirect('admin_pages/');
			//} else if ($this->session->userdata('level') == 2) {
			//	$this->m_user->retrieve_data()->result();
			//	redirect('');
			//}
			redirect('');
		} else {
			$this->session->set_flashdata('result_login', '<div class="alert alert-danger">Username atau Password yang anda masukkan salah!</div>');
			redirect('');
		}
	}

	// FUNCTION REGISTRATION

	public function register()
	{
		$level = 2;
		$username = $this->input->post('username');

		$result = $this->m_user->checkUsername($username);


		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');



		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('result_register', '<div class="alert alert-danger">Registrasi GAGAL! Silahkan untuk Cek ulang data</div>');
			redirect('pages/register','refresh');
		} else {

			if ($result > 0) {
				$this->session->set_flashdata('error_register', '<div class="alert alert-danger alert-sm">Username Anda Sudah digunakan. Harap mencoba Username lain.</div>');
				redirect('register');
			}

			$datauser['nama_lengkap']   =    $this->input->post('name');
			$datauser['username']		=    $this->input->post('username');
			$datauser['email']  		=    $this->input->post('email');
			$datauser['password']		=    md5($this->input->post('password'));
			$datauser['level']  		=    $level;
			$datauser['image']  		=    'default.png';

			$this->m_user->register($datauser);
			$this->session->set_flashdata('result_register', '<div class="alert alert-success">Registrasi Berhasil! Silahkan untuk Login</div>');
			redirect('pages/login');
		}
	}

	public function updateProfile()
	{

		$user = $this->m_user;
		$validation = $this->form_validation;
		$validation->set_rules($user->updateProfileRules());

		if ($validation->run()) {
			if ($user->checkPassword() > 0) {
				$user->updateProfile();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect('pages/edit_profile', 'refresh');
			}
		}
	}
	public function updatePassword()
	{

		$user = $this->m_user;
		$validation = $this->form_validation;
		$validation->set_rules($user->updatePasswordRules());

		if ($validation->run()) {
			if ($user->checkPassword() > 0) {
				$user->updatePassword();
				$this->session->set_flashdata('success', 'Berhasil disimpan');

				if ($this->session->userdata('level') == 1) {
					redirect('admin_pages/pengaturan', 'refresh');
				}else if($this->session->userdata('level') == 2){
					redirect('pages/profile', 'refresh');
				}
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url(''));
	}
}
