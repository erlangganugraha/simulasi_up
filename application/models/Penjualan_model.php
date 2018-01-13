<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model {

	function getLiquid(){
		$get = $this->db->get("liquid")->result();

		return $get;
	}

	function getPembeli(){
		$get = $this->db->get("pembeli")->result();

		return $get;
	}

	function ambilData(){


		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->join('liquid', 'liquid.id_liquid = penjualan.id_liquid');
		$this->db->join('pembeli', 'pembeli.id_pembeli = penjualan.id_pembeli');
		$this->db->order_by('penjualan.id_pembeli', 'ASC');


		$query = $this->db->get()->result();

		return $query;
	}

	function simpanData(){
		
		$data = array(
       	'id_jual'=>$this->input->post('id_jual'),
       	'tanggal_beli' => $this->input->post('tanggal_beli') ,
       	'id_liquid' => $this->input->post('id_liquid'),
       	'id_pembeli' => $this->input->post('id_pembeli'),
       	'jumlah_beli' => $this->input->post('jumlah_beli'),
       	'total' => $this->input->post('total_bayar')
		);

		$simpan = $this->db->insert('penjualan', $data);

		return $simpan;
	}

	function deleteData(){
		$id = $this->uri->segment(3);

		$this->db->where('id_jual', $id);
		$delete = $this->db->delete('penjualan');

		return $delete;
	}

}
