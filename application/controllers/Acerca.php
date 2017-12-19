<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acerca extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template');
    }
	
	public function index()
	{
		$this->layout->view('acerca');
	}

}

/* End of file Acerca.php */
/* Location: ./application/controllers/Acerca.php */