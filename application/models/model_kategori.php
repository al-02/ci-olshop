<?php

class Model_kategori extends CI_Model{
	public function data_elektronik(){
		return $this->db->get_where("tb_barang",array('kategori' => 'elektronik'));
	}

	public function data_fashion(){
		return $this->db->get_where("tb_barang",array('kategori' => 'fashion'));
	}

	public function data_alat_musik(){
		return $this->db->get_where("tb_barang",array('kategori' => 'alat_musik'));
	}
}