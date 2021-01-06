<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rsvp extends CI_Model{
    function cek_nama($table,$where){
        return $this->db->get_where($table,$where);
    }
}