<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Entity;

class Post extends Base
{
    public function __construct( )
    {
        parent::__construct("Post");
    }

    private $id;
}
