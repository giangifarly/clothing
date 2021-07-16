<?php
class M_user extends CI_Model
{
    public function __construct(){
		parent::__construct();	
	}

	function check_username($username){
		$query = $this->db->query("SELECT username FROM user WHERE username='$username'");
		return $query;
	}

	public function check_user($username, $email, $password) {
		$query = $this->db->query("select * from user where username ='$username' and password='$password' or email='$email' and password='$password'");
		return $query;
	}

	public function retrieve_data(){

		$id = $this->session->userdata('id');
		
		$this->db->from('user');
		$this->db->where('id', $id);
		

		$query = $this->db->get();

		return $query;
	}

	public function daftar($datauser){
		$this->db->insert('user',$datauser);
	}

	public function siswa($datasiswa){
		$this->db->insert('siswa',$datasiswa);
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

	public function check_password()
	{
		$id_user = $this->session->userdata('id_user');
		$this->db->from('users');
		$this->db->where('id_user', $id_user);
		
		$query = $this->db->get();
		
		return $query->result();
	}
}
