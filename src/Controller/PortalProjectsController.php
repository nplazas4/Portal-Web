<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PortalProjects Controller
 *
 */
class PortalProjectsController extends AppController
{
	private function index()
	{
		try {
			$this->view = '/Pages/portal-projects';
		} catch (\Exception $e) {
			exit($e->getMessage() . "\n");
		}
	}
}
