<?php
class M_Product extends CI_Model
{
	public function fetch_product($query)
	{
		$this->db->from('produk');

		if ($query != '') {
			$this->db->like('nama_produk', $query);
		}
		$this->db->order_by('nama_produk', 'asc');

		return $this->db->get();
	}

	public function list_product()
	{
		
		$this->db->from('produk');
		$this->db->order_by('nama_produk', 'asc');
		$query = $this->db->get();
		return $query;
	}
}

