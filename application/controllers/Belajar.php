<?php

class Belajar extends CI_Controller{
    public function index(){
        echo "ini function index()";
    }
    public function bio()
    {
        $this->load->view('view_belajar');
    }
}