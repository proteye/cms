<?php 
defined('SYSPATH') or die('No direct script access.');

class Kohana_Twig_Loader_Kohana implements Twig_LoaderInterface {
    
    public function getCacheKey($name) 
    {
        return sha1($name);
    }

    public function getSource($name) 
    {
        return View::factory($name)->render();
    }

    public function isFresh($name, $time) 
    {
        $path = Kohana::find_file('views', $name);
        
        if ($path === FALSE)
            return FALSE;
        
        $modified_time = filemtime($path);        
        
        return $modified_time > $time;
    }
    
}