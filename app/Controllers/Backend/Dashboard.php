<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Backend\DashboardModel;

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
		helper('backend/dashboard');
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
