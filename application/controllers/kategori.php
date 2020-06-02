<?php

class Kategori extends CI_Controller{
	
	public function elektronik()
	{
		$data['elektronik'] = $this->model_kategori->data_elektronik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('elektronik', $data);
		$this->load->view('templates/footer');
	}

	public function fashion()
	{
		$data['fashion'] = $this->model_kategori->data_fashion()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('fashion', $data);
		$this->load->view('templates/footer');
	}

	public function alat_musik()
	{
		$data['alat_musik'] = $this->model_kategori->data_alat_musik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('alat_musik', $data);
		$this->load->view('templates/footer');
	}
}