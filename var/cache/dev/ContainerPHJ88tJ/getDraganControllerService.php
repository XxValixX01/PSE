<?php

namespace ContainerPHJ88tJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDraganControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DraganController' shared autowired service.
     *
     * @return \App\Controller\DraganController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DraganController.php';

        $container->services['App\\Controller\\DraganController'] = $instance = new \App\Controller\DraganController();

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\DraganController', $container));

        return $instance;
    }
}
