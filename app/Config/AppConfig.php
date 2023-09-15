<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class AppConfig extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Website Name
     * --------------------------------------------------------------------------
     *
     * Name of the website which will be displayed, among other things,
     * in the title tag.
     */
    public string $siteName = 'AppStarter';

    /**
     * --------------------------------------------------------------------------
     * Website start date
     * --------------------------------------------------------------------------
     *
     * Website start date which will be displayed in the footer.
     */
    public string $startDate = '2023';
}
