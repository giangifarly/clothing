<?php
class M_Product extends CI_Model
{
	public function fetch_product($query)
	{
		$this->db->from('sekolah');

		if ($query != '') {
			$this->db->like('nama_produk', $query);
		}
		$this->db->order_by('nama_produk', 'asc');

		return $this->db->get();
	}
}

