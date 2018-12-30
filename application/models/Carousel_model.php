<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert()
	{
			$object=array(
				'title'=>$this->input->post('title'),
				'desc'=>$this->input->post('desc'),
				'image'=>$this->upload->data('file_name'),
				'status'=>$this->input->post('status')
			);
		$this->db->insert('carousel', $object);
		echo mysql_error();
	}

	// public function getBuku_update()
	// {
	// 	$query = $this->db->query("Select * from buku LIMIT 4");
	// 	return $query->result_array();
	// }

	// public function getBuku_laris()
	// {
	// 	$query = $this->db->query("SELECT buku.*, sum(jumlah) as totalBeli FROM buku inner join detailpembelian where buku.id_buku=detailpembelian.id_buku GROUP BY buku.id_buku ORDER BY totalBeli DESC LIMIT 4");
	// 	return $query->result_array();
	// }

	// public function getBuku_list()
	// {
	// 	$query = $this->db->query("SELECT * from buku inner join kategori on buku.id_kategori = kategori.id_kategori");
	// 	return $query->result_array();
	// }

	public function get()
	{
		return $this->db->get('carousel')->result_array();
	}

	public function getCar()
	{
		$this->db->where('status', '1');
		return $this->db->get('carousel')->result_array();
	}

	// public function updateById($id)
	// {
	// if($this->upload->data('file_name')==""){
	// 	$data = array('judul' => $this->input->post('judul'),
	// 		'pengarang'=>$this->input->post('pengarang'),  
	// 		'penerbit'=>$this->input->post('penerbit'), 
	// 		'tahun_terbit'=>$this->input->post('tahun_terbit'),
	// 		'jumlah_halaman'=>$this->input->post('jumlah_halaman'),
	// 		'sinopsis'=>$this->input->post('sinopsis'),
	// 		'stok'=>$this->input->post('stok'),
	// 		'harga'=>$this->input->post('harga'),);
	// 	$this->db->where('id_buku', $id);
	// 	$this->db->update('buku', $data);
	// } else{
	// 	$data = array('judul' => $this->input->post('judul'),
	// 		'pengarang'=>$this->input->post('pengarang'),  
	// 		'penerbit'=>$this->input->post('penerbit'), 
	// 		'tahun_terbit'=>$this->input->post('tahun_terbit'),
	// 		'jumlah_halaman'=>$this->input->post('jumlah_halaman'),
	// 		'gambar'=>$this->upload->data('file_name'),
	// 		'sinopsis'=>$this->input->post('sinopsis'),
	// 		'stok'=>$this->input->post('stok'),
	// 		'harga'=>$this->input->post('harga'),);
	// 	$this->db->where('id_buku', $id);
	// 	$this->db->update('buku', $data);
	// }
		
		
	// }
	
	// public function delete($id){
	// 	$this->db->where('id_buku', $id);
	// 	$this->db->delete('buku');
	// }
}