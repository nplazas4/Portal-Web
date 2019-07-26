<?php
namespace App\Controller;

use App\Controller\AppController;

class RyosController extends AppController
{
	public function index()
	{
		try {

		} catch (\Exception $e) {
			exit($e->getMessage() . "\n");
		}
	}
}
