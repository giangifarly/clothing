<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Event extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_event');
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
}
        
    /* End of file  C_Event.php */
