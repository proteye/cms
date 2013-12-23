<?php 
defined('SYSPATH') or die('No direct script access.');

class Kohana_Controller_Twig_Template extends Controller_Template {
    
    public $template = 'twig/template';
    
    public function before()
	{
        $old_auto_render   =  $this->auto_render;
        //avoid to create a template object
        $this->auto_render = FALSE;        
		parent::before();        
        $this->auto_render = $old_auto_render;
        unset($old_auto_render);
        
		if ($this->auto_render === TRUE)
			$this->template = Twig_View::factory($this->template);
	}
    
}