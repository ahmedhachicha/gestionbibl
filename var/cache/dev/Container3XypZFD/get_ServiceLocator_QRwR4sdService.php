<?php

namespace Container3XypZFD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QRwR4sdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QRwR4sd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QRwR4sd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'AuteurRepository' => ['privates', 'App\\Repository\\AuteurRepository', 'getAuteurRepositoryService', true],
            'livreRepository' => ['privates', 'App\\Repository\\LivreRepository', 'getLivreRepositoryService', true],
        ], [
            'AuteurRepository' => 'App\\Repository\\AuteurRepository',
            'livreRepository' => 'App\\Repository\\LivreRepository',
        ]);
    }
}
