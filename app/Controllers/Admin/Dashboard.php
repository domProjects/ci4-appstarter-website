<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Admin\DashboardModel;

class Dashboard extends BaseController
{
	/**
	 *
	 */
	protected $dashboardModel;

	/**
	 *
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		// Declare model
		$this->dashboardModel = new DashboardModel();

		// Loading the helper (function)
		helper('admin/dashboard');
	}

	/**
	 *
	 */
	public function index()
	{
		// Render page
		$this->viewAdmin('dashboard');
	}
}
