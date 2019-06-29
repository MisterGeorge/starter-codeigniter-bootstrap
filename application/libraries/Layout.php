<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Vistas y Layout
 *
 * Realiza tareas basicas para vistas y layouts
 */
class Layout
{
	/**
	 * [$CI description]: Instancia del Objeto de CodeIgniter.
	 * @var [type]
	 */
	private $CI;

	/**
	 * [$layout description]: Nombre del layout por defecto.
	 * @var string
	 */
	public $layout		= 'app';

	/**
	 * [$js description]: Archivos JS para insertar en el layout.
	 * @var string
	 */
	public $js			= '';

	/**
	 * [$css description]: Archivos CSS para insertar en el layout.
	 * @var string
	 */
	public $css			= '';

	/**
	 * [__construct description]
	 * @param string $layout [description]: Inicializa la instancia de
	 * CodeIgniter y setea el layout por defecto.
	 */
	public function __construct($layout = 'app')
	{
		$this->CI		=& get_instance();
		$this->layout	= $layout;
	}

	/**
	 * [setLayout description]: Setea el layout a utilizar
	 * @param [type] $layout [description]: Nombre del layout
	 */
	function setLayout($layout)
	{
		$this->layout	= $layout;
	}

	/**
	 * Retorna o renderea una vista
	 *
	 * @param	string		$view			Nombre de la vista a procesar
	 * @param	array		$data			Datos que se enviaran a la vista
	 * @param	boolean		$return			Determina si una vista debe ser devuelta o rendereada directamente
	 * @return	string						Si se pasa $return en true, devuelve el contenido de la vista
	 */
	function view($view = null, $data = null, $return = false)
	{
		$layout			= "layouts/{$this->layout}";
		$vista			= (substr($view, 0, 1) == '/' ? $view : "{$this->CI->router->directory}{$this->CI->router->class}/{$view}");
		$load_view		= array('content_for_layout' => $this->CI->load->view($vista, $data, true));

		if ( $return )
			return $this->CI->load->view($layout, $load_view, true);
		else
			$this->CI->load->view($layout, $load_view, false);
	}

	/**
	 * Retorna o renderea un elemento
	 *
	 * @param	string		$view			Nombre de la vista a procesar
	 * @param	array		$data			Datos que se enviaran a la vista
	 * @param	boolean		$return			Determina si una vista debe ser devuelta o rendereada directamente
	 * @return	string						Si se pasa $return en true, devuelve el contenido de la vista
	 */
	public function element($view = null, $data = null, $return = false)
	{
		$element			= "partials/{$view}";
		$content_for_layout	= $data;

		if ( $return )
			return $this->CI->load->view($element, compact('content_for_layout'), true);
		else
			$this->CI->load->view($element, compact('content_for_layout'), false);
	}

	/**
	 * Variables para mejorar el SEO del sitio
	 * @var string
	 */
	public $title       	= 'Aplicación Web';
	public $author 			= 'nombre del author';
	public $descripcion 	= 'descripción seo por defecto';
	public $keywords    	= 'palabras clave';
	public $applicationName = 'nombre de tu app';
	public $generator 		= 'nombre de tu SMD o frameword en caso que lo uses';
	public $robots			= 'index, follow';

	/**
	 * [setTitle description]: Este método nos da acceso al título y asignar
	 * un nuevo valor de la propiedad o del elemento.
	 * @param [type] $title [description]
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * [getTitle description]: Este método nos permite obtener o mostrar el valor
	 * de la propiedad o elemento.
	 * @return [type] [description]
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * [setauthor description]: Este método nos da acceso al author y asignar
	 * un nuevo valor de la propiedad o del elemento.
	 * @param [type] $author [description]
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
	}

	/**
	 * [getauthor description]: Este método nos permite obtener o mostrar el valor
	 * de la propiedad o elemento.
	 * @return [type] [description]
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * [setDescripcion description]: Este método nos da acceso a la descripción y
	 * asignar un nuevo valor de la propiedad o del elemento.
	 * @param [type] $descripcion [description]
	 */
	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	/**
	 * [getDescripcion description]: Este método nos permite obtener o mostrar el valor
	 * de la propiedad o elemento.
	 * @return [type] [description]
	 */
	public function getDescripcion()
	{
		return $this->descripcion;
	}

	/**
	 * [setKeywords description]: Este método nos da acceso a las keywords y asignar
	 * un nuevo valor de la propiedad o del elemento.
	 * @param [type] $keywords [description]
	 */
	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
	}

	/**
	 * [getKeywords description]: Este método nos permite obtener o mostrar el valor
	 * de la propiedad o elemento.
	 * @return [type] [description]
	 */
	public function getKeywords()
	{
		return $this->keywords;
	}

	/**
	 * [setApplicationName description]: Este método nos da acceso al nombre de
	 * de la aplicación y asignar un nuevo valor de la propiedad o del elemento.
	 * @param [type] $applicationName [description]
	 */
	public function setApplicationName($applicationName)
	{
		$this->applicationName = $applicationName;
	}

	/**
	 * [getApplicationName description]: Este método nos permite obtener o mostrar el valor
	 * de la propiedad o elemento.
	 * @return [type] [description]
	 */
	public function getApplicationName()
	{
		return $this->applicationName;
	}

	/**
	 * [setGenerator description]: Este método nos da acceso al Generador de
	 * de la aplicación y asignar un nuevo valor de la propiedad o del elemento.
	 * @param [type] $generator [description]
	 */
	public function setGenerator($generator)
	{
		$this->generator = $generator;
	}

	/**
	 * [getGenerator description]: Este método nos permite obtener o mostrar el valor
	 * de la propiedad o elemento.
	 * @return [type] [description]
	 */
	public function getGenerator()
	{
		return $this->generator;
	}

	/**
	 * [setRobots description]: Este método nos da acceso a los Robots de
	 * de la aplicación y asignar un nuevo valor de la propiedad o del elemento.
	 * @param [type] $robots [description]
	 */
	public function setRobots($robots)
	{
		$this->robots = $robots;
	}

	/**
	 * [getRobots description]: Este método nos permite obtener o mostrar el valor
	 * de la propiedad o elemento.
	 * @return [type] [description]
	 */
	public function getRobots()
	{
		return $this->robots;
	}

	/**
	 * Captura y formatea los archivos JS para insertar a la vista
	 *
	 * @param	array		$archivos		Arreglo de archivos
	 */
	public function js($archivos = array())
	{
		foreach ( $archivos as $archivo )
			$this->js .= "<script type=\"text/javascript\" src=\"{$archivo}\"></script>\n";
	}

	/**
	 * Captura y formatea los archivos JS para insertar a la vista
	 *
	 * @param	array		$archivos		Arreglo de archivos
	 */
	public function css($archivos = array())
	{
		foreach ( $archivos as $archivo )
			$this->css .= "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$archivo}\" />\n";
	}
}

/* End of file Layout.php */
/* Location: ./application/libraries/Layout.php */