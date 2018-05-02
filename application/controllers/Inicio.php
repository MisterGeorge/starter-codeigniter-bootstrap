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
		$data['content_for_layout'] = 'inicio';
        $this->parser->parse('layouts/template',$data);
	}

}

/* End of file Inicio.php */
/* Location: ./application/controllers/Inicio.php */