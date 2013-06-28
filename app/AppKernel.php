<?php

/*
 * Symfony Test Edition
 * ====================
 * Stripped down edition of Symfony2 for executing bundle tests.
 */

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
 
class AppKernel extends Kernel
{
    public function registerBundles()
    {   
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        );
    }   
 
    public function registerContainerConfiguration(LoaderInterface $loader)
    {   
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }   
 
    /** 
     * @return string
     */
    public function getCacheDir()
    {   
        return sys_get_temp_dir().'/EoPassbookBundle/cache';
    }   
 
    /** 
     * @return string
     */
    public function getLogDir()
    {   
        return sys_get_temp_dir().'/EoPassbookBundle/logs';
    }   
}