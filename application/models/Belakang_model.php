<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Belakang_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		
	}
 
	function semua_postingan()
    {
		$this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->join('objek_wisata__rating_ulasan', 'objek_wisata__rating_ulasan.id__objek_wisata__rating_ulasan = objek_wisata__post.id__objek_wisata__post', 'left');
		return $this->db->get()->result();
    }

    function objek_wisata($id_objekwisata){
        $this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->where('id__objek_wisata__post', $id_objekwisata);
        return $this->db->get()->result();
    }

    function semua_ulasan()
    {
		$this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->join('objek_wisata__rating_ulasan', 'objek_wisata__rating_ulasan.id__objek_wisata__rating_ulasan = objek_wisata__post.id__objek_wisata__post', 'left');
		return $this->db->get()->result();
    }

    function ulasan_objek_wisata($id_objekwisata){
        $this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->join('objek_wisata__rating_ulasan', 'objek_wisata__rating_ulasan.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
        $this->db->where('id__objek_wisata__post', $id_objekwisata);
        return $this->db->get()->result();
    }
}