<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PortalProjects Controller
 *
 */
class PortalProjectsController extends AppController
{
	public function index()
	{
		$this->view = '/Pages/portal-projects';
	}
	public function companies()
	{
		$this->view = '/Pages/companies';
	}
	public function company()
	{
		$this->view = '/Pages/company';
	}
	public function projects()
	{
		$this->view = '/Pages/projects';
	}
	public function project()
	{
		$this->view = '/Pages/project';
	}
}
