<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applicationurl
 */
class Applicationurl
{
    /**
     * @var integer
     */
    private $applicationid;

    /**
     * @var integer
     */
    private $environmentid;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set applicationid
     *
     * @param integer $applicationid
     * @return Applicationurl
     */
    public function setApplicationid($applicationid)
    {
        $this->applicationid = $applicationid;

        return $this;
    }

    /**
     * Get applicationid
     *
     * @return integer 
     */
    public function getApplicationid()
    {
        return $this->applicationid;
    }

    /**
     * Set environmentid
     *
     * @param integer $environmentid
     * @return Applicationurl
     */
    public function setEnvironmentid($environmentid)
    {
        $this->environmentid = $environmentid;

        return $this;
    }

    /**
     * Get environmentid
     *
     * @return integer 
     */
    public function getEnvironmentid()
    {
        return $this->environmentid;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Applicationurl
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
