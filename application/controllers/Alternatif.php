<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('alternatif_model');
    }

	public function index()
	{

		$data['title'] = 'Daftar alternatif';
		$data['alternatif'] = $this->alternatif_model->data_alternatif();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('alternatif/daftar',$data);
		$this->load->view('template/footer');
	}
	public function tambah()
	{
		$data['title'] = 'Tambah alternatif';

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('alternatif/tambah',$data);
		$this->load->view('template/footer');
	}
	public function store()
	{
		# code...
		$alternatif = $_POST['alternatif'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $_POST['gambar'];

		$data = array(
			'alternatif' => $alternatif,
			'deskripsi' => $deskripsi,
			'gambar' => $gambar
		);

		$this->alternatif_model->tambah_data($data);

		redirect('alternatif');
	}
}
