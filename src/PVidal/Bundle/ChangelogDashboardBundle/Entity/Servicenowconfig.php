<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicenowconfig
 */
class Servicenowconfig
{
    /**
     * @var integer
     */
    private $applicationid;

    /**
     * @var string
     */
    private $businessservice;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $subcategory;

    /**
     * @var string
     */
    private $configurationitem;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set applicationid
     *
     * @param integer $applicationid
     * @return Servicenowconfig
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
     * Set businessservice
     *
     * @param string $businessservice
     * @return Servicenowconfig
     */
    public function setBusinessservice($businessservice)
    {
        $this->businessservice = $businessservice;

        return $this;
    }

    /**
     * Get businessservice
     *
     * @return string 
     */
    public function getBusinessservice()
    {
        return $this->businessservice;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Servicenowconfig
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set subcategory
     *
     * @param string $subcategory
     * @return Servicenowconfig
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return string 
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set configurationitem
     *
     * @param string $configurationitem
     * @return Servicenowconfig
     */
    public function setConfigurationitem($configurationitem)
    {
        $this->configurationitem = $configurationitem;

        return $this;
    }

    /**
     * Get configurationitem
     *
     * @return string 
     */
    public function getConfigurationitem()
    {
        return $this->configurationitem;
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
