<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var CLIRequest|IncomingRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

    /**
     * The data to be passed to the view.
     *
     * @var array
     */
    protected $data = [];

	/**
	 * Be sure to declare properties for any property fetch you initialized.
	 * The creation of dynamic property is deprecated in PHP 8.2.
	 */
	// protected $session;

	/**
	 * @return void
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

        // Retrieval of variables for the language
        $this->data['locale'] = $request->getLocale();

        // Retrieval of the charset variable
        $this->data['charset'] = $request->config->charset;
	}

	/**
	 * Rendering of administration pages
	 *
	 * @param string $view The view file to render
	 */
	protected function viewAdmin(string $view)
	{
		// Assemble the browser page
		echo view('admin/' . $view, $this->data);
	}

	/**
	 * Rendering of public pages
	 *
	 * @param string $view The view file to render
	 */
	protected function viewPublic(string $view)
	{
		// Assemble the browser page
		echo view('public/' . $view, $this->data);
	}
}
