<?php 
defined('SYSPATH') or die('No direct script access.');

class Kohana_Twig_View extends View {
    
    protected $_twig_environment;
    
    public function __construct($file = NULL, array $data = NULL) 
    {
        parent::__construct(NULL, $data);
        $this->_file = $file;
        $this->setup_twig();        
    }
    
    
    public static function factory($file = NULL, array $data = NULL)
	{
		return new Twig_View($file, $data);
	}
    
    protected function setup_twig() 
    {
        $twig_config = Kohana::$config->load('twig');
        $loader      = new Twig_Loader_Kohana();
        $this->_twig_environment = new Twig_Environment($loader, $twig_config['environment']);
    }
    
    public function render($file = NULL) 
    {
        if ($file !== NULL)
            $this->_file = $file;
        
        return $this->_twig_environment->render($this->_file, $this->_data);
    }
    
    
}