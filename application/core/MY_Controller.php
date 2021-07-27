<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	function render_admin($content, $data = null)
	{
		$this->load->model('m_product');
		$this->load->model('m_kategori');

		$data['error'] 			= '';
		$data['username'] 		= $this->session->userdata('username');
		$data['id']				= $this->session->userdata('id');
		
		$data['list_produk']	= $this->m_product->getAll()->result();

		$data['list_kategori']	= $this->m_kategori->getAll()->result();

		$data['header'] 		= $this->load->view('admin/pager/sidebar',$data);
		$data['content'] 		= $this->load->view($content, $data);
		$data['footer']			= $this->load->view('admin/pager/footer',$data);


		$this->load->view('admin/index', $data);
	}


	function render_member($content, $data = null)
	{
		$this->load->model('m_product');

		$data['error']		= '';
		$data['username']	= $this->session->userdata('username');
		$data['id']			= $this->session->userdata('id');
		
		$data['data_user']	= $this->m_user->retrieve_data()->result();

		$data['header']		= $this->load->view('_partials/header');
		$data['content']	= $this->load->view($content, $data);
		$data['footer']		= $this->load->view('_partials/footer');

		$this->load->view('siswa/index', $data);
	}
}
