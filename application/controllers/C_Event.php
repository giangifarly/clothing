<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Event extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_event');
		$this->load->model('m_eventproduct');
	}
	
	public function add()
	{
		$event = $this->m_event;
		$validation = $this->form_validation;
		$validation->set_rules($event->rules());

		if ($validation->run()) {
			$event->save();
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil disimpan!', 'success');</script>");
		}

		redirect(site_url('admin_pages/event'));
	}

	public function update()
	{
		$kategori = $this->m_event;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->rules());

		if ($validation->run()) {
			$kategori->update();
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success');</script>");
		}

		redirect(site_url('admin_pages/event'));
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->m_event->delete($id)) {
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil dihapus!', 'success');</script>");
			redirect(site_url('admin_pages/event'));
		}
	}

	public function turnOnStatus($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->m_event->updateStatusOn($id)) {
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Status berhasil diaktifkan!', 'success');</script>");
			redirect(site_url('admin_pages/event'));
		}
	}
	public function turnOffStatus($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->m_event->updateStatusOff($id)) {
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Status berhasil di-nonaktifkan!', 'success');</script>");
			redirect(site_url('admin_pages/event'));
		}
	}

	//Function untuk Produk yang masuk dalam suatu Event
	public function addProductEvent()
	{
		$id = $this->uri->segment(3);
		
		$ep = $this->m_eventproduct;
		$validation = $this->form_validation;
		$validation->set_rules($ep->rules());

		if ($validation->run()) {
			$ep->save();
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil disimpan!', 'success');</script>");
		}

		redirect(site_url('admin_pages/view_event/'.$id));
	}

	public function updateProductEvent()
	{
		$id = $this->uri->segment(3);
		$ep = $this->m_eventproduct;
		$validation = $this->form_validation;
		$validation->set_rules($ep->rules());

		if ($validation->run()) {
			$ep->update();
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success');</script>");
		}

		redirect(site_url('admin_pages/view_event/'.$id));
	}

	public function deleteProductEvent($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->m_eventproduct->delete($id)) {
			$this->session->set_flashdata('notif', "<script>swal('Berhasil!', 'Data berhasil dihapus!', 'success');</script>");
			redirect(site_url('admin_pages/view_event/'));
		}
	}
}
        
    /* End of file  C_Event.php */
