<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Admin_pages extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == "") {
			redirect('');
		} elseif ($this->session->userdata('level') == 2) {
			redirect('pages');
		}

		$this->load->model('m_product');
		$this->load->model('m_kategori');
		$this->load->model('m_user');
		$this->load->model('m_event');
		$this->load->model('m_eventproduct');
	}

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->render_admin('admin/home', $data);
	}

	public function produk()
	{
		$data['judul']  = 'Produk';
		$this->render_admin('admin/produk', $data);
	}

	public function event()
	{
		$data['judul']  = 'Event';
		$this->render_admin('admin/event', $data);
	}

	public function pengaturan()
	{
		$data['judul']  = 'Pengaturan';
		$this->render_admin('admin/pengaturan', $data);
	}

	public function produkUpdate($id = null)
	{
		$data['judul']  = 'Edit Produk';

		//if (!isset($id)) redirect('admin_pages/produk');

		$product = $this->m_product;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if ($validation->run()) {
			$product->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');

			redirect('admin_pages/produk', 'refresh');
		}
		$data["product"] = $product->getById($id);
		if (!$data["product"]) show_404();

		$this->render_admin('admin/update_produk', $data);
	}

	public function addProduk()
	{
		$product = $this->m_product;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if ($validation->run()) {
			$product->save();
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil disimpan!', 'success');</script>");
		}

		redirect(site_url('admin_pages/produk'));
	}

	public function view_event($id = null)
	{
		$data['judul']  = 'Lihat Event';

		//if (!isset($id)) redirect('admin_pages/produk');

		$event = $this->m_event;
		$eventproduct = $this->m_eventproduct;
		$data["event"] = $event->getById($id);
		$data["eventproduct"] = $eventproduct->getById($id)->result();
		if (!$data["event"]) show_404();

		$this->render_admin('admin/view_event', $data);
	}


	public function turnOnFeatured($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->m_product->updateFeaturedOn($id)) {
			redirect(site_url('admin_pages/produk'));
		}
	}
	public function turnOffFeatured($id = null)
	{
		if (!isset($id)) show_404();

		$this->m_product->getById($id);
		if ($this->m_product->updateFeaturedOff($id)) {
			redirect(site_url('admin_pages/produk'));
		}
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->m_product->delete($id)) {
			redirect(site_url('admin_pages/produk'));
		}
	}
}
