<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login_view');
	}

	function inicio(){
		$this->load->view('inicio');

	}

	function alta(){
		$this->load->view('alta_view');

	}
	function acciones(){
		$this->load->view('acciones_view');

	}
	function reporte(){
		 $this->load->model('numerodeparte');
  $data['lista'] = $this->numerodeparte->lista();


		$this->load->view('reporte_view',$data);

	}
}
