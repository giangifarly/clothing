<?php
class Member_pages extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == "") {
			redirect('');
		} elseif ($this->session->userdata('level') == 1) {
			redirect('admin_pages');
		}

	}

    public function index()
    {
        $this->load->view('member/dinamis/header');
        $this->load->view('member/home');
        $this->load->view('member/dinamis/footer');
    }
}