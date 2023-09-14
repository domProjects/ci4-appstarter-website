<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Localize implements FilterInterface
{
    public function __construct()
    {
        helper('inflector');
    }

    /**
     * 
     */
    public function before(RequestInterface $request, $arguments = null, $log = false)
    {
        if ($log)
        {
            log_message('debug', 'FilterLocalize --- start ---');
        }

        $uri        = &$request->uri;
        $segments   = array_filter($uri->getSegments());
        $nbSegments = count($segments);

        if ($log)
        {
            $segmentText = ($nbSegments > 1) ? plural('segment') : 'segment';
            log_message('debug', 'FilterLocalize - ' . $nbSegments . ' ' . $segmentText . ' = ' . print_r($segments, true));
        }

        // Keep only the first 2 letters (en-UK => en)
        $userLocale = strtolower(substr($request->getLocale(), 0, 2));

        if ($log)
        {
            log_message('debug', 'FilterLocalize - Visitor\'s locale = ' . $userLocale);
        }

        // If the user's language is not a supported language, take the default language
        $locale = in_array($userLocale, $request->config->supportedLocales) ? $userLocale : $request->config->defaultLocale;

        if ($log)
        {
            log_message('debug', 'FilterLocalize - Selected locale = ' . $locale);
        }

        // If we request /, redirect to /{locale}
        if ($nbSegments == 0)
        {
            if ($log)
            {
                log_message('debug', 'FilterLocalize - Redirect / to /' . $locale);
                log_message('debug', 'FilterLocalize --- end ---');
            }

            return redirect()->to('/' . $locale);
        }

        if ($log)
        {
            log_message('debug', 'FilterLocalize - segments[0] = ' . $segments[0]);
        }

        $locale = $segments[0];

        // If the first segment of the URI is not a valid locale, trigger a 404 error
        if (! in_array($locale, $request->config->supportedLocales))
        {
            if ($log)
            {
                log_message('debug', 'FilterLocalize - ERROR Invalid locale ' . $locale);
                log_message('debug', 'FilterLocalize --- end ---');
            }

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if ($log)
        {
            log_message('debug', 'FilterLocalize - Valid locale ' . $locale);
            log_message('debug', 'FilterLocalize --- end ---');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
