<?php

class Belajar extends CI_Controller
{
    public function index(){
        echo "Ini function Index()";
    }
    public function bio(){
        $this->load->view('view_belajar');
    }
}