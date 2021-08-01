<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	function render_admin($content, $data = null)
	{
		$this->load->model('m_product');
		$this->load->model('m_kategori');
		$this->load->model('m_user');
		$this->load->model('m_event');
		$this->load->model('m_eventproduct');

		$id = $this->uri->segment(3);

		$data['error'] 			= '';
		$data['username'] 		= $this->session->userdata('username');
		$data['id']				= $this->session->userdata('id');
		$data['user']	 		= $this->m_user->retrieve_data()->result();
		
		$data['list_produk']	= $this->m_product->getAll()->result();

		$data['list_kategori']	= $this->m_kategori->getAll()->result();

		$data['list_event']		= $this->m_event->getAll()->result();


		$data['header'] 		= $this->load->view('admin/_partials/_top_template',$data);
		$data['content'] 		= $this->load->view($content, $data);
		$data['footer']			= $this->load->view('admin/_partials/_bottom_template',$data);


		$this->load->view('admin/index', $data);
	}


	function render_member($content, $data = null)
	{
		$this->load->model('m_product');

		$data['error']		= '';
		$data['username']	= $this->session->userdata('username');
		$data['id']			= $this->session->userdata('id');
		
		$data['user']	= $this->m_user->retrieve_data()->result();

		$data['header']		= $this->load->view('_partials/header');
		$data['content']	= $this->load->view($content, $data);
		$data['footer']		= $this->load->view('_partials/footer');

		$this->load->view('siswa/index', $data);
	}
}
