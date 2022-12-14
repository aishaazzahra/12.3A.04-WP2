<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('view_form_matakuliah');
	}

	public function halo()
	{
		$data['nama_web'] = "<br> <h1>Halo, saya sedang belajar CI-3</h1>";
		$data=array(
			'judul'=>"<h1>Belajar CI-3</h1>",
			'desk'=>"parsing data array"
		);
		$this->load->view('view_belajar', $data);
	}
}
