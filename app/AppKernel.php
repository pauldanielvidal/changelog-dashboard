<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function init()
    {
        date_default_timezone_set( 'UTC' );
        parent::init();
    }

    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new PVidal\Bundle\ChangelogDashboardBundle\PVidalChangelogDashboardBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {

            $devBundles = array();

            array_push( $devBundles, new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle() );
            array_push( $devBundles, new Sensio\Bundle\DistributionBundle\SensioDistributionBundle() );
            array_push( $devBundles, new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle() );

            $bundles = array_merge( $bundles, $devBundles  );
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
