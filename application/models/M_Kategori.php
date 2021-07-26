<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Kategori extends CI_Model
{
	private $_table = 'kategori';

	public $id;
	public $kategori;

	public function getAll()
	{
		return $this->db->get($this->_table);
	}
}

