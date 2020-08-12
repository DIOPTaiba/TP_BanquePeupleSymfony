<?php

namespace ContainerHbeQ8iZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientMoralControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ClientMoralController' shared autowired service.
     *
     * @return \App\Controller\ClientMoralController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ClientMoralController.php';

        $container->services['App\\Controller\\ClientMoralController'] = $instance = new \App\Controller\ClientMoralController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ClientMoralController', $container));

        return $instance;
    }
}
