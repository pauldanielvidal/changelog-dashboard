<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Entity;

use \JamesMoss\Flywheel\Config;

class Base
{
    protected $config;
    public $repo;

    /**
     *   @param boolean $serializeFully
     */
    public function __construct( $service_container )
    {
        $this->config = new Config($service_container->getParameter("flywheel_repo"));
    }

    public function setConfig($configPath)
    {
        $this->config = $configPath;

        return $this;
    }
    public function setTablename($tablename)
    {
        $this->repo = new \JamesMoss\Flywheel\Repository($tablename, $this->config);

        return $this;
    }
}