<?php

namespace ContainerDLXKxwD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PfGrrDjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pfGrrDj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pfGrrDj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartservice' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
        ], [
            'cartservice' => 'App\\Service\\CartService',
        ]);
    }
}