<?php

namespace Container3XypZFD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CartService' shared autowired service.
     *
     * @return \App\Service\CartService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CartService.php';

        return $container->privates['App\\Service\\CartService'] = new \App\Service\CartService(($container->services['session'] ?? $container->load('getSessionService')), ($container->privates['App\\Repository\\LivreRepository'] ?? $container->load('getLivreRepositoryService')));
    }
}
