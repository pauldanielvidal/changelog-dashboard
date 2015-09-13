<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Changelog
 */
class Changelog
{
    /**
     * @var string
     */
    private $applicationid;

    /**
     * @var integer
     */
    private $environmentid;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $dateofdeployment;

    /**
     * @var string
     */
    private $dateentered;

    /**
     * @var integer
     */
    private $statusid;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var string
     */
    private $servicenowticket;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set applicationid
     *
     * @param string $applicationid
     * @return Changelog
     */
    public function setApplicationid($applicationid)
    {
        $this->applicationid = $applicationid;

        return $this;
    }

    /**
     * Get applicationid
     *
     * @return string 
     */
    public function getApplicationid()
    {
        return $this->applicationid;
    }

    /**
     * Set environmentid
     *
     * @param integer $environmentid
     * @return Changelog
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
     * Set description
     *
     * @param string $description
     * @return Changelog
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Changelog
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set dateofdeployment
     *
     * @param string $dateofdeployment
     * @return Changelog
     */
    public function setDateofdeployment($dateofdeployment)
    {
        $this->dateofdeployment = $dateofdeployment;

        return $this;
    }

    /**
     * Get dateofdeployment
     *
     * @return string 
     */
    public function getDateofdeployment()
    {
        return $this->dateofdeployment;
    }

    /**
     * Set dateentered
     *
     * @param string $dateentered
     * @return Changelog
     */
    public function setDateentered($dateentered)
    {
        $this->dateentered = $dateentered;

        return $this;
    }

    /**
     * Get dateentered
     *
     * @return string 
     */
    public function getDateentered()
    {
        return $this->dateentered;
    }

    /**
     * Set statusid
     *
     * @param integer $statusid
     * @return Changelog
     */
    public function setStatusid($statusid)
    {
        $this->statusid = $statusid;

        return $this;
    }

    /**
     * Get statusid
     *
     * @return integer 
     */
    public function getStatusid()
    {
        return $this->statusid;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Changelog
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set servicenowticket
     *
     * @param string $servicenowticket
     * @return Changelog
     */
    public function setServicenowticket($servicenowticket)
    {
        $this->servicenowticket = $servicenowticket;

        return $this;
    }

    /**
     * Get servicenowticket
     *
     * @return string 
     */
    public function getServicenowticket()
    {
        return $this->servicenowticket;
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
