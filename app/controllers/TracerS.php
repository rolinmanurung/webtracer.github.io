<?php 

class TracerS extends Controller{
	
	public function index()

	{
		$data['judul']='Tracer Study';
		$this->view('templates/header', $data);
		$this->view('tracers/index');
		$this->view('tracers/action');
		$this->view('database/koneksi');
		$this->view('templates/footer');
	}
}
