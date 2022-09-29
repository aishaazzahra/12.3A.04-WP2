<?php

class Belajar extends CI_Controller
{
    public function index(){
        $this->load->view('view_belajar');
    
    }
    public function parsing()
    {
        $data['bio']="Nama saya zahra";
        $data=array(
            'nama'=>"Aisha azzahra",
            'pekerjaan'=>"Mahasiswa"
        );
        $this->load->view('view_belajar', $data);
    }
}