<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function index(){
		$this->load->model('penjualan_model');//Panggil model Penjualan

		$data['data'] = $this->penjualan_model->ambilData();//Panggil Function ambil data

		$this->load->view('data_penjualan', $data);
	}

	public function tambah(){
		if(isset($_POST['simpan'])){
			$this->load->model('penjualan_model');

			$this->penjualan_model->simpanData();
			redirect('penjualan/index');

		}else if(isset($_POST['batal'])){
			redirect('penjualan/index');
		}else{
			$this->load->model('penjualan_model');

			$data['liquid'] = $this->penjualan_model->getLiquid();
			$data['pembeli'] = $this->penjualan_model->getPembeli();

			$this->load->view('tambah_penjualan', $data);
		}

	}

	public function hapus(){
		$this->load->model('penjualan_model');

		$this->penjualan_model->deleteData();
		redirect('penjualan/index');
	}

}
