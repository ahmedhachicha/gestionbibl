<?php

namespace Container3XypZFD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hy9MrxwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hy9Mrxw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hy9Mrxw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'LivreRepository' => ['privates', 'App\\Repository\\LivreRepository', 'getLivreRepositoryService', true],
            'cartservice' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'LivreRepository' => 'App\\Repository\\LivreRepository',
            'cartservice' => 'App\\Service\\CartService',
            'session' => '?',
        ]);
    }
}
