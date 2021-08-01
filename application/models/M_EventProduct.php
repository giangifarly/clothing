<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_EventProduct extends CI_Model
{

	private $_table = 'event_product';
	private $_table_event = 'event';
	private $_table_produk = 'produk';
	private $_table_joined = 'event_product,event,produk';
	private $_table_select_by_id = 'event_product,event,produk';


	public $id;
	public $diskon;
	public $id_event;
	public $id_produk;

	public function rules()
	{
		return [
			[
				'field' => 'id_produk',
				'label' => 'ID Produk',
				'rules' => 'required'
			],
		];
	}

	public function getAll()
	{
		$this->db->from($this->_table);
		
		$this->db->join('event','`event_product`.`id_event` = `event`.`id`', 'left');
		$this->db->join('produk','`event_product`.`id_produk` = `produk`.`id`', 'left');

		//$this->db->join($this->_table_event, $this->_table.'.id_event = '.$this->_table_event.'.id', 'left');
		//$this->db->join($this->_table_produk, $this->_table.'.id_produk = '.$this->_table_produk.'.id', 'left');
		
		//$this->db->where('event_product.id_produk = produk.id');
		//$this->db->where('id_produk', $id);
		
		//$this->db->where('event_product.id_event = event.id');
		
		return $this->db->get();
	}

	public function getById($id)
	{
		$this->db->select(
			'
			produk.id as id, 
			produk.nama_produk as nama_produk, 
			produk.deskripsi as deskripsi,
			produk.image as image,
			produk.harga as harga,
			event.diskon as diskon
			'
		);
		$this->db->from($this->_table);
		$this->db->join('event','`event_product`.`id_event` = `event`.`id`', 'left');
		$this->db->join('produk','`event_product`.`id_produk` = `produk`.`id`', 'left');

		$this->db->where('event_product.id_event',$id);
		$this->db->order_by('nama_produk', 'asc');
		

		return $this->db->get();
	}

	public function getProductById($id)
	{
		$this->db->select(
			'
			produk.id as id, 
			produk.nama_produk as nama_produk, 
			produk.deskripsi as deskripsi,
			produk.image as image,
			produk.harga as harga,
			event.diskon as diskon
			'
		);
		$this->db->from($this->_table);
		$this->db->join('event','`event_product`.`id_event` = `event`.`id`', 'left');
		$this->db->join('produk','`event_product`.`id_produk` = `produk`.`id`', 'left');

		$this->db->where('event_product.id_produk',$id);
		$this->db->order_by('nama_produk', 'asc');
		

		return $this->db->get();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id 			= uniqid();
		$this->diskon 		= $post['diskon'];
		$this->id_event		= $post['id_event'];
		$this->id_produk	= $post['id_produk'];

		return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id 			= $post['id'];
		$this->diskon 		= $post['diskon'];
		$this->id_event		= $post['id_event'];
		$this->id_produk	= $post['id_produk'];

		return $this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id_produk' => $id));
	}

	public function fetch_eventProduct($query)
	{
		$id = $this->uri->segment(3);

		$this->db->from($this->_table);

		$this->db->join('event','`event_product`.`id_event` = `event`.`id`', 'left');
		$this->db->join('produk','`event_product`.`id_produk` = `produk`.`id`', 'left');

		if ($query != '') {
			$this->db->like('produk.nama_produk', $query);
		}
		
		$this->db->where('event_product.id_event', $id);

		$this->db->order_by('produk.nama_produk', 'asc');

		return $this->db->get();
	}
}
                        
/* End of file M_EventProduct.php */
