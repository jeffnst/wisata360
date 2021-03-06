<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan_tambah extends CI_Controller {

    public function __construct ()
	{
    	parent:: __construct();
   		$this->load->model('Depan_tambah_model');

  	}

    public function objek_wisata()
    {
        $objek_wisata_rating = array(
            'objek_wisata__pengguna_id__objek_wisata__pengguna' => $this->input->post('id_objekwisata_pengguna'),
            'objek_wisata__post_id__objek_wisata__post' => $this->input->post('id_objekwisata_post'),
            'rating__objek_wisata__rating_ulasan' => $this->input->post('hasil_rating'),
            'ulasan__objek_wisata__rating_ulasan' => $this->input->post('hasil_ulasan'),
            'tanggal__objek_wisata__rating_ulasan' => date('y/m/d'),
        );
        $this->Depan_tambah_model->objek_wisata__rating($objek_wisata_rating);

        $rating_wisata = array(
            'jumlah_hasil_rating__objek_wisata__post' => $this->input->post('jumlah_objekwisata_rating')
        );

        $id_objekwisata = $this->input->post('id_objekwisata_post');
        $this->Depan_tambah_model->jumlah_rating($rating_wisata, $id_objekwisata);
            
        redirect('index.php/depan/objek_wisata/'.$this->input->post('id_objekwisata_post'));
    }
}