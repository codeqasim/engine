<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

require_once dirname(__FILE__).'/Base.php';
require_once dirname(__FILE__).'/Collection.php';
		
class MX_Controller
{
	public $autoload = array();
	public $data = array();
	public $appSettings;
	public $App;

	public function __construct()
	{
        /** load the CI class for Modular Extensions **/
        require_once dirname(__FILE__).'/Base.php';
        require_once dirname(__FILE__).'/Collection.php';

		$class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
		log_message('debug', $class." MX_Controller Initialized");
		Modules::$registry[strtolower($class)] = $this;

		/* copy a loader instance and initialize */
		$this->load = clone load_class('Loader');
		$this->load->initialize($this);

		/* autoload module items */
//		$this->load->_autoloader($this->autoload);
	}

	/**
	 * Bootstrape app service provider.
	 */
	public function bootstrapServicesProvider()
	{
		$this->load->helper('directory');
		$providers = directory_map(APPPATH.'/providers');
		foreach($providers as $provider) {
			include_once APPPATH.'/providers/'.$provider;
			$class = rtrim($provider, '.php');
			$providerObject = new $class();
			$providerObject->register($this->App);
		}
	}

	public function __get($class) {
		return CI::$APP->$class;
	}
}

if ( ! function_exists('app')) 
{		
	function app()
	{
 		$MX = new MX_Controller();
		return $MX->App;
	}
}