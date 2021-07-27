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
			
			redirect('admin_pages/produk','refresh');
			
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
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

		redirect(site_url('admin_pages/produk'));
	}

	
	function fetch_produk()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->m_product->fetch_product($query);
		$no = 1;
		$output .= '
	 	<div class="table-responsive">
			<table class="table">
				<thead class=" text-primary">
					<tr>
						<th>No</th>		  			
		  				<th>Nama Produk</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Ketersediaan Gambar Produk</th>
						<th colspan="3">Option Tambahan</th>
		 			</tr>
				</thead>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {

				if ($row->image == null || $row->image == 'default.png') {
					$gambar = "Tidak Ada";
				} else {
					$gambar = "Ada";
				}

				if ($row->featured == 0) {
					$featured = anchor('admin_pages/turnOnFeatured/'.$row->id, 'Aktifkan Featured');
				}else{
					$featured = anchor('admin_pages/turnOffFeatured/'.$row->id, 'Matikan Featured');
				}

				$output .= '
				 <tr>
				 	<td>' . $no . '</td>
		  			<td>' . $row->nama_produk . '</td>
					<td>' . $row->kategori . '</td>
					<td>' . $row->harga . '</td>
					<td>' . $gambar . '</td>
					<td>' . $featured . '</td>
					<td>' . anchor('admin_pages/produkUpdate/' . $row->id, 'Edit') . '</td>
					<td>' . anchor('admin_pages/delete/' . $row->id, 'Hapus') . '</td>
				</tr>
			   ';
				$no++;
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table>';
		echo $output;
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

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_product->delete($id)) {
            redirect(site_url('admin_pages/produk'));
        }
    }
}
