<?php

class Hello_world extends CI_Controller
{
    public function biodata(){
        echo "Ini function Index()";
    }
    public function saya(){
        $this->load->view('view_belajar');
    }
}