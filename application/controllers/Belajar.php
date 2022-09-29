<?php

class Belajar extends CI_Controller{
    public function index(){
        $this->load->view('welcome_message');
    }
    public function parsing(){
        //$data['bio'] = "Nama Saya Defa";
        $data=array(
            'nama'=> "Defa Setya",
            'pekerjaan'=> "Mahasiswa"
        );
        $this->load->view('view_belajar', $data);
    }
}