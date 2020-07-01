<?php 

class Kpa extends Controller{
	
	public function index()

	{
		$data['judul']='Kuesioner Pengguna Alumni';
		$this->view('templates/header', $data);
		$this->view('kpa/index');
		$this->view('templates/footer');
	}
}