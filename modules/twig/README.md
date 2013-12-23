Twig Module For Kohana 3.3
======================

[TWIG](http://twig.sensiolabs.org/) Module for Kohana 3.3 to use templates as Kohana views seamlessly.


Usage
-----


```php
// inside an action in your controller...
$this->response->body(Twig_View::factory('path/to/your/twig/view');
```

there is also a template controller:

```php
class Controller_Welcome extends Twig_Controller_Template {
	
	//default $template is twig/template
	public $template = 'path/to/your/template';

	function action_index()
	{
		$this->var = 'value';
		$this->foo = View::factory('your_normal_kohana_view');
		$this->bar = Twig_View::factory('your_twig_view', array('view_var' => 'view_value'));
	}

}
```









