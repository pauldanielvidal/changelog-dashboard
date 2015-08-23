<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Services;

use \JamesMoss\Flywheel\Config;

class Flywheel
{
    protected $config;

    public function __construct( $config )
    {
        $this->config = new Config($config);
    }
}