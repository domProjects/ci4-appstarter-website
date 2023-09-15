<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Frontend\HomeModel;

class Home extends BaseController
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
		$this->homedModel = new HomeModel();

		// Loading the helper (function)
		helper('frontend/home');
	}

	/**
	 *
	 */
	public function index()
	{
		// Declare subtitle
		$this->subtitle = lang('AppFrontend.menu.home');

		// Render page
		$this->viewFront('home');
	}
}
