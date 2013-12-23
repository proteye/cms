<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Класс обработки ошибок
 */

class HTTP_Exception extends Kohana_HTTP_Exception {
 
    /**
     * Generate a Response for all Exceptions without a more specific override
     *
     * The user should see a nice error page, however, if we are in development
     * mode we should show the normal Kohana error page.
     *
     * @return Response
     */
    public function get_response()
    {
        // Lets log the Exception, Just in case it's important!
        Kohana_Exception::log($this);
 
        if (Kohana::$environment >= Kohana::DEVELOPMENT)
        {
            // Show the normal Kohana error page.
            return parent::get_response();
        }
        else
        {
            $code = $this->getCode();
            
            if (!in_array($code, array('404', '503', '500')))
                $code = '500';
            $view = View::factory('errors/'.$code);
 
            $response = Response::factory()
                ->status($this->getCode())
                ->body($view->render());
 
            return $response;
        }
    }
}