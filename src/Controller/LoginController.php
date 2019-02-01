<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Login Controller
 *
 */
class LoginController extends AppController
{
	 // public function beforeFilter($event)
	 // {
	 //     parent::beforeFilter($event);
	 // }
	 // //recibe el usuario autentificado
	 // public function isAuthorized($user)
	 // {
	 //   if (isset($user['rol']) and $user['rol']===0)
	 //   {
	 //     if (in_array($this->request->action,['home','view','logout']))
	 //     {
	 //       return true;
	 //     }
	 //   }
	 //   return parent::isAuthorized($user);
	 // }
	public function index()
	{
		// Identifica si exíste algún usuario logeado en el sistema, en ser el caso retorna a la pestaña home,, sino permite el acceso
		// a la página de login
		if($this->Auth->user()) {
				return $this->redirect(['controller'=>'Pages','action' => 'home']);
		}
		else{
		$this->view = '/Users/login';
		$this->layout = 'blank';
	}
	}
}
