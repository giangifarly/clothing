<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Product extends CI_Model
{
	private $_table = 'produk';

	public $id;
	public $nama_produk;
	public $deskripsi;
	public $harga;
	public $kategori;
	public $image;
	public $featured;

	public function rules(){
		return [
			['field' => 'nama_produk',
			'label' => 'Nama Produk',
			'rules' => 'required'],

			['field' => 'deskripsi',
			'label' => 'Deskripsi Produk',
			'rules' => 'required'],

			['field' => 'harga',
			'label' => 'Harga Produk',
			'rules' => 'required'],
		];
	}

	public function getAll()
	{
		$this->db->from('produk');
		$this->db->order_by('nama_produk', 'asc');
		
		return $this->db->get();
	}

	public function getAllFeatured()
	{
		$this->db->from($this->_table);
		$this->db->where('featured',1);
		$this->db->order_by('nama_produk', 'asc');
		
		return $this->db->get();
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

	public function save()
	{
		$post = $this->input->post();

		if ($post['kategori_list'] == '0') {
			$kategori = $post['kategori_input'];
		}else{
			$kategori = $post['kategori_list'];
		}
		
		$this->id		 	= uniqid();
		$this->nama_produk 	= $post['nama_produk'];
		$this->deskripsi 	= $post['deskripsi'];
		$this->harga 		= $post['harga'];
		$this->image 		= $this->_uploadImage();
		$this->kategori 	= $post['kategori_list'];
		$this->featured 	= '0';

		return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();

		if ($post['kategori_list'] == '0') {
			$kategori = $post['old_kategori'];
		}else{
			$kategori = $post['kategori_list'];
		}

		$this->id 			= $post['id'];
		$this->nama_produk 	= $post['nama_produk'];
		$this->deskripsi 	= $post['deskripsi'];
		$this->harga 		= $post['harga'];
		$this->kategori 	= $kategori;
		$this->featured 	= '0';
		
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->_uploadImage();
		} else {
			$this->image = $post["old_image"];
		}
		
		return $this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function updateFeaturedOn($id)
	{
		$this->db->set('featured', 1);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}
	public function updateFeaturedOff($id)
	{
		$this->db->set('featured', 0);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}	


	public function delete($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array('id' => $id));
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './upload/';
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
			return array_map('unlink', glob(FCPATH."upload/$filename.*"));
		}
	}
	
	public function fetch_product($query)
	{
		$this->db->from('produk');

		if ($query != '') {
			$this->db->like('nama_produk', $query);
		}
		$this->db->order_by('nama_produk', 'asc');

		return $this->db->get();
	}

}


