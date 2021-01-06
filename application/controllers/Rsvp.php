<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rsvp extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_rsvp');
    }

    function index(){
        $this->load->view('v_rsvp');
    }

    function aksi_rsvp(){
        $nama = htmlentities(trim($this->input->post('nama'))); 

        $where = array(
            'nama'=>$nama
        );

        $cek = $this->m_rsvp->cek_nama('rsvp',$where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'nama'=>$nama,
                'status'=>"diundang"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url('invitation'));
        }else{
            echo 'Maaf anda tidak masuk daftar undangan atau sistem kami mengalami kesalahan';
        }
    }
}