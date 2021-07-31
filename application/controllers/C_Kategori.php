<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
	}
	
	public function addKategori()
	{
		$kategori = $this->m_kategori;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->rules());

		if ($validation->run()) {
			$kategori->save();
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil disimpan!', 'success');</script>");
		}

		redirect(site_url('admin_pages/pengaturan'));
	}

	public function updateKategori()
	{
		$kategori = $this->m_kategori;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->rules());

		if ($validation->run()) {
			$kategori->update();
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success');</script>");
		}

		redirect(site_url('admin_pages/pengaturan'));
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->m_kategori->delete($id)) {
			redirect(site_url('admin_pages/pengaturan'));
		}
	}

	
}
        
    /* End of file  Kategori.php */
