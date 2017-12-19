<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template');
    }
	
	public function index()
	{
		$this->layout->view('inicio');
	}

}

/* End of file Inicio.php */
/* Location: ./application/controllers/Inicio.php */