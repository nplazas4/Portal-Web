<?php
namespace App\Controller;

use App\Controller\AppController;

class EpsController extends AppController
{
    public function index()
    {
        $eps = $this->paginate($this->Eps);
        $this->set('eps', $eps);
    }
}
