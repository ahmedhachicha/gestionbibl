<?php

namespace ContainerDLXKxwD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BFy5Y3_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BFy5Y3.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BFy5Y3.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'livreRepository' => ['privates', 'App\\Repository\\LivreRepository', 'getLivreRepositoryService', true],
        ], [
            'livreRepository' => 'App\\Repository\\LivreRepository',
        ]);
    }
}
