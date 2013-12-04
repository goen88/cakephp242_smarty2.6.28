<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class AdminController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

	var $scaffold;  
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function go() {
		$path = func_get_args();
//		echo $_GET['act'];
//		echo $path[0];
		$this->set('goen','my name si gaorunqiao');
		exit("good");
		$this->render(__FUNCTION__);
	}
	
	//
	public function userList(){
		Controller::loadModel('User');   //加载不相同的model的方式二：$user = ClassRegistry::init('user')
		$userAll = $this->User->find('first');
		echo "<pre>";
		var_export($userAll);
		
		$adminAll = $this->Admin->find('all');
		echo "<pre>";
		var_export($adminAll);
		exit("dd");
		$this->render('list');
	}
	
	
}
