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
	 * The subtitle to be passed to the view.
	 *
	 * @var string
	 */
	protected $subtitle = '';

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

		//
		$this->config = config('AppConfig');

		// Security of response headers
		$response->setHeader('Access-Control-Allow-Origin', site_url());
		$response->setHeader('Content-Type', 'text/html; charset=' . $request->config->charset);
		$response->setHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
		$response->setHeader('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
		$response->setHeader('X-Content-Type-Options', 'nosniff');
		$response->setHeader('X-Frame-Options', 'DENY');
		$response->setHeader('X-XSS-Protection', '1; mode=block');

		// Retrieval of variables for the language
		$this->data['locale'] = $request->getLocale();
		$this->data['supportedLocales'] = $request->config->supportedLocales;

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
		echo view('backend/' . $view, $this->data);
	}

	/**
	 * Rendering of public pages
	 *
	 * @param string $view The view file to render
	 */
	protected function viewFront(string $view)
	{
		// Displaying the title
		$this->data['title'] = $this->config->siteName;

		// Displaying the title for the <title> tag
		$this->data['titleTag'] = title_tag($this->config->siteName, $this->subtitle);

		// 
		$this->data['copyright'] = copyright(lang('AppFrontend.copyright'), $this->config->startDate, $this->config->siteName);

		// Assemble the browser page
		echo view('frontend/' . $view, $this->data);
	}
}
