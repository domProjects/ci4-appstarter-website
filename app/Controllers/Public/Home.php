<?php

namespace App\Controllers\Public;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Public\HomeModel;

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
		helper('public/home');
	}

	/**
	 *
	 */
	public function index()
	{
		// Render page
		$this->viewPublic('home');
	}
}
