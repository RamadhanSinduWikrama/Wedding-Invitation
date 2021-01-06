<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invitation extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "diundang"){
            redirect(base_url("rsvp"));
        }

        $this->load->model('m_invitation');
        $this->load->helper('url');
    }

    public function index(){
        $this->load->database();
        $jumlah_komentar = $this->m_invitation->jumlah_komentar();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'invitation/index/';
        $config['total_rows'] = $jumlah_komentar;
        $config['per_page'] = 3;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['komentar']=  $this->m_invitation->tampil_ucapan($config['per_page'],$from);

        // echo json_encode($data);
        $this->load->view('v_index',$data);
    }

    public function tambah_komentar(){
        $user = htmlentities(trim($this->input->post('user')));
        $komentar = htmlentities(trim($this->input->post('komentar')));

        $data = array(
            'user'=>$user,
            'komentar'=>$komentar
        );

        $this->m_invitation->tambah_ucapan($data,'komentar');
        redirect('invitation/');
    }
}