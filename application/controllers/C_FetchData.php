<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class C_FetchData extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_product');
		$this->load->model('m_event');
		$this->load->model('m_eventproduct');
	}

	// AMBIL DATA PRODUK-------------------------------
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
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>		  			
		  				<th>Nama Produk</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Ketersediaan Gambar Produk</th>
						<th>Featured</th>
						<th colspan="2">Option Tambahan</th>
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
					$featured = anchor('admin_pages/turnOnFeatured/' . $row->id, 'Aktifkan Featured', "class='badge badge-success'");
				} else {
					$featured = anchor('admin_pages/turnOffFeatured/' . $row->id, 'Matikan Featured', "class='badge badge-danger'");
				}

				$output .= '
				<tbody>
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
				</tbody>
			   ';
				$no++;
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table></div>';
		echo $output;
	}

	// AMBIL DATA EVENT-------------------------------
	function fetch_event()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->m_event->fetch_event($query);
		$no = 1;
		$output .= '
	 	<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>		  			
		  				<th>Event</th>
						<th>Jumlah Diskon</th>
						<th>Ketersediaan Logo Event</th>
						<th>Status Event</th>
						<th>Option Tambahan</th>
		 			</tr>
				</thead>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$event = "<a href='".site_url('admin_pages/view_event/').$row->id."'>".$row->event."</a>";
				$update = '<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modelEditEvent'.$row->id.'">Edit</button>';
				$delete = '<a href="'.site_url('c_event/delete/').$row->id.'" class="btn btn-outline-danger btn-sm">Delete</a>';

				if ($row->image == null || $row->image == 'default.png') {$gambar = "Tidak Ada";} 
				else {$gambar = "Ada";}
				
				if ($row->event_status == 0) {
					$status = anchor('c_event/turnOnStatus/' . $row->id, 'Aktifkan Event', "class='badge badge-success'");
				} else {
					$status = anchor('c_event/turnOffStatus/' . $row->id, 'Matikan Event', "class='badge badge-danger'");
				}

				$output .= '
				<tbody>
				 <tr>
				 	<td>' . $no . '</td>
		  			<td>' . $event . '</td>
					<td>' . $row->diskon . '%</td>
					<td>' . $gambar . '</td>
					<td>' . $status . '</td>
					<td>' . $update.$delete . '</td>
				</tr>
				</tbody>
			   ';
				$no++;
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table></div>';
		echo $output;
	}

	// AMBIL DATA PRODUK-------------------------------
	function fetch_eventProduk()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->m_eventproduct->fetch_eventProduct($query);
		$no = 1;
		$output .= '
	 	<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>		  			
		  				<th>Nama Produk</th>
						<th>Jumlah Diskon</th>
						<th>Option Tambahan</th>
		 			</tr>
				</thead>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$delete = '<a href="'.site_url('c_event/deleteProductEvent/').$row->id.'" class="btn btn-outline-danger btn-sm">Delete</a>';

				$output .= '
				<tbody>
				 <tr>
				 	<td>' . $no . '</td>
		  			<td>' . $row->nama_produk . '</td>
					<td>' . $row->diskon . '%</td>
					<td>' . $delete . '</td>
				</tr>
				</tbody>
			   ';
				$no++;
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table></div>';
		echo $output;
	}
        
}
        
    /* End of file  C_FetchData.php */
        
                            