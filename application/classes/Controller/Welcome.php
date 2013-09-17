<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template
{
    
    public $template = 'template/template';
    
	public function before()
    {
	   parent::before();
	}
    
    public function after()
    {
        $this->template->menu = View::factory('template/partial/menu');
        
        parent::after();
    }

} // End Welcome
