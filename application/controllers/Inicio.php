<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        /**
         * Instaciar siempre la librería para que el sistema de layout fucione correctamente.
         */
        $this->layout->setLayout('template');
    }
	
	public function index()
	{	
		/**
		 * Estructura para instanciar la vista requerida y que sea renderizada.
		 */
		$data['content_for_layout'] = 'inicio';
        $this->parser->parse('layouts/template',$data);
	}

}

/* End of file Inicio.php */
/* Location: ./application/controllers/Inicio.php */