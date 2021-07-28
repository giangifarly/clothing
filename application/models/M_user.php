<?php
class M_user extends CI_Model
{
	private $_table = 'user';

	public $id;
	public $email;
	public $username;
	public $password;
	public $old_password;
	public $new_password;
	public $retype_new_password;
	public $level;

	public function updatePasswordRules()
	{
		return [
			[
				'field' => 'old_password',
				'label' => 'Password Lama',
				'rules' => 'required'
			],

			[
				'field' => 'new_password',
				'label' => 'Password Baru',
				'rules' => 'required|min_length[8]'
			],

			[
				'field' => 'retype_new_password',
				'label' => 'Ulangi Password Baru',
				'rules' => 'required|min_length[8]|matches[new_password]'
			]
		];
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ['id' => $id])->row();
	}

	public function checkUsername($username)
	{
		return $this->db->get_where($this->_table, ['username' => $username])->row();
	}

	public function check_user($username, $email, $password)
	{
		$query = $this->db->query("select * from user where username ='$username' and password='$password' or email='$email' and password='$password'");
		return $query;
	}

	public function retrieve_data()
	{

		$id = $this->session->userdata('id');

		$this->db->from($this->_table);
		$this->db->where('id', $id);

		$query = $this->db->get();

		return $query;
	}

	public function daftar($datauser)
	{
		$this->db->insert($this->_table, $datauser);
	}

	public function data_siswa()
	{
		$id_user = $this->session->userdata('id_user');

		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');


		$this->db->where("id_user = '$id_user'");


		$query = $this->db->get();

		return $query;
	}

	public function updatePassword()
	{
		$post = $this->input->post();
		$this->id 					= $this->session->userdata('id');
		$this->old_password 			= md5($post['old_password']);
		$this->new_password 		= md5($post['new_password']);
		$this->retype_new_password 	= md5($post['retype_new_password']);
		
		$this->db->set('password', $this->new_password);
		$this->db->where('id', $this->id);
		return $this->db->update($this->_table);
	}

	public function checkPassword()
	{
		$id = $this->session->userdata('id');
		$old_password = md5($this->input->post('old_password'));

		$this->db->from($this->_table);
		$this->db->where('id', $id);
		$this->db->where('password', $old_password);

		$query = $this->db->get();

		return $query->result();
	}
}
