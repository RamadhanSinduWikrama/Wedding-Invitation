<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_invitation extends CI_Model{


    function tampil_ucapan($number,$offset){
        return $query = $this->db->get('komentar',$number,$offset)->result();
    }

    function tambah_ucapan($data,$table){
        $this->db->insert($table,$data);
    }

    function jumlah_komentar(){
        return $this->db->get('komentar')->num_rows();
    }
}