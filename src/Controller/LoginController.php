<?php
namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController
{
    public function index()
    {
        /*Identifica si exíste algún usuario logeado en el sistema, en ser el caso redirecciona a la pestaña home, sino permite el acceso
        a la página de login*/
        if ($this->Auth->user()) {
            return $this->redirect(['controller'=>'Pages','action' => 'home']);
        } else {
            // Redirecciona al controlador UsersController a la acción login.
            $this->view = '/Users/login';
            //Quita el header y footer.
            $this->layout = 'blank';
        }
    }
}
