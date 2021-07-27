<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_product');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = "Home";
		$data['products'] = $this->m_product->getAllFeatured()->result();

		$this->load->view('_partials/header', $data);
		$this->load->view('home', $data);
		$this->load->view('_partials/footer');
	}
	public function shop()
	{
		$data['judul'] = "Shop";
		$data['products'] = $this->m_product->getAll()->result();

		$this->load->view('_partials/header', $data);
		$this->load->view('shop', $data);
		$this->load->view('_partials/footer');
	}
	public function event()
	{
		$data['judul'] = "Event";

		$this->load->view('_partials/header', $data);
		$this->load->view('event', $data);
		$this->load->view('_partials/footer');
	}

	public function description($id = null)
	{
		$data['judul'] = "Description";
		$data['products'] = $this->m_product->getById($id);

		$this->load->view('_partials/header', $data);
		$this->load->view('description', $data);
		$this->load->view('_partials/footer');
	}

	public function store()
	{
		$data['judul'] = "Store";

		$this->load->view('_partials/header', $data);
		$this->load->view('store', $data);
		$this->load->view('_partials/footer');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		
	}
}
