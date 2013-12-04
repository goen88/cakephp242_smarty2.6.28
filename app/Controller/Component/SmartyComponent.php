<?php

/**
 * import smarty core class
 *
 */
App::import('vendor', 'smarty', array('file' => 'smarty'.DS.'libs'.DS.'Smarty.class.php'));

class SmartyComponent extends Smarty {
	var $controller = true;
	var $template_dir;
	var $compile_dir;
	var $cache_dir;
	function __construct() {
		parent::__construct();
		$this->caching = true;
		$this->cache_lifetime = 3600*5;
		$this->template_dir = VIEWS;
		$this->compile_dir = TMP . 'smarty' . DS . 'compile' . DS;
		$this->cache_dir = TMP . 'smarty' . DS . 'cache' . DS;
		$this->left_delimiter = '<{';
		$this->right_delimiter = '}>';
	}
	
	function initialize(){
		
	}
	
	function beforeRender(){
		
	}
	
	function shutdown(){
		
	}
	
 	function startup(&$controller)
    {
        // This method takes a reference to the controller which is loading it.
        // Perform controller initialization here.
    }
    
}