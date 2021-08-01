<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Event extends CI_Model
{

	private $_table = 'event';

	public $id;
	public $event;
	public $diskon;
	public $deskripsi;
	public $event_status;
	public $image;

	public function rules()
	{
		return [
			[
				'field' => 'event',
				'label' => 'Nama Event',
				'rules' => 'required'
			],
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table);
	}

	public function getAllStatusOn()
	{
		return $this->db->get_where($this->_table,["event_status"=> '1']);
	}
	public function getAllStatusOff()
	{
		return $this->db->get_where($this->_table,["event_status"=> '0']);
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

	public function save()
	{
		$post = $this->input->post();
		$this->id 			= uniqid();
		$this->event 		= $post['event'];
		$this->diskon 		= $post['diskon'];
		$this->deskripsi	= $post['deskripsi'];
		$this->event_status = 0;
		$this->image 		= $this->_uploadImage();

		return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id 			= $post['id'];
		$this->event 		= $post['event'];
		$this->diskon 		= $post['diskon'];
		$this->deskripsi	= $post['deskripsi'];
		$this->event_status	= $post['event_status'];
		
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->_uploadImage();
		} else {
			$this->image = $post["old_image"];
		}

		return $this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array('id' => $id));
	}

	public function updateStatusOn($id)
	{
		$this->db->set('event_status', 1);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}
	public function updateStatusOff($id)
	{
		$this->db->set('event_status', 0);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}	

	private function _uploadImage()
	{
		$config['upload_path']          = './upload/event/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            = $this->id;
		$config['overwrite']			= true;
		$config['max_size']             = 10240; // 10MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload("image")) {
			return $this->upload->data("file_name");
		}
		//print_r($this->upload->display_errors());
		return "default.png";
	}

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		if ($product->image != "default.png") {
			$filename = explode(".", $product->image)[0];
			return array_map('unlink', glob(FCPATH . "upload/event/$filename.*"));
		}
	}

	public function fetch_event($query)
	{
		$this->db->from($this->_table);

		if ($query != '') {
			$this->db->like('event', $query);
		}
		$this->db->order_by('event', 'asc');

		return $this->db->get();
	}
}
                        
/* End of file M_Event.php */
