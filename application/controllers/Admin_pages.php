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
			redirect('member_pages');
		}

		$this->load->model('m_product');

	}

    public function index()
    {
		$data['judul'] = 'Dashboard';

        $this->render_admin('admin/home',$data);
    }

	public function produk()
    {
		$data['judul']  = 'Produk';

        $this->render_admin('admin/produk',$data);
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
						<th colspan="2">Option Tambahan</th>
		 			</tr>
				</thead>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$output .= '
				 <tr>
				 	<td>' . $no . '</td>
		  			<td>' . $row->nama_produk . '</td>
					<td>' . $row->kategori . '</td>
					<td>' . $row->harga . '</td>
					<td></td>
					<td>' . anchor('admin/edit_sekolah/' . $row->id_sekolah, 'Edit') . '</td>
					<td>' . anchor('admin/hapus_akun/' . $row->id_sekolah, 'Hapus') . '</td>
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
}
