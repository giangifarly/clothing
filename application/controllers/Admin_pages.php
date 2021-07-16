<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Admin_pages extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == "") {
			redirect('');
		} elseif ($this->session->userdata('level') == 2) {
			redirect('member_pages');
		}

	}

    public function index()
    {
		$content['judul'] = 'Dashboard';

        $this->load->view('admin/pager/sidebar',$content);
        $this->load->view('admin/home',$content);
        $this->load->view('admin/pager/footer',$content);
    }

	public function produk()
    {
		$content['judul']  = 'Produk';

        $this->load->view('admin/pager/sidebar',$content);
        $this->load->view('admin/produk',$content);
        $this->load->view('admin/pager/footer',$content);
    }
}