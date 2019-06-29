<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
        /**
         * Instaciar siempre la librería para que el sistema de layout fucione correctamente.
         */
        $this->layout->setLayout('app');
    }

	public function index()
	{
		/**
		 * Estructura para instanciar la vista requerida y que sea renderizada.
		 */
		$data['content_for_layout'] = 'blog';
        $this->parser->parse('layouts/blog',$data);
	}

	public function blog_post()
	{
		$data['content_for_layout'] = 'blog_post';
        $this->parser->parse('layouts/blog',$data);
	}

}

/* End of file Blog.php */
/* Location: ./modules/blog/controllers/Blog.php */