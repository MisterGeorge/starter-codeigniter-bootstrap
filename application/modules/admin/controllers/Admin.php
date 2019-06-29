<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
        /**
         * Instaciar siempre la librería para que el sistema de layout fucione correctamente.
         */
        $this->layout->setLayout('admin');
    }

	public function index()
	{
		/**
		 * Estructura para instanciar la vista requerida y que sea renderizada.
		 */
		$data['content_for_layout'] = 'admin';
        $this->parser->parse('layouts/admin',$data);
	}

}

/* End of file Admin.php */
/* Location: ./modules/admin/controllers/Admin.php */